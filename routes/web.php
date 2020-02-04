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
Route::redirect('home','estrenos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('estrenos','PremieresController',['parameters'=>['estrenos'=>'premier']]);
Route::resource('cartelera','BillboardsController',['parameters'=>['cartelera'=>'billboard']]);
Route::get('acerca-de',function(){
  return view('welcome');
})->name('acerca-de');

