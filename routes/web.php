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
Route::get ('/','havapro@index')->name('index');
Route::get ('/az','havapro@indexaz');
Route::get ('/en','havapro@indexen');
Route::get ('/ru','havapro@indexru');
Route::get ('ajax','havapro@ajax');
Route::post ('ajax','havapro@postajax');
