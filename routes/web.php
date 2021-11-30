<?php

use Illuminate\Support\Facades\Route;

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
    return view('menu');
});
Route::get('/formato-requerimiento', function () {
    return view('forms.format_request');
});
Route::get('/result_aprend', function () {
    return view('forms.result_aprend');
});
Route::get('/profile_entry', function () {
    return view('forms.profile_entr');
});
Route::get('/bd_offerer', function () {
    return view('forms.bd_offerer');
});
Route::get('/bd_less', function () {
    return view('forms.bd_less');
});
Route::get('/result_aprend_table', function () {
    return view('forms.result_aprend_table');
});
Route::get('/validation_formation', function () {
    return view('forms.validation_formation');
});
Route::get('/result_aprend2', function () {
    return view('forms.result_aprend2');
});
Route::get('/format_insgroup', function () {
    return view('forms.format_insgroup');
});
Route::get('/format_insgroup2', function () {
    return view('forms.format_insgroup2');
});
Route::get('/format_evaoffer', function () {
    return view('forms.format_evaoffer');
});
Route::get('/seguimiento_pasantes', function () {
    return view('forms.seguimiento_pasantes');
});
Route::get('/matriz_comunicaciones', function () {
    return view('forms.matriz_comunicaciones');
});
Route::get('/matriz_raci', function () {
    return view('forms.matriz_raci');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();