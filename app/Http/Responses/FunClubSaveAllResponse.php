<?php


namespace App\Http\Responses;


use App\Models\Orders;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Contracts\Support\Responsable;

class FunClubSaveAllResponse implements Responsable
{
    /** @var OrderRepositoryInterface  */
    private $orderRepository;

    /**
     * FunClubSaveAllResponse constructor.
     *
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function toResponse($request)
    {
        $curt    = $request->only(['curt']);
        $hash    = $request->ip() . '|' . $request->server('HTTP_USER_AGENT');
        $phone   = $request->only(['phone']);
        $phone['unique_hash'] = $hash;

        $diffSec = $this->orderRepository->getDiffSecondForLastUniqueOrder($hash);
        if ($diffSec < 60) {
            return response()->json(['messages' => 'Сохранять заказы можно не чаще одного раза в минуту', 'error' => true], 400);
        }

        /** @var Orders $order */
        $order        = Orders::create($phone);
        $curtToCreate = $this->orderRepository->formCurtToCreate($curt);
        $order->orderItems()->createMany($curtToCreate);

        return response()->json(['messages' => 'Успешно сохранено','error' => false], 200);
    }
}
