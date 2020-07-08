<?php


namespace App\Repositories;


use App\Models\FunClubItems;
use App\Repositories\Interfaces\FunClubRepositoryInterface;
use Illuminate\Support\Collection;
use Throwable;

class FunClubRepository implements FunClubRepositoryInterface
{

    /**
     * @return FunClubItems[]|\Illuminate\Database\Eloquent\Collection|Collection
     */
    public function all()
    {
        try {
            $funClubItems = FunClubItems::all();
        } catch (Throwable $e) {
            $funClubItems = collect([]);
        }

        return $funClubItems;
    }
}
