<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Throwable;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @param $count
     *
     * @return Collection
     */
    public function getNews($count):Collection
    {
        try {
            $news = News::orderBy('date_event', 'desc')->take($count)->get();
        } catch (Throwable $e) {
            $news = collect([]);
        }

        return $news;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAll():LengthAwarePaginator
    {
        try {
            $news = News::orderBy('date_event', 'desc')->paginate(5);
        } catch (Throwable $e) {
            $news = collect([]);
        }

        return $news;
    }
}
