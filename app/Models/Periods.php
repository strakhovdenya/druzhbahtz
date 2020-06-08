<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Periods
 *
 * @property int         $id
 * @property string      $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Periods newModelQuery()
 * @method static Builder|Periods newQuery()
 * @method static Builder|Periods query()
 * @method static Builder|Periods whereCreatedAt($value)
 * @method static Builder|Periods whereId($value)
 * @method static Builder|Periods whereName($value)
 * @method static Builder|Periods whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Periods extends Model
{
    //
}
