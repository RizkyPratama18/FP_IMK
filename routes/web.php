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
    return view('index');
});

Route::get('motor/{jenis?}',function($jenis=null){
	if($jenis == null) return "motor dasbord page";
	return 'Motor dengan jenis : '.$jenis;
});

Route::get('book/{judul}','BookController@viewJudul');

Route::get('bladetest','HomeController@index');