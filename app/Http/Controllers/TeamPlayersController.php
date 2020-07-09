<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TeamPlayersController extends Controller
{
    /**
     * @param EmployeeRepositoryInterface $employeeRepository
     *
     * @return Application|Factory|View
     */
    public function index(EmployeeRepositoryInterface $employeeRepository)
    {
        $team = $employeeRepository->getAll();

        return view('app.team', compact('team'));
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
     * @param                             $id
     * @param EmployeeRepositoryInterface $employeeRepository
     *
     * @return Application|Factory|View
     */
    public function show($id, EmployeeRepositoryInterface $employeeRepository)
    {
        $team = $employeeRepository->showByTeamId($id);

        return view('app.team', compact('team'));
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
