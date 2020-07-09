<?php

namespace App\Http\Controllers;

use App\Models\Orders;
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
     * @param Request                  $request
     * @param OrderRepositoryInterface $orderRepository
     *
     * @return JsonResponse
     */
    public function saveAll(Request $request, OrderRepositoryInterface $orderRepository)
    {
        $curt    = $request->only(['curt']);
        $hash    = $request->ip() . '|' . $request->server('HTTP_USER_AGENT');
        $phone   = $request->only(['phone']);
        $phone['unique_hash'] = $hash;

        $diffSec = $orderRepository->getDiffSecondForLastUniqueOrder($hash);
        if ($diffSec < 60) {
            return response()->json(['messages' => 'Сохранять заказы можно не чаще одного раза в минуту', 'error' => true], 400);
        }

        /** @var Orders $order */
        $order        = Orders::create($phone);
        $curtToCreate = $orderRepository->formCurtToCreate($curt);
        $order->orderItems()->createMany($curtToCreate);

        return response()->json(['messages' => 'Успешно сохранено','error' => false], 200);
    }
}
