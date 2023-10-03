<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//CREATE
Route::get("/create",[ComicController::class, "create"])->name("comics.create");
Route::post("/",[ComicController::class, "store"])->name("comics.store");


//READ
Route::get("/", [ComicController::class, "index"])->name("comics.index");
Route::get("/{id}", [ComicController::class, "show"])->name("comics.show");


