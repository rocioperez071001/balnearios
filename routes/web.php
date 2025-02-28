<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/tephe', function () {
    return view('tephe');
});
Route::get('/heredad', function () {
    return view('heredad');
});
Route::get('/paraiso', function () {
    return view('paraiso');
});
Route::get('/grutas', function () {
    return view('grutas');
});
Route::get('/pueblonuevo', function () {
    return view('pueblonuevo');
});
Route::get('/tollan', function () {
    return view('tollan');
});
Route::get('/madho', function () {
    return view('madho');
});
Route::get('/cuevitas', function () {
    return view('cuevitas');
});
Route::get('/maguey_blanco', function () {
    return view('maguey_blanco');
});
Route::get('/te_pathe', function () {
    return view('te_pathe');
});
Route::get('/1eco_alberto', function () {
    return view('1eco_alberto');
});
Route::get('/dauthi', function () {
    return view('dauthi');
});
