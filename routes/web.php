<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TodoController::class,'show']);
Route::get('/todo/delete/{id}',[TodoController::class,'destroy']);
Route::get('/create',[TodoController::class,'create']);
Route::post('/create/todo',[TodoController::class,'store']);
Route::get('todo/edit/{id}',[TodoController::class,'edit']);
Route::post('/update/todo/{id}',[TodoController::class,'update']);
