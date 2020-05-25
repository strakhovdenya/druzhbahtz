<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employees extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Teams::class);
    }
}
