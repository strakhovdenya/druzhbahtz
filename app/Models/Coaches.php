<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Coaches
 *
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property string $type_coach
 * @property string $phone
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|Coaches newModelQuery()
 * @method static Builder|Coaches newQuery()
 * @method static Builder|Coaches query()
 * @method static Builder|Coaches whereCreatedAt($value)
 * @method static Builder|Coaches whereDeletedAt($value)
 * @method static Builder|Coaches whereFirstName($value)
 * @method static Builder|Coaches whereId($value)
 * @method static Builder|Coaches whereImage($value)
 * @method static Builder|Coaches whereMiddleName($value)
 * @method static Builder|Coaches wherePhone($value)
 * @method static Builder|Coaches whereSecondName($value)
 * @method static Builder|Coaches whereTypeCoach($value)
 * @method static Builder|Coaches whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Coaches extends Model
{
    //
}
