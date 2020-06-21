<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use App\Models\FunClubItems;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Throwable;


class FanClubController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('app.funClub');
    }

    public function getAll()
    {
        try {
            $funClubItems = FunClubItems::all();
        } catch (Throwable $e) {
            $funClubItems = collect([]);
        }
        return  response()->json($funClubItems->toArray(),200);
    }
}
