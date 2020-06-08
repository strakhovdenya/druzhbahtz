<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Teams
 *
 * @property int                         $id
 * @property string                      $name
 * @property string|null                 $deleted_at
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @property-read Collection|Employees[] $employees
 * @property-read int|null               $employees_count
 * @method static Builder|Teams newModelQuery()
 * @method static Builder|Teams newQuery()
 * @method static Builder|Teams query()
 * @method static Builder|Teams whereCreatedAt($value)
 * @method static Builder|Teams whereDeletedAt($value)
 * @method static Builder|Teams whereId($value)
 * @method static Builder|Teams whereName($value)
 * @method static Builder|Teams whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Teams extends Model
{
    /**
     * Получить комментарии статьи блога.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employees::class);
    }
}
