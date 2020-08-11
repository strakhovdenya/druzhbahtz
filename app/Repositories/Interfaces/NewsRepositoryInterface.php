<?php

namespace App\Repositories\Interfaces;

interface NewsRepositoryInterface
{
    public function getNews($count);

    public function getAll();
}
