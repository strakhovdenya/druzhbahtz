<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use App\Models\FunClubItems;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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

    /**
     * @return JsonResponse
     */
    public function getAll()
    {
        try {
            $funClubItems = FunClubItems::all();
        } catch (Throwable $e) {
            $funClubItems = collect([]);
        }

        return response()->json($funClubItems->toArray(), 200);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function saveAll(Request $request)
    {
        $curt    = $request->only(['curt']);
        $phone   = $request->only(['phone']);
        $hash    = $request->ip() . '|' . $request->server('HTTP_USER_AGENT');
        $diffSec = 1000;

        /** @var Orders $oldOrder */
        $oldOrders = Orders::where('unique_hash', $hash)->get();

        if ($oldOrders !== null && $oldOrders->isNotEmpty()) {
            $now     = Carbon::now();
            $diffSec = $now->diffInSeconds($oldOrders->last()->updated_at);
        }

        if ($diffSec < 60) {
            return response()->json(['messages' => 'Сохранять заказы можно не чаще одного раза в минуту', 'error' => true], 400);
        }

        $phone['unique_hash'] = $hash;
        /** @var Orders $order */
        $order        = Orders::create($phone);
        $curtToCreate = [];
        foreach ($curt['curt'] as $item) {
            $curtToCreate[] = [
                'fun_club_item_id' => $item['id'],
                'count'            => $item['countInCart'],
            ];
        }

        $order->orderItems()->createMany($curtToCreate);

        return response()->json(['messages' => 'Успешно сохранено','error' => false], 200);
    }
}
