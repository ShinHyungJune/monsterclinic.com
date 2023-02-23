<?php

namespace Tests\Feature\Pages;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SurveyShowTest extends TestCase
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
    function 설문조사_상세내용을_볼_수_있다()
    {
        $survey = Survey::factory()->create();

        $this->get("/surveys/".$survey->id)->assertInertia(function($page){
            $item = $page->toArray()["props"]["survey"]["data"];

            $this->assertNotNull($item);
        });
    }

    /** @test */
    function 설문조사의_현재응답수를_볼_수_있다()
    {
        $survey = Survey::factory()->create();

        $survey->users()->attach($this->admin, [
            "finished" => 1
        ]);

        $survey->users()->attach($this->user, [
            "finished" => 1
        ]);

        $this->get("/surveys/".$survey->id)->assertInertia(function($page){
            $item = $page->toArray()["props"]["survey"]["data"];

            $this->assertEquals(2, $item["count_participate"]);
        });
    }
}
