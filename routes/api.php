<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("v1")->group(function () {
    Route::controller(BookController::class)->group(function () {
        Route::get("/books", "index");
        Route::get("/books/{book}", "show");
        Route::post("/books", "store");
        Route::put("/books/{book}", "update");
        Route::delete("/books/{book}", "destroy");
    });

    Route::controller(MemberController::class)->group(function () {
        Route::get("/members", "index");
        Route::get("/members/{member}", "show");
        Route::post("/members", "store");
        Route::put("/members/{member}", "update");
        Route::delete("/members/{member}", "destroy");
    });

    Route::controller(StaffController::class)->group(function () {
        Route::get("/staffs", "index");
        Route::get("/staffs/{staff}", "show");
        Route::post("/staffs", "store");
        Route::put("/staffs/{staff}", "update");
        Route::delete("/staffs/{staff}", "destroy");
    });
});