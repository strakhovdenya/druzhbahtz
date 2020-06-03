<?php

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsImage = [
            'news1.jpg',
            'news2.jpg',
            'news3.jpg',
        ];
        $userIds   = User::pluck('id')->toArray();
        $news      = factory(News::class, 20)->make()->each(function ($oneNews) use ($userIds, $newsImage) {
            $oneNews->user_id = $userIds[array_rand($userIds)];
            $oneNews->image   = $newsImage[array_rand($newsImage)];
        })->toArray();
        News::insert($news);
    }
}
