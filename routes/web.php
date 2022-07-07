<?php

use Illuminate\Support\Facades\Route;
// 
use App\Http\Controllers\HomeController as HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "login"])->name("login");
Route::post("/auth", [HomeController::class, "auth"])->name("login.auth");
Route::post("/register", [HomeController::class, "register"])->name("login.register");