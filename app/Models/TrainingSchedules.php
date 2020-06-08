<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\TrainingSchedules
 *
 * @property int         $id
 * @property int         $period_id
 * @property string      $day
 * @property string|null $ice_start
 * @property string|null $ice_end
 * @property string|null $ice_place
 * @property string|null $ground_start
 * @property string|null $ground_end
 * @property string|null $collecting_time
 * @property string|null $collecting_place
 * @property bool        $is_junior
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|TrainingSchedules newModelQuery()
 * @method static Builder|TrainingSchedules newQuery()
 * @method static Builder|TrainingSchedules query()
 * @method static Builder|TrainingSchedules whereCollectingPlace($value)
 * @method static Builder|TrainingSchedules whereCollectingTime($value)
 * @method static Builder|TrainingSchedules whereCreatedAt($value)
 * @method static Builder|TrainingSchedules whereDay($value)
 * @method static Builder|TrainingSchedules whereGroundEnd($value)
 * @method static Builder|TrainingSchedules whereGroundStart($value)
 * @method static Builder|TrainingSchedules whereIceEnd($value)
 * @method static Builder|TrainingSchedules whereIcePlace($value)
 * @method static Builder|TrainingSchedules whereIceStart($value)
 * @method static Builder|TrainingSchedules whereId($value)
 * @method static Builder|TrainingSchedules whereIsJunior($value)
 * @method static Builder|TrainingSchedules wherePeriodId($value)
 * @method static Builder|TrainingSchedules whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TrainingSchedules extends Model
{
    //
}
