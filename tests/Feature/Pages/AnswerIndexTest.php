<?php

namespace Tests\Feature\Pages;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnswerIndexTest extends TestCase
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

    function 단일선택_복수선택_선형배율의_옵션별_선택수를_알_수_있다()
    {

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
