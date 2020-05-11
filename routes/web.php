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
    $news = \App\Models\News::orderBy('date_event','desc')->take(5)->get();
    return view('app.start',['news'=>$news]);
})->name('start');

Route::get('/about', function () {
    return view('app.about');
})->name('about');

Route::get('/setTo', function () {
    return view('app.setTo');
})->name('setTo');

Route::get('/scheduleJunior', function () {
    return view('app.scheduleJunior');
})->name('scheduleJunior');

Route::get('/scheduleSenior', function () {
    return view('app.scheduleSenior');
})->name('scheduleSenior');

Route::get('/trainingPlaces', function () {
    return view('app.trainingPlaces');
})->name('trainingPlaces');

Route::get('/team', function () {
    return view('app.team');
})->name('team');

Route::get('/employees/{id?}', function ($id = null) {
    return view('app.employees',['id'=>$id]);
})->name('employees');

Route::get('/tournaments/{id?}', function ($id = null) {
    return view('app.tournaments',['id'=>$id]);
})->name('tournaments');

Route::get('/clubCup/{id?}', function ($id = null) {
    return view('app.clubCup',['id'=>$id]);
})->name('clubCup');

Route::get('/gallery', function () {
    return view('app.gallery');
})->name('gallery');


