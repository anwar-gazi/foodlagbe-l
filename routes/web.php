<?php

use App\Http\Controllers\RiderInfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'rider', 'as' => 'rider', 'middleware'=> []], function() {
    Route::controller(RiderInfoController::class)->group(function() {
        Route::post('/store_location', 'store_rider_location')->name('store.location');
        Route::get('/get_nearest', 'get_nearest_rider')->name('get.nearest');
    });
});

