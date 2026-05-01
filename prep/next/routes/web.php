<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::controller(ProductController::class)->group(function(){

    Route::get('/', 'index')->name('pdc.home');

    Route::get('/reg','create')->name('pdc.reg');
    Route::post('/store','store')->name('pdc.store');

    Route::get('/edit/{id}','edit')->name('pdc.edit');
    Route::post('/update/{id}','update')->name('pdc.update');

    Route::get('/delete/{id}','destroy')->name('pdc.delete');
});


