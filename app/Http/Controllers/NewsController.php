<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * @param  NewsRepositoryInterface  $newsRepository
     *
     * @return Application|Factory|View
     */
    public function index(NewsRepositoryInterface $newsRepository)
    {
        $news = $newsRepository->getAll();

        return view('app.news', compact('news'));
    }
}
