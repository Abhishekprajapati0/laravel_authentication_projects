<?php

use App\Http\Controllers\User_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/',[User_Controller::class, 'Home']);
Route::get('/singin',[User_Controller::class, 'register']);
Route::get('/singup',[User_Controller::class, 'login']);
Route::get('/das',[User_Controller::class, 'Dash'])->middleware('user_check');

Route::post('/store',[User_Controller::class, 'store']);
Route::post('/login',[User_Controller::class, 'logindata']);
Route::get('/logout',[User_Controller::class, 'logout']);
