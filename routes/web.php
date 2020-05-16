<?php

use App\Models\Employees;
use App\Models\News;
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
Route::group([], function () {
    try {
        $news = News::orderBy('date_event', 'desc')->take(5)->get();
    } catch (Throwable $e) {
        $news = [];
    }
    Route::get('/', function () use ($news) {
        return view('app.start', ['news' => $news]);
    })->name('start');

    Route::get('/about', function () use ($news) {
        return view('app.about', ['news' => $news]);
    })->name('about');

    Route::get('/setTo', function () use($news) {
        return view('app.setTo', ['news' => $news]);
    })->name('setTo');

    Route::get('/scheduleJunior', function () use($news) {
        return view('app.scheduleJunior', ['news' => $news]);
    })->name('scheduleJunior');

    Route::get('/scheduleSenior', function () use($news) {
        return view('app.scheduleSenior', ['news' => $news]);
    })->name('scheduleSenior');

    Route::get('/trainingPlaces', function () use($news) {
        return view('app.trainingPlaces', ['news' => $news]);
    })->name('trainingPlaces');

    Route::get('/team', function () use($news) {
        try {
            $team = Employees::all();
        } catch (Throwable $e) {
            $team = [];
         }

        return view('app.team2', ['news' => $news, 'team' => $team]);
    })->name('team');

    Route::get('/employees/{id?}', function ($id = null) use($news) {
        if ($id !== null) {
            $oneEmployee = Employees::find($id);
        } else {
            $oneEmployee = null;
        }

        return view('app.employees', ['news' => $news, 'oneEmployee' => $oneEmployee]);
    })->name('employees');

    Route::get('/tournaments/{id?}', function ($id = null) use($news) {
        return view('app.tournaments', ['news' => $news, 'id' => $id]);
    })->name('tournaments');

    Route::get('/clubCup/{id?}', function ($id = null) use($news) {
        return view('app.clubCup', ['news' => $news, 'id' => $id]);
    })->name('clubCup');

    Route::get('/gallery', function () use($news) {
        return view('app.gallery',['news' => $news]);
    })->name('gallery');
});





