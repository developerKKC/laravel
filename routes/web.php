<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/nakliyecikayit', function () {
    return view('auth.nakliyecikayit');
})->middleware('auth');




Auth::routes();



Route::get('/', 'HomeController@kontrol');
Route::get('aracbul', 'CityController@getir' );
Route::get('getir', 'CountyController@getir' );
Route::post('kayit', 'IlanController@ekle' );
Route::post('nakkayit', 'NakliyeciController@ekle' );
Route::get('yukbul', 'CityController@gonder' );
Route::post('aramasonuc', 'IlanController@bul' );
Route::post('teklif', 'TeklifController@ekle' );
Route::get('ilanlarim', 'TeklifController@ilanlarim' );
Route::post('duzenle', 'IlanController@duzenle' );
Route::post('', 'IlanController@guncelle' );
Route::post('tamamla', 'TeklifController@tamamla' );
Route::get('tamamlananlar', 'TeklifController@tamamlanangoster' );
Route::get('tekliflerim', 'NakliyeciController@tekliflerim' );
Route::post('teklifguncelle', 'TeklifController@teklifguncelle');
Route::get('tamamlanantasimalarim', 'TeklifController@tamamlanantasimagoster' );