<?php

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
    return view("index");
});

Route::get("carousel",function (){
    return view("carousel");
});

Route::get("demo",function (){
    return view("welcome");
});

Route::get("pc",function (){
    return view("_bootstrap_2/index");
});

Route::get("shopping_card",function (){
    return view("shopping-card/index");
});