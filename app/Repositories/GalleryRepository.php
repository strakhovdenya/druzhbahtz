<?php

namespace App\Repositories;

use App\Models\Coaches;
use App\Models\GalleryHeads;
use App\Repositories\Interfaces\GalleryRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Throwable;

class GalleryRepository implements GalleryRepositoryInterface
{
    /**
     * @return Coaches[]|Collection|\Illuminate\Support\Collection
     */
    public function getAll()
    {
        try {
            $galleryHead = GalleryHeads::orderBy('id', 'DESC')->with('galleryItems')->get();
        } catch (Throwable $e) {
            $galleryHead = collect([]);
        }
        return $galleryHead;
    }

    /**
     * @param $id
     *
     * @return GalleryHeads|Builder|Model|object|null
     */
    public function show($id)
    {
        try {
            $galleryHead = GalleryHeads::where('id', $id)->with('galleryItems')->first();
        } catch (Throwable $e) {
            $galleryHead = new GalleryHeads();
        }
        return $galleryHead;
    }
}
