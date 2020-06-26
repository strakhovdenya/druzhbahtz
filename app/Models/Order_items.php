<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Order_items
 *
 * @property int                             $id
 * @property int                             $order_id
 * @property int                             $fun_club_item_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @property-read FunClubItems|null          $funClunItem
 * @property-read Orders                     $order
 * @method static Builder|Order_items newModelQuery()
 * @method static Builder|Order_items newQuery()
 * @method static Builder|Order_items query()
 * @method static Builder|Order_items whereCreatedAt($value)
 * @method static Builder|Order_items whereDeletedAt($value)
 * @method static Builder|Order_items whereFunClubItemId($value)
 * @method static Builder|Order_items whereId($value)
 * @method static Builder|Order_items whereOrderId($value)
 * @method static Builder|Order_items whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Order_items extends Model
{

    /**
     * @var string
     */
    protected $fillable = ['fun_club_item_id'];

    /**
     * @return HasOne
     */
    public function funClunItem(): HasOne
    {
        return $this->hasOne(FunClubItems::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }
}
