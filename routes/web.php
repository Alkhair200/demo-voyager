<?php

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


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    route::get('/' ,[App\Http\Controllers\HomeController::class,'index'])->name('home');
    route::get('details/{id}' ,[App\Http\Controllers\HomeController::class,'detailsPost'])->name('details');
    
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
