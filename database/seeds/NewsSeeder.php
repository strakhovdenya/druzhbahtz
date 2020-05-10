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
        $userIds = User::pluck('id')->toArray();
        $news = factory(News::class, 20)->make()->each(function ($oneNews) use ($userIds){
            $oneNews->user_id = $userIds[array_rand($userIds)];
        })->toArray();
        News::insert($news);
    }
}
