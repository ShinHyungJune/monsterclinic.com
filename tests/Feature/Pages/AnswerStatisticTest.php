<?php

namespace Tests\Feature\Pages;

use App\Enums\QuestionType;
use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use App\Models\Option;
use App\Models\Question;
use App\Models\Survey;
use App\Models\User;
use Database\Factories\AnswerFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnswerStatisticTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected $admin;

    protected $form;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        $this->admin = User::factory()->create([
            "admin" => true
        ]);

        $this->actingAs($this->admin);
    }

    /** @test */
    function 단일선택_복수선택_선형배율의_옵션별_선택수를_알_수_있다()
    {
        $question = Question::factory()->create([
            "type" => QuestionType::RADIO
        ]);

        $options = Option::factory()->count(3)->create([
            "question_id" => $question->id
        ]);

        $answers01 = Answer::factory()->count(17)->create([
            "question_id" => $question->id,
            "answer" => $options[0]->title
        ]);

        $answers02 = Answer::factory()->count(2)->create([
            "question_id" => $question->id,
            "answer" => $options[1]->title
        ]);


        $answers03 = Answer::factory()->count(488)->create([
            "question_id" => $question->id,
            "answer" => $options[2]->title
        ]);

        $this->json("get", "/answers/statistic", [
            "survey_id" => $question->section->survey_id
        ])->assertInertia(function($page){
            $items = $page->toArray()["props"]["questions"]["data"];

            dd($items);
        });

    }

    function 단답형의_답변별_수를_알_수_있다()
    {

    }

    function 장문형의_답변_목록을_알_수_있다()
    {

    }

    function 날짜의_옵션별_선택수를_알_수_있다()
    {

    }
}
