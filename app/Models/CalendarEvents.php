<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;


/**
 * App\Models\CalendarEvents
 *
 * @property int $id
 * @property string $title
 * @property int $type_event
 * @property string $date_event
 * @property string $date_add
 * @property string $text
 * @property int $user_id
 * @property string|null $image
 * @property int $competitor_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Competitors|null $competitor
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereCompetitorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereDateAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereDateEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereTypeEvent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CalendarEvents whereUserId($value)
 * @mixin \Eloquent
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
