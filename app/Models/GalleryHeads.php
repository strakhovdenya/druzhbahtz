<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryHeads extends Model
{
    public function galleryItems(): HasMany
    {
        return $this->hasMany(GalleryItems::class,'gallery_head_id');
    }
}
