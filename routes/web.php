<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/tephe', function () {
    return view('tephe');
})->name('tephe');

Route::get('/heredad', function () {
    return view('heredad');
})->name('heredad');

Route::get('/paraiso', function () {
    return view('paraiso');
})->name('paraiso');

Route::get('/grutas', function () {
    return view('grutas');
})->name('grutas');

Route::get('/pueblonuevo', function () {
    return view('pueblonuevo');
})->name('pueblonuevo');

Route::get('/tollan', function () {
    return view('tollan');
})->name('tollan');

Route::get('/madho', function () {
    return view('madho');
})->name('madho');

Route::get('/cuevitas', function () {
    return view('cuevitas');
})->name('cuevitas');

Route::get('/maguey_blanco', function () {
    return view('maguey_blanco');
})->name('maguey_blanco');

Route::get('/te_pathe', function () {
    return view('te_pathe');
})->name('te_pathe');

Route::get('/ecoalberto', function () {
    return view('ecoalberto');
})->name('ecoalberto');

Route::get('/dauthi', function () {
    return view('dauthi');
})->name('dauthi');

Route::get('/diospadre', function () {
    return view('diospadre');
})->name('diospadre');

Route::get('/taxadho', function () {
    return view('taxadho');
})->name('taxadho');

Route::get('/lagranja', function () {
    return view('lagranja');
})->name('lagranja');

Route::get('/elmanantial', function () {
    return view('elmanantial');
})->name('elmanantial');

Route::get('/lagloria', function () {
    return view('lagloria');
})->name('lagloria');

Route::get('/tlaco', function () {
    return view('tlaco');
})->name('tlaco');

Route::get('/presamadho', function () {
    return view('presamadho');
})->name('presamadho');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/locaciones', function () {
    return view('locaciones');
})->name('locaciones');
