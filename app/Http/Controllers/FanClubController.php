<?php

namespace App\Http\Controllers;

use App\Models\Coaches;
use App\Models\FunClubItems;
use App\Models\Orders;
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
        return  response()->json($funClubItems->toArray(),200);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function saveAll(Request $request)
    {
        $curt = $request->only(['curt']);
        $phone = $request->only(['phone']);

        /** @var Orders $order */
        $order = Orders::create($phone);
        $curtToCreate = [];
        foreach ($curt['curt'] as $item){
            $curtToCreate[] = ['fun_club_item_id'=>$item['id']];
        }

        $order->orderItems()->createMany($curtToCreate);
        return  response()->json(['messages'=>'Успешно сохранено'],200);
    }
}
