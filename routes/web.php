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

Route::get('/', function () {
    return view('app.start');
})->name('start');

Route::get('/about', function () {
    return view('app.about');
})->name('about');

Route::get('/setTo', function () {
    return view('app.setTo');
})->name('setTo');

//Route::get('/scheduleJunior', function () {
//    return view('app.scheduleJunior');
//})->name('scheduleJunior');

Route::get('/scheduleJunior', 'TrainingScheduleController@index')->name('scheduleJunior');

Route::get('/scheduleSenior', 'TrainingScheduleController@index')->name('scheduleSenior');

Route::get('/trainingPlaces', function () {
    return view('app.trainingPlaces');
})->name('trainingPlaces');

Route::get('/team_players', 'TeamPlayersController@index')->name('team');
Route::get('/team_players/{id}', 'TeamPlayersController@show')->name('team_one');

Route::get('/employees/{id?}', function ($id = null) {
    if ($id !== null) {
        $oneEmployee = Employees::find($id);
    } else {
        $oneEmployee = null;
    }

    return view('app.employeeInfo', ['oneEmployee' => $oneEmployee]);
})->name('employees');

Route::get('/tournaments/{id?}', function ($id = null) {
    return view('app.tournaments', ['id' => $id]);
})->name('tournaments');

Route::get('/clubCup/{id?}', function ($id = null) {
    return view('app.clubCup', ['id' => $id]);
})->name('clubCup');

Route::get('/gallery', function () {
    return view('app.gallery');
})->name('gallery');






