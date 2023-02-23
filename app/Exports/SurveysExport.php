<?php

namespace App\Exports;

use App\Models\Survey;
use App\Models\SurveyUser;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SurveysExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    protected $survey;

    public function __construct(Survey $survey)
    {
        $this->survey = $survey;
    }

    public function collection()
    {
        return $this->survey->users;
    }

    public function map($user):array
    {
        $userData = [
            $user->name,
            $user->contact,
            $user->men ? "남자" : "여자",
            Carbon::make($user->birth)->format("Y-m-d"),
            $user->location,
        ];

        $questionsData = [];

        $questions = $this->survey->questions()->cursor();

        foreach($questions as $question){
            $questionsData[] = json_decode($question->answers()->where("user_id", $user->id)->first()->answer);
        }

        return array_merge($userData, $questionsData);
    }

    public function headings(): array
    {
        $headings = [
            "이름",
            "연락처",
            "성별",
            "생일",
            "거주지역"
        ];

        $questions = $this->survey->questions()->cursor();

        foreach($questions as $question){
            $headings[] = $question->title;
        }

        return $headings;
    }
}
