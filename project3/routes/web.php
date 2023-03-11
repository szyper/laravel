<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WsbController;

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

Route::get('/', function () {
    return view('welcome');
});

//kontrolery
Route::get("wsb", [WsbController::class, "index"]);
//Route::get("wsb", "\App\Http\Controllers\WsbController@index");

Route::get("drives/{drive}", [\App\Http\Controllers\PageController::class, "show"]);

//formularze
Route::view("userform", "userform");

Route::post("UserController", [\App\Http\Controllers\UserController::class, "account"]);
