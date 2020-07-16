<?php

namespace App\Http\Controllers;

use App\Http\Responses\FunClubSaveAllResponse;
use App\Repositories\Interfaces\FunClubRepositoryInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class FanClubController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('app.funClub');
    }

    /**
     * @param FunClubRepositoryInterface $funClubRepository
     *
     * @return JsonResponse
     */
    public function getAll(FunClubRepositoryInterface $funClubRepository): JsonResponse
    {
        return response()->json($funClubRepository->all()->toArray(), 200);
    }

    /**
     * @param OrderRepositoryInterface $orderRepository
     *
     * @return FunClubSaveAllResponse
     */
    public function saveAll(OrderRepositoryInterface $orderRepository)
    {
        return new FunClubSaveAllResponse($orderRepository);
    }
}
