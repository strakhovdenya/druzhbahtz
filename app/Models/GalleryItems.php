<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\GalleryItems
 *
 * @property int $id
 * @property int $gallery_head_id
 * @property string|null $image
 * @property string|null $folder
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\GalleryHeads $galleryHead
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereGalleryHeadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\GalleryItems whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GalleryItems extends Model
{
    public function galleryHead(): BelongsTo
    {
        return $this->belongsTo(GalleryHeads::class);
    }
}
