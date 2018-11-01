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
    return view('welcome');
});


Route::post('/edmenue/menid/{id}','pub@edit_menu');
Route::post('/addmenulan/id/{id}','pub@addmenulan');
Route::post('/additemlan/id/{id}','pub@additemlan');
Route::post('/edmenu/id/{id}','pub@update_menu');
Route::get('/calc/id/{id}','pub@calcList');



Route::get('/deletemenu/id/{id}','pub@delete_menu');
Route::get('/deletecat/id/{id}','pub@remove_cat');
Route::get('/deletitem/itemid/{id}','pub@delete_item');
Route::post('/editem/id/{id}','pub@update_item');
Route::post('/addcat','pub@add_cat');
Route::post('/addmenu','pub@add_menu');
Route::post('/additem','pub@add_item');
Route::post('/edcat/id/{id}','pub@update_category');
Route::get('/edcat/id/{id}','pub@update_category');
Route::get('/showview','pub@showview');


