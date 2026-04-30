<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



Route::controller(EmployeeController::class)->group(function(){

    Route::get('/home','index')->name('emp.home');

    Route::get('/reg','create')->name('emp.reg');
    Route::post('/store','store')->name('emp.store');

    Route::get('/edit/{id}','edit')->name('emp.edit');
    Route::post('/update/{id}','update')->name('emp.update');

    Route::get('/delete/{id}','destroy')->name('emp.delete');

});


















// Route::prefix('exam')->controller(EmployeeController::class)->group(function(){
//     Route::get('/home', 'index')->name('emp.home');

//     Route::get('/reg','create')->name('emp.reg');
//     Route::post('/store','store')->name('emp.store');

//     Route::get('/edit/{id}','edit')->name('emp.edit');
//     Route::post('/update','update')->name('emp.update');

//     Route::get('/delete/{id}','delete')->name('emp.delete');
// });




