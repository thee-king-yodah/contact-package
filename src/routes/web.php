<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use Namu\Contact\Http\Controllers\ContactController;


Route::group(['namespace'=>'Namu\\Contact\\Http\\Controllers'],function(){

    Route::get('/contact','ContactController@index');
    Route::post('/contact','ContactController@send');

});