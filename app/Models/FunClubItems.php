<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * App\Models\FunClubItems
 *
 * @property int         $id
 * @property string      $name
 * @property string      $description
 * @property float       $price
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|FunClubItems newModelQuery()
 * @method static Builder|FunClubItems newQuery()
 * @method static Builder|FunClubItems query()
 * @method static Builder|FunClubItems whereCreatedAt($value)
 * @method static Builder|FunClubItems whereDeletedAt($value)
 * @method static Builder|FunClubItems whereDescription($value)
 * @method static Builder|FunClubItems whereId($value)
 * @method static Builder|FunClubItems whereImage($value)
 * @method static Builder|FunClubItems whereName($value)
 * @method static Builder|FunClubItems wherePrice($value)
 * @method static Builder|FunClubItems whereUpdatedAt($value)
 * @mixin Eloquent
 * @property-read Order_items $orderItem
 */
class FunClubItems extends Model
{
    public function orderItem()
    {
        return $this->belongsTo(Order_items::class);
    }
}
