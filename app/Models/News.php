<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $date_event
 * @property string|null $image
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|News newModelQuery()
 * @method static Builder|News newQuery()
 * @method static Builder|News query()
 * @method static Builder|News whereCreatedAt($value)
 * @method static Builder|News whereDateEvent($value)
 * @method static Builder|News whereDeletedAt($value)
 * @method static Builder|News whereDescription($value)
 * @method static Builder|News whereId($value)
 * @method static Builder|News whereImage($value)
 * @method static Builder|News whereText($value)
 * @method static Builder|News whereTitle($value)
 * @method static Builder|News whereUpdatedAt($value)
 * @method static Builder|News whereUserId($value)
 * @mixin Eloquent
 */
class News extends Model
{

}
