<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Views\Component\load;

Route::controller(FrontController::class)->group(function(){

    Route::get('/', 'index')->name('font.index');

});

Route::get('/about', [AboutController::class, 'about']);

Route::get('/service', [ServiceController::class, 'service']);

Route::get('/contact', [ContactController::class, 'index']);
