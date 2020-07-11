<?php

namespace App\Repositories;

use App\Models\Coaches;
use App\Models\GalleryHeads;
use App\Repositories\Interfaces\GalleryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

class GalleryRepository implements GalleryRepositoryInterface
{
    /**
     * @return Coaches[]|Collection|\Illuminate\Support\Collection
     */
    public function getAll()
    {
        try {
            $coaches = GalleryHeads::orderBy('id', 'DESC')->get();
        } catch (Throwable $e) {
            $coaches = collect([]);
        }

        return $coaches;
    }
}
