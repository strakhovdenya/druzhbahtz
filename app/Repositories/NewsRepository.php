<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Support\Collection;
use Throwable;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @param $count
     *
     * @return Collection
     */
    public function getNews($count)
    {
        try {
            $news = News::orderBy('date_event', 'desc')->take($count)->get();
        } catch (Throwable $e) {
            $news = collect([]);
        }

        return $news;
    }
}
