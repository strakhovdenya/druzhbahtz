<?php


namespace App\Repositories;


use App\Models\Employees;
use App\Models\FunClubItems;
use App\Models\Order_items;
use App\Models\Orders;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Throwable;

class OrderRepository implements OrderRepositoryInterface
{

    /**
     * @param $hash
     *
     * @return int
     */
    public function getDiffSecondForLastUniqueOrder($hash): int
    {
        $diffSec = 1000;

        /** @var Orders $oldOrder */
        $oldOrders = Orders::where('unique_hash', $hash)->get();

        if ($oldOrders !== null && $oldOrders->isNotEmpty()) {
            $now     = Carbon::now();
            $diffSec = $now->diffInSeconds($oldOrders->last()->updated_at);
        }

        return $diffSec;
    }

    /**
     * @param $curt
     *
     * @return array
     */
    public function formCurtToCreate($curt): array
    {
        $curtToCreate = [];
        foreach ($curt['curt'] as $item) {
            $curtToCreate[] = [
                'fun_club_item_id' => $item['id'],
                'count'            => $item['countInCart'],
            ];
        }

        return $curtToCreate;
    }

    /**
     * @return int|null
     */
    public function getOrdersCount(): ?int
    {
        try {
            $count = Orders::count();

        } catch (Throwable $e) {
            $count = null;
        }

        return $count;
    }

    /**
     * @return int|null
     */
    public function getOrdersItemsCount(): ?int
    {
        try {
            $count = Order_items::pluck('count')->sum();

        } catch (Throwable $e) {
            $count = null;
        }

        return $count;
    }
}
