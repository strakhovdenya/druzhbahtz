<?php

namespace App\Repositories;

use App\Models\Periods;
use App\Models\TrainingSchedules;
use App\Repositories\Interfaces\TrainingSchedulesRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class TrainingSchedulesRepository implements TrainingSchedulesRepositoryInterface
{
    /**
     * @param Periods $period
     * @param bool    $isJunior
     *
     * @return Builder[]|Collection
     */
    public function getScheduleByPeriodAndType(Periods $period, bool $isJunior)
    {
        return TrainingSchedules::where('period_id', $period->id)->where('is_junior', '=', $isJunior)->get();
    }
}
