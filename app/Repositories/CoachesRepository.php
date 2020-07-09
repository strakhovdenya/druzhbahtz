<?php

namespace App\Repositories;

use App\Models\Coaches;
use App\Repositories\Interfaces\CoachesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

class CoachesRepository implements CoachesRepositoryInterface
{
    /**
     * @return Coaches[]|Collection|\Illuminate\Support\Collection
     */
    public function getAll()
    {
        try {
            $coaches = Coaches::all();
        } catch (Throwable $e) {
            $coaches = collect([]);
        }

        return $coaches;
    }
}
