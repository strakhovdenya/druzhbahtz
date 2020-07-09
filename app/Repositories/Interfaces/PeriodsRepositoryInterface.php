<?php

namespace App\Repositories\Interfaces;

use App\Models\Periods;

interface PeriodsRepositoryInterface
{
    public function getPeriodByNowDate();
}
