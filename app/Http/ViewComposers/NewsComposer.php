<?php

namespace App\Http\ViewComposers;

use App\Repositories\NewsRepository;
use Illuminate\Contracts\View\View;

class NewsComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $newsRepository = new NewsRepository();
        $news           = $newsRepository->getNews(5);
        $view->with('news', $news);
    }
}
