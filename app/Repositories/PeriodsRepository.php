<?php

namespace App\Repositories;

use App\Models\Periods;
use App\Repositories\Interfaces\PeriodsRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PeriodsRepository implements PeriodsRepositoryInterface
{
    /**
     * @return Builder|Model
     */
    public function getPeriodByNowDate()
    {
        return Periods::where('name', Carbon::now()->startOfMonth())->firstOrFail();
    }
}
