<?php

namespace App\Repositories\Interfaces;

interface GalleryRepositoryInterface
{
    public function getAll();

    public function show($id);
}
