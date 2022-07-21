<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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

Route::view('home','savecontacts');
Route::post('home',[ContactsController::class,'saveContact']);
Route::get('list',[ContactsController::class,'show']);
Route::get('delete/{id}',[ContactsController::class,'delete']);
Route::get('edit/{id}',[ContactsController::class,'showContact']);
Route::post('update',[ContactsController::class,'update']);