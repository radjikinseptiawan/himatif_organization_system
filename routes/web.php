<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,"runOrganizationProfile"]);


Route::get("/dashboard",function(){
    return view("users.dashboard");
})->name("dashboard")->middleware(["auth"]);

Route::get("/login",[AuthController::class,"render"])->name("login");
Route::post("/login",[AuthController::class,"auth"]);