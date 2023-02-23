<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllergyResource;
use App\Http\Resources\BannerResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\DietProductResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\HistoryResource;
use App\Http\Resources\NoticeResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SurveyResource;
use App\Http\Resources\UserResource;
use App\Models\Allergy;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Event;
use App\Models\History;
use App\Models\Notice;
use App\Models\Product;
use App\Models\Survey;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render("Index",[

        ]);
    }

    public function communication0()
    {
        return Inertia::render("Communication/Communication0");
    }

    public function communication1()
    {
        return Inertia::render("Communication/Communication1");
    }

    public function communication2()
    {
        return Inertia::render("Communication/Communication2");
    }

    public function communication3()
    {
        return Inertia::render("Communication/Communication3");
    }

    public function electric0()
    {
        return Inertia::render("Electric/Electric0");
    }

    public function electric1()
    {
        return Inertia::render("Electric/Electric1");
    }

    public function electric2()
    {
        return Inertia::render("Electric/Electric2");
    }

    public function ict0()
    {
        return Inertia::render("Ict/Ict0");
    }

    public function ict1()
    {
        return Inertia::render("Ict/Ict1");
    }

    public function ict2()
    {
        return Inertia::render("Ict/Ict2");
    }

    public function directions()
    {
        return Inertia::render("Introduce/Directions");
    }

    public function greeting()
    {
        return Inertia::render("Introduce/Greeting");
    }

    public function organization()
    {
        return Inertia::render("Introduce/Organization");
    }

    public function present()
    {
        return Inertia::render("Introduce/Present");
    }

    public function result(Request $request)
    {
        if(!$request->type)
            $request["type"] = "정보통신공사";

        $histories = History::orderBy("date", "asc")->orderBy("created_at", "desc")->where("type", $request->type)->paginate(2000);

        return Inertia::render("Introduce/Result",[
            "histories" => HistoryResource::collection($histories),
            "type" => $request->type
        ]);
    }

    public function manufacture0()
    {
        return Inertia::render("Manufacture/Manufacture0");
    }

    public function manufacture1()
    {
        return Inertia::render("Manufacture/Manufacture1");
    }

    public function manufacture2()
    {
        return Inertia::render("Manufacture/Manufacture2");
    }
}
