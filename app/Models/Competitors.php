<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * App\Models\Competitors
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Competitors whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\CalendarEvents $calendarEvent
 * @property-read int|null $calendar_event_count
 */
class Competitors extends Model
{
    public function calendarEvent(): HasMany
    {
        return $this->hasMany(CalendarEvents::class);
    }
}
