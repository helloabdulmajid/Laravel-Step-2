<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;  
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberListController;


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

Route::get('/', function () {
    return view('welcome');
});


// user post dat using get method
Route::POST("users",[UsersController::class,'getData']);
Route::view("/login","users");

// Route::get('/add',[MemberController::class,'addData']);
Route::POST("/add",[MemberController::class,'addData']);
Route::view("/add","add");

Route::get('/list',[MemberListController::class,'show']);