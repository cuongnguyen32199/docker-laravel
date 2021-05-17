<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return 'Home route';
    });

    Route::get('/dashboard', function () {
        return 'Dashboard route';
    });
});
