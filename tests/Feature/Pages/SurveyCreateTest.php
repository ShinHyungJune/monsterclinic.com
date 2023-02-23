<?php

namespace Tests\Feature\Pages;

use App\Enums\QuestionType;
use App\Models\Option;
use App\Models\Question;
use App\Models\Section;
use App\Models\Survey;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SurveyCreateTest extends TestCase
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

        $this->actingAs($this->admin);

        $this->form = [
            "point" => 1,
            "title" => "테스트",
            "description" => "테스트",
            "max" => 10,
            "finished_at" => Carbon::now()->addDay(),
            "hide" => 1,
        ];

        $this->questionForm = [
            "section_id" => null,
            "title" => "테스트",
            "description" => "테스트",
            "type" => QuestionType::RADIO,
            "required" => 1,
            "pre" => 0,
        ];
    }

    /** @test */
    function 사용자는_설문조사생성페이지를_조회할_수_없다()
    {
        $this->actingAs($this->user);

        $this->get("/surveys/create")->assertStatus(302);
    }

    /** @test */
    function 관리자가_설문조사생성페이지에_들어오면_설문지가_생성된다()
    {
        $this->actingAs($this->admin);

        // 설문조사 생성
        $this->get("/surveys/create")->assertInertia(function($page){
            $survey = $page->toArray()["props"]["survey"]["data"];
            $surveyId = $page->toArray()["props"]["survey_id"];

            $this->assertNotNull($survey);
            $this->assertNotNull($surveyId);

            $this->assertCount(1, Survey::all());

            // 생성된 설문조사 기반으로 재조회 시 생성 x
            $this->json("get","/surveys/create",[
                "survey_id" => $surveyId
            ])->assertInertia(function($page){
                $this->assertCount(1, Survey::all());
            });
        });
    }

    /** @test */
    function 설문지를_수정할_수_있다()
    {
        $survey = Survey::factory()->create();

        $this->post("/surveys/update/".$survey->id, $this->form);

        $survey = Survey::find($survey->id);

        $this->assertEquals($survey->title, $this->form["title"]);
    }

    /** @test */
    function 설문지를_삭제할_수_있다()
    {
        $survey = Survey::factory()->create();

        // 설문조사 생성
        $this->delete("/surveys/".$survey->id);

        $this->assertCount(0, Survey::all());
    }

    /** @test */
    function 섹션목록을_조회할_수_있다()
    {
        $survey = Survey::factory()->create();

        $sections = Section::factory()->count(10)->create([
            "survey_id" => $survey->id
        ]);

        // 설문조사 생성
        $this->json("get","/surveys/create", [
            "survey_id" => $survey->id
        ])->assertInertia(function($page) use ($sections){
            $items = $page->toArray()["props"]["sections"]["data"];

            $this->assertCount(count($sections), $items);
        });
    }

    /** @test */
    function 섹션을_생성할_수_있다()
    {
        $survey = Survey::factory()->create();

        // 설문조사 생성
        $this->json("post","/sections", [
            "survey_id" => $survey->id,
            "title" => "title",
            "description" => "description"
        ]);

        $survey = Survey::find($survey->id);

        $this->assertCount(1, $survey->sections);

        $this->json("post","/sections", [
            "survey_id" => $survey->id,
            "title" => "title",
            "description" => "description"
        ]);

        $survey = Survey::find($survey->id);

        $this->assertCount(2, $survey->sections);
    }

    /** @test */
    function 섹션을_삭제할_수_있다()
    {
        $section = Section::factory()->create();

        $this->assertCount(1, Section::all());

        // 설문조사 생성
        $this->json("delete","/sections/".$section->id);

        $this->assertCount(0, Section::all());
    }

    /** @test */
    function 섹션을_복사할_수_있다()
    {
        $section = Section::factory()->create();

        $questions = Question::factory()->count(3)->create([
            "section_id" => $section->id
        ]);

        foreach($questions as $question){
            Option::factory()->count(rand(1,5))->create([
                "question_id" => $question->id
            ]);
        }

        $options = Option::get();

        $this->post("/sections/copy", [
            "section_id" => $section->id,
        ]);

        $createdSection = Survey::latest()->first();

        $this->assertCount(count($questions), $createdSection->questions);

        $createdOptions = [];

        foreach($createdSection->questions as $question){
            $createdOptions = array_merge($createdOptions, $question->options->toArray());
        }

        $this->assertCount(count($options), $createdOptions);
    }

    /** @test */
    function 질문을_생성할_수_있다()
    {
        $section = Section::factory()->create();

        $this->questionForm["section_id"] = $section->id;

        $this->post("/questions", $this->questionForm);

        $this->assertCount(1, Question::all());
    }

    /** @test */
    function 질문을_삭제할_수_있다()
    {
        $question = Question::factory()->create();

        $this->assertCount(1, Question::all());

        $this->delete("/questions/".$question->id);

        $this->assertCount(0, Question::all());
    }

    /** @test */
    function 질문은_수정할_수_있다()
    {
        $question = Question::factory()->create();

        $changeTitle = "테스트 123 123";

        $question->title = $changeTitle;

        $this->patch("/questions/".$question->id, $question->toArray());

        $question = Question::find($question->id);

        $this->assertEquals($changeTitle, $question->title);
    }

    /** @test */
    function 질문은_옵션을_가질_수_있다()
    {
        $options = [
            [
                "title" => "선택지 1",
            ],
            [
                "title" => "선택지 2",
            ],
        ];

        $this->questionForm["section_id"] = Section::factory()->create()->id;
        $this->questionForm["options"] = $options;

        $this->post("/questions", $this->questionForm);

        $question = Question::first();

        $this->assertCount(count($options), $question->options);
    }

    /** @test */
    function 질문을_복사할_수_있다()
    {
        $question = Question::factory()->create();

        $options = Option::factory()->count(3)->create([
            "question_id" => $question->id
        ]);

        $this->post("/questions/copy", [
            "question_id" => $question->id
        ]);

        $createdQuestion = Question::orderBy("created_at", "desc")->first();

        $this->assertCount(count($options), $createdQuestion->options);
        $this->assertCount(2, Question::all());
    }

    /** @test */
    function 옵션을_수정할_수_있다()
    {
        $options = [
            [
                "title" => "선택지 1",
            ],
            [
                "title" => "선택지 2",
            ],
        ];

        $this->questionForm["section_id"] = Section::factory()->create()->id;
        $this->questionForm["options"] = $options;

        $this->post("/questions", $this->questionForm);

        $question = Question::first();

        $changeTitle = "test";

        $options = [
            [
                "title" => $changeTitle
            ]
        ];

        $this->questionForm["options"] = $options;

        $this->patch("/questions/".$question->id, $this->questionForm);

        $question = Question::first();

        $this->assertCount(count($options), $question->options);

        $this->assertEquals($changeTitle, $question->options()->first()->title);
    }

    /** @test */
    function 최근_설문지_목록을_조회할_수_있다()
    {
        $surveys = Survey::factory()->count(6)->create([
            "hide" => 0
        ]);

        $this->get("/surveys/create")->assertInertia(function($page) use($surveys){
            $items = $page->toArray()["props"]["latestSurveys"]["data"];

            $this->assertCount(count($surveys), $items);
        });
    }

    /** @test */
    function 최근_설문지를_복사할_수_있다()
    {
        $this->get("/surveys/create");

        $survey = Survey::first();

        $copySurvey = Survey::factory()->create([
            "hide" => 0
        ]);

        $sections = Section::factory()->count(rand(1,4))->create([
            "survey_id" => $copySurvey->id
        ]);

        foreach($sections as $section){
            $questions = Question::factory()->count(rand(2,5))->create([
                "section_id" => $section->id
            ]);

            foreach($questions as $question){
                $options = Option::factory()->count(rand(1,4))->create([
                    "question_id" => $question->id
                ]);
            }
        }

        $this->post("/surveys/copy", [
            "survey_id" => $survey->id,
            "copy_survey_id" => $copySurvey->id
        ]);

        $survey = Survey::find($survey->id)->load("sections");

        $this->assertEquals($copySurvey->title, $survey->title);
        $this->assertCount(count($copySurvey->questions), $survey->questions);

    }
}
