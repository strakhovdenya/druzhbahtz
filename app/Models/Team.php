<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    /**
     * Получить комментарии статьи блога.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employees::class);
    }
}
