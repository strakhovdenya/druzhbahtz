<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CoachesRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;


class CoachesController extends Controller
{
    /**
     * @param CoachesRepositoryInterface $coachesRepository
     *
     * @return Application|Factory|View
     */
    public function index(CoachesRepositoryInterface $coachesRepository)
    {
        $coaches = $coachesRepository->getAll();

        return view('app.coaches', compact('coaches'));
    }
}
