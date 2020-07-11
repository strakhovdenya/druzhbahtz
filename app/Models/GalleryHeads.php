<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\GalleryHeads
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GalleryItems[] $galleryItems
 * @property-read int|null $gallery_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryHeads whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GalleryHeads extends Model
{
    public function galleryItems(): HasMany
    {
        return $this->hasMany(GalleryItems::class,'gallery_head_id');
    }
}
