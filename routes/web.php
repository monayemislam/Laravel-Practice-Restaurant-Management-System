<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FoodController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);
//Admin
//User
Route::get('/user',[UserController::class,'index']);
Route::get('/delete-user/{id}',[UserController::class,'destroy']);
//view Food Menu
Route::get('/food-menu',[FoodController::class,'index']);
//Create Food Menu
Route::get('/create-food',[FoodController::class,'create']);
//store food menu
Route::post('/save-food',[FoodController::class,'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
