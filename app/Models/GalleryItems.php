<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GalleryItems extends Model
{
    public function galleryHead(): BelongsTo
    {
        return $this->belongsTo(GalleryHeads::class);
    }
}
