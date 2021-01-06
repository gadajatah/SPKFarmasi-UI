<?php


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@login');
Route::get('/utama', 'HomeController@utama');
Route::get('/kriteria', 'HomeController@kriteria');
Route::get('/nilai-kriteria', 'HomeController@nilkrit');
Route::get('/alternatif', 'HomeController@alternatif');
Route::get('/nilai-alternatif', 'HomeController@nilalter');
Route::get('/pemilihan', 'HomeController@pemilihan');
Route::get('/pemberian-bobot', 'HomeController@bobot');