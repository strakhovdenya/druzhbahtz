<?php

namespace App\Http\Controllers;

use App\Models\Periods;
use App\Models\TrainingSchedules;
use App\Repositories\Interfaces\PeriodsRepositoryInterface;
use App\Repositories\TrainingSchedulesRepository;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TrainingScheduleController extends Controller
{
    /**
     * @param                             $type
     * @param PeriodsRepositoryInterface  $periodsRepository
     * @param TrainingSchedulesRepository $schedulesRepository
     *
     * @return Application|Factory|View
     */
    public function index($type, PeriodsRepositoryInterface $periodsRepository, TrainingSchedulesRepository $schedulesRepository)
    {
        $period = $periodsRepository->getPeriodByNowDate();

        $isJunior = $type === 'junior';

        $schedule = $schedulesRepository->getScheduleByPeriodAndType($period, $isJunior);

        return view('app.schedule', compact('schedule', 'isJunior'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
