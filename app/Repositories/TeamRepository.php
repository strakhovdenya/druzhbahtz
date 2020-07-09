<?php

namespace App\Repositories;

use App\Models\Teams;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use Illuminate\Support\Collection;
use Throwable;

class TeamRepository implements TeamRepositoryInterface
{
    /**
     * @return Teams[]|\Illuminate\Database\Eloquent\Collection|Collection
     */
    public function getAll()
    {
        try {
            $teams = Teams::all();
        } catch (Throwable $e) {
            $teams = collect([]);
        }

        return $teams;
    }
}
