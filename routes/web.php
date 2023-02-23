<?php

use App\Enums\KakaoTemplate;
use App\Models\Kakao;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\SurveyUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/test", function(){
    return \Inertia\Inertia::render("Test");
});


Route::post("/users", [\App\Http\Controllers\UserController::class, "store"]);

Route::get('/', [\App\Http\Controllers\PageController::class, "index"])->name("home");
Route::get('/home', [\App\Http\Controllers\PageController::class, "index"]);

Route::post("/verifyNumbers", [\App\Http\Controllers\Api\VerifyNumberController::class, "store"]);
Route::patch("/verifyNumbers", [\App\Http\Controllers\Api\VerifyNumberController::class, "update"]);

Route::middleware("auth")->group(function(){
    Route::get("/users/remove", [\App\Http\Controllers\UserController::class, "remove"]);
    Route::delete("/users", [\App\Http\Controllers\UserController::class, "destroy"]);
    Route::get("/users/edit", [\App\Http\Controllers\UserController::class, "edit"]);
    Route::post("/users/update", [\App\Http\Controllers\UserController::class, "update"]);
});

Route::middleware("guest")->group(function(){
    Route::get("/login", [\App\Http\Controllers\UserController::class, "loginForm"])->name("login");
    Route::get("/register", [\App\Http\Controllers\UserController::class, "create"]);
    Route::get("/openLoginPop/{social}", [\App\Http\Controllers\UserController::class, "openSocialLoginPop"]);
    Route::get("/login/{social}", [\App\Http\Controllers\UserController::class, "socialLogin"]);
    Route::post("/login", [\App\Http\Controllers\UserController::class, "login"]);
    Route::post("/register", [\App\Http\Controllers\UserController::class, "register"]);
    Route::resource("/users", \App\Http\Controllers\UserController::class);
    Route::get("/passwordResets/{token}/edit", [\App\Http\Controllers\PasswordResetController::class, "edit"]);
    Route::resource("/passwordResets", \App\Http\Controllers\PasswordResetController::class);
});




Route::middleware("auth")->group(function(){
    Route::get("/logout", [\App\Http\Controllers\UserController::class, "logout"]);
    Route::get("/mypage", [\App\Http\Controllers\PageController::class, "mypage"]);
});

Route::get("/mailable", function(){
    return (new \App\Mail\PasswordResetCreated(new \App\Models\User(), new \App\Models\PasswordReset()));
});


// 개발


Route::middleware("auth")->group(function(){
});


Route::middleware("admin")->group(function(){

});

Route::get("/communication/communication0", [\App\Http\Controllers\PageController::class, "communication0"]);
Route::get("/communication/communication1", [\App\Http\Controllers\PageController::class, "communication1"]);
Route::get("/communication/communication2", [\App\Http\Controllers\PageController::class, "communication2"]);
Route::get("/communication/communication3", [\App\Http\Controllers\PageController::class, "communication3"]);

Route::get("/electric/electric0", [\App\Http\Controllers\PageController::class, "electric0"]);
Route::get("/electric/electric1", [\App\Http\Controllers\PageController::class, "electric1"]);
Route::get("/electric/electric2", [\App\Http\Controllers\PageController::class, "electric2"]);

Route::get("/ict/ict0", [\App\Http\Controllers\PageController::class, "ict0"]);
Route::get("/ict/ict1", [\App\Http\Controllers\PageController::class, "ict1"]);
Route::get("/ict/ict2", [\App\Http\Controllers\PageController::class, "ict2"]);

Route::get("/introduce/directions", [\App\Http\Controllers\PageController::class, "directions"]);
Route::get("/introduce/greeting", [\App\Http\Controllers\PageController::class, "greeting"]);
Route::get("/introduce/organization", [\App\Http\Controllers\PageController::class, "organization"]);
Route::get("/introduce/present", [\App\Http\Controllers\PageController::class, "present"]);
Route::get("/introduce/result", [\App\Http\Controllers\PageController::class, "result"]);

Route::get("/manufacture/manufacture0", [\App\Http\Controllers\PageController::class, "manufacture0"]);
Route::get("/manufacture/manufacture1", [\App\Http\Controllers\PageController::class, "manufacture1"]);
Route::get("/manufacture/manufacture2", [\App\Http\Controllers\PageController::class, "manufacture2"]);

Route::get("/404", [\App\Http\Controllers\ErrorController::class, "notFound"]);
Route::get("/403", [\App\Http\Controllers\ErrorController::class, "unAuthenticated"]);
Route::get("/privacyPolicy", [\App\Http\Controllers\PageController::class, "privacyPolicy"]);
