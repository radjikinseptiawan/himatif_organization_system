<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,"runOrganizationProfile"])->name("home");
Route::get("/pengurus_inti",[Controller::class,"pengurusIntiPage"])->name("penti");
Route::get("/penjamin_mutu",[Controller::class,"penjaminMutuPages"])->name("penju");
Route::get("/departemen",[Controller::class,"departemen"])->name("departemen");
Route::get("/galeri",[Controller::class,"galeri"])->name("galeri");
Route::get("/event",[Controller::class,"event"])->name("event");
Route::get("/departemen/{departemen}",[Controller::class,'divisi']);
Route::get("/dashboard",function(){
    return view("users.dashboard");
})->name("dashboard")->middleware(["auth"]);
Route::post("/kirim_aspirasi",[Controller::class,"emailSend"])->name("kirim.email");

Route::get("/login",[AuthController::class,"render"])->name("login");
Route::post("/login",[AuthController::class,"auth"]);

Route::middleware(["auth"])->group(function(){
    // Galeri
    Route::get("/admin/galeri",[AdminController::class,"renderGaleri"])->name("admin.galeri");
    Route::post("/admin/galeri",[AdminController::class, "addGaleri"])->name("add.galeri");
    Route::get("admin/galeri/{id}",[AdminController::class,"selectGaleri"])->name("admin.selectGaleri");
    Route::put("/admin/galeri/{id}",[AdminController::class,"updateGaleri"])->name("edit.galeri");
    Route::delete("/admin/galeri/{id}",[AdminController::class, "deleteGaleri"])->name("hapus.galeri");
    // Event
    Route::get("/admin/event",[AdminController::class,"renderEvent"])->name("admin.event");
    Route::get("admin/event/{id}",[AdminController::class,"selectEvent"])->name("admin.selectEvent");
    Route::post("/admin/event",[AdminController::class, "addEvent"])->name("tambah.event");
    Route::delete("/admin/event/{id}",[AdminController::class, "deleteEvent"])->name("hapus.event");    
    Route::put("/admin/event/{id}",[AdminController::class,"editEvent"])->name("edit.event");

    // Logout
    Route::get("/logout",[AuthController::class,"logout"])->name("logout");
});