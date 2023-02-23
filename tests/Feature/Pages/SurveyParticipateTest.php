<?php

namespace Tests\Feature\Pages;

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\Section;
use App\Models\Survey;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SurveyParticipateTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected $admin;

    protected $form;

    protected $questionForm;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->admin = User::factory()->create([
            "admin" => true
        ]);

        $this->actingAs($this->user);
    }

    /** @test */
    function 섹션목록을_조회할_수_있다()
    {
        $survey = Survey::factory()->create();

        $sections = Section::factory()->count(3)->create([
            "survey_id" => $survey->id
        ]);

        $this->get("/surveys/participate/". $survey->id)->assertInertia(function($page) use ($sections){
            $items = $page->toArray()["props"]["sections"]["data"];

            $this->assertCount(count($sections), $items);
        });
    }

    /** @test */
    function 섹션별_질문을_조회할_수_있다()
    {
        $survey = Survey::factory()->create();

        $section = Section::factory()->create([
            "survey_id" => $survey->id
        ]);

        $questions = Question::factory()->count(5)->create([
            "section_id" => $section->id
        ]);

        $this->get("/surveys/participate/". $survey->id)->assertInertia(function($page) use ($questions){
            $items = $page->toArray()["props"]["sections"]["data"];

            $this->assertCount(count($questions), $items[0]["questions"]);
        });
    }

    /** @test */
    function 설문참여페이지에_들어오면_사용자의_설문응답지가_생성된다()
    {
        $survey = Survey::factory()->create();

        $this->get("/surveys/participate/". $survey->id);

        $this->assertCount(1, $this->user->load("surveys")->surveys);
    }


    /** @test */
    function 사전설문조사가_있는_설문조사는_사전설문조사_페이지로_이동한다()
    {
        $survey = Survey::factory()->create();

        $preSurvey = Survey::factory()->create([
            "survey_id" => $survey->id
        ]);

        $this->get("/surveys/participate/".$survey->id)->assertRedirect("/surveys/participate/".$preSurvey->id);

        $this->assertCount(0, $this->user->load("answers")->answers);
    }

    /** @test */
    function 사전설문조사에_통과하지_못한_사용자는_해당_설문조사에_참여할_수_없다()
    {
        $survey = Survey::factory()->create();

        $preSurvey = Survey::factory()->create([
            "survey_id" => $survey->id
        ]);

        $preSurvey->users()->attach($this->user, [
            "pass" => 0
        ]);

        $this->get("/surveys/participate/".$survey->id)->assertStatus(302);
    }

    /** @test */
    function 같은_사용자는_같은_설문지에_대해_한개의_설문응답지만_가질_수_있다()
    {
        $survey = Survey::factory()->create();

        $this->get("/surveys/participate/". $survey->id);

        $this->assertCount(1, $this->user->load("surveys")->surveys);

        $this->get("/surveys/participate/". $survey->id);

        $this->assertCount(1, $this->user->load("surveys")->surveys);
    }

    /** @test */
    function 답변을_생성할_수_있다()
    {
        $survey = Survey::factory()->create();

        $survey->users()->attach($this->user->id);

        $section = Section::factory()->create([
            "survey_id" => $survey->id
        ]);

        $requiredQuestions = Question::factory([
            "section_id" => $section->id,
            "required" => 1
        ])->count(5)->create();

        $unRequiredQuestions = Question::factory([
            "section_id" => $section->id,
            "required" => 0
        ])->count(7)->create();

        $answers = [];

        foreach($requiredQuestions as $requiredQuestion){
            $answers[] = [
                "question_id" => $requiredQuestion->id,
                "answer" => "123"
            ];
        }

        $this->post("/answers", [
            "survey_id" => $survey->id,
            "answers" => $answers
        ]);

        $this->assertCount(count($answers), $this->user->load("answers")->answers);
    }

    /** @test */
    function 모든_필수응답질문에_대해_답변을_남겨야만_완료처리된다()
    {
        $survey = Survey::factory()->create();

        $survey->users()->attach($this->user->id);

        $section = Section::factory()->create([
            "survey_id" => $survey->id
        ]);

        $requiredQuestions = Question::factory([
            "section_id" => $section->id,
            "required" => 1
        ])->count(5)->create();

        $unRequiredQuestions = Question::factory([
            "section_id" => $section->id,
            "required" => 0
        ])->count(7)->create();

        $answers = [];

        $requiredQuestions = $requiredQuestions->slice(0, 2);

        foreach($requiredQuestions as $requiredQuestion){
            $answers[] = [
                "question_id" => $requiredQuestion->id,
                "answer" => ""
            ];
        }

        $this->post("/answers", [
            "survey_id" => $survey->id,
            "answers" => $answers
        ]);

        $this->assertCount(0, $this->user->load("answers")->answers);
    }


}
