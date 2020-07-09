<?php

namespace App\Repositories\Interfaces;

use App\Models\Periods;

interface TrainingSchedulesRepositoryInterface
{
    public function getScheduleByPeriodAndType(Periods $period, bool $isJunior);
}
