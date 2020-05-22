<?php


namespace App\Http\ViewComposers;


use App\Models\News;
use Illuminate\Contracts\View\View;
use Throwable;

class NewsComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        try {
            $news = News::orderBy('date_event', 'desc')->take(5)->get();
        } catch (Throwable $e) {
            $news = [];
        }
        $view->with('news', $news);
    }
}
