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
	return view('home');
});
Route::get('/car-wagonR', function () {
	return view('car-detail-wagonr');
});
Route::get('/car-wagonR-white', function () {
	return view('car-detail-wagonr-white');
});
Route::get('/car-city', function () {
	return view('car-detail-honda-city');
});
Route::get('/car-cultus', function () {
	return view('car-detail-cultus');
});
Route::get('/car-toyota', function () {
	return view('car-detail-toyota');
});