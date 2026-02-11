<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,"runOrganizationProfile"])->name("home");
Route::get("/pengurus_inti",[Controller::class,"pengurusIntiPage"])->name("penti");
Route::get("/penjamin_mutu",[Controller::class,"penjaminMutuPages"])->name("penju");
Route::get("/departemen",[Controller::class,"departemen"])->name("departemen");
Route::get("/galeri",[Controller::class,"galeri"])->name("galeri");
Route::get("/event",[Controller::class,"event"])->name("event");

Route::get("/dashboard",function(){
    return view("users.dashboard");
})->name("dashboard")->middleware(["auth"]);

Route::get("/login",[AuthController::class,"render"])->name("login");
Route::post("/login",[AuthController::class,"auth"]);