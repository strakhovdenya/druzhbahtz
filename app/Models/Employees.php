<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Employees
 *
 * @property int         $id
 * @property string      $name
 * @property string      $position
 * @property string      $born
 * @property string      $start_training
 * @property string      $game_number
 * @property string      $place_born
 * @property string      $place_study
 * @property string      $hand
 * @property int         $height
 * @property int         $weight
 * @property string|null $image
 * @property string      $fav_team
 * @property string      $additional_info
 * @property int         $team_id
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Teams  $team
 * @method static Builder|Employees newModelQuery()
 * @method static Builder|Employees newQuery()
 * @method static Builder|Employees query()
 * @method static Builder|Employees whereAdditionalInfo($value)
 * @method static Builder|Employees whereBorn($value)
 * @method static Builder|Employees whereCreatedAt($value)
 * @method static Builder|Employees whereDeletedAt($value)
 * @method static Builder|Employees whereFavTeam($value)
 * @method static Builder|Employees whereGameNumber($value)
 * @method static Builder|Employees whereHand($value)
 * @method static Builder|Employees whereHeight($value)
 * @method static Builder|Employees whereId($value)
 * @method static Builder|Employees whereImage($value)
 * @method static Builder|Employees whereName($value)
 * @method static Builder|Employees wherePlaceBorn($value)
 * @method static Builder|Employees wherePlaceStudy($value)
 * @method static Builder|Employees wherePosition($value)
 * @method static Builder|Employees whereStartTraining($value)
 * @method static Builder|Employees whereTeamId($value)
 * @method static Builder|Employees whereUpdatedAt($value)
 * @method static Builder|Employees whereWeight($value)
 * @mixin Eloquent
 */
class Employees extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Teams::class);
    }

    /**
     * @return HasOne
     */
    public function employeeDatas(): HasOne
    {
        return $this->hasOne(EmployeeDatas::class,'employee_id');
    }

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'born'];
}
