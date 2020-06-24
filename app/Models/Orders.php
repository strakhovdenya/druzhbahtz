<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Orders
 *
 * @property int                                                         $id
 * @property string                                                      $phone
 * @property Carbon|null                             $created_at
 * @property Carbon|null                             $updated_at
 * @property string|null                                                 $deleted_at
 * @property-read Collection|Order_items[] $orderItems
 * @property-read int|null                                               $order_items_count
 * @method static Builder|Orders newModelQuery()
 * @method static Builder|Orders newQuery()
 * @method static Builder|Orders query()
 * @method static Builder|Orders whereCreatedAt($value)
 * @method static Builder|Orders whereDeletedAt($value)
 * @method static Builder|Orders whereId($value)
 * @method static Builder|Orders wherePhone($value)
 * @method static Builder|Orders whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Orders extends Model
{
    /**
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(Order_items::class);
    }
}
