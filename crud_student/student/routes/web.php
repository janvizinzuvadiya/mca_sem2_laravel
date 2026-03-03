<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [studentController:: class , 'list']);

Route::get('/student/create',[studentController:: class , 'add']);

Route::post('/student/store',[studentController:: class , 'store']);

