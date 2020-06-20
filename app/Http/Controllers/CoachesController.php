<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Throwable;


class CoachesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        try {
            $coaches = Coaches::all();
        } catch (Throwable $e) {
            $coaches = collect([]);
        }

        return view('app.coaches',['coaches' => $coaches]);
    }
}
