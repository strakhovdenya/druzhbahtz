<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;


/**
 * App\Models\CalendarEvents
 *
 * @property int $id
 * @property string $title
 * @property int                             $type_event
 * @property string                          $date_event
 * @property string                          $date_add
 * @property string                          $text
 * @property int                             $user_id
 * @property string|null                     $image
 * @property int                             $competitor_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $deleted_at
 * @property-read Competitors|null           $competitor
 * @method static Builder|CalendarEvents newModelQuery()
 * @method static Builder|CalendarEvents newQuery()
 * @method static Builder|CalendarEvents query()
 * @method static Builder|CalendarEvents whereCompetitorId($value)
 * @method static Builder|CalendarEvents whereCreatedAt($value)
 * @method static Builder|CalendarEvents whereDateAdd($value)
 * @method static Builder|CalendarEvents whereDateEvent($value)
 * @method static Builder|CalendarEvents whereDeletedAt($value)
 * @method static Builder|CalendarEvents whereId($value)
 * @method static Builder|CalendarEvents whereImage($value)
 * @method static Builder|CalendarEvents whereText($value)
 * @method static Builder|CalendarEvents whereTitle($value)
 * @method static Builder|CalendarEvents whereTypeEvent($value)
 * @method static Builder|CalendarEvents whereUpdatedAt($value)
 * @method static Builder|CalendarEvents whereUserId($value)
 * @mixin Eloquent
 */
class CalendarEvents extends Model
{
    /**
     * Получить комментарии статьи блога.
     */
    public function competitor(): BelongsTo
    {
        return $this->belongsTo(Competitors::class);
    }
}
