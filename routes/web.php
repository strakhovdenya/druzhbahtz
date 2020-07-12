<?php

use App\Http\Controllers\CoachesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FanClubController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TeamPlayersController;
use App\Http\Controllers\TrainingScheduleController;
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

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], static function () {

    Route::get('/', function () {
        return view('app.start');
    })->name('start');

    Route::get('/about', function () {
        return view('app.about');
    })->name('about');

    Route::get('/setTo', function () {
        return view('app.setTo');
    })->name('setTo');

    Route::get('/schedule{type}', [TrainingScheduleController::class, 'index'])->name('schedule');

    Route::get('/trainingPlaces', function () {
        return view('app.trainingPlaces');
    })->name('trainingPlaces');

    Route::get('/team_players', [TeamPlayersController::class, 'index'])->name('team');
    Route::get('/team_players/{id}', [TeamPlayersController::class, 'show'])->name('team_one');

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

    Route::get('/events', [EventsController::class, 'index'])->name('events');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery_one');

    Route::get('/coaches', [CoachesController::class, 'index'])->name('coaches');

    Route::get('/fan_club', [FanClubController::class, 'index'])->name('fan_club');

    Route::get('setlocale/{lang}', static function ($lang) {

        $referer   = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
        $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

        //разбиваем на массив по разделителю
        $segments = explode('/', $parse_url);

        //Если URL (где нажали на переключение языка) содержал корректную метку языка
        if (isset($segments[1]) && in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages, true)) {
            unset($segments[1]); //удаляем метку
        }

        //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
        if ($lang !== App\Http\Middleware\LocaleMiddleware::$mainLanguage) {
            array_splice($segments, 1, 0, $lang);
        }

        //формируем полный URL
        $url = Request::root() . implode("/", $segments);

        //если были еще GET-параметры - добавляем их
        if (parse_url($referer, PHP_URL_QUERY)) {
            $url .= '?' . parse_url($referer, PHP_URL_QUERY);
        }

        return redirect($url); //Перенаправляем назад на ту же страницу

    })->name('setlocale');
});



