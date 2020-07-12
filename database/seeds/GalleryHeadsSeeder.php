<?php

use Illuminate\Database\Seeder;

class GalleryHeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_heads')->insert([
            'name'        => 'Червень 2015р.',
            'description' => 'Червень 2015р.',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Кубок Кременчуку - 2015',
            'description' => 'Кубок Кременчуку - 2015',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Літній лагер - 2014',
            'description' => 'Літній лагер - 2014',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Кубок Одеси - 2015',
            'description' => 'Кубок Одеси - 2015',
        ]);

        DB::table('gallery_heads')->insert([
            'name'        => 'Футбол ХТЗ - 2015',
            'description' => 'Футбол ХТЗ - 2015',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Турнір Херсон - 2015',
            'description' => 'Турнір Херсон - 2015',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Лід ХТЗ - 2015/2016',
            'description' => 'Лід ХТЗ - 2015/2016',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Супер Контік - 2016',
            'description' => 'Супер Контік - 2016',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Турнір у Кривом Розі - 2016',
            'description' => 'Турнір у Кривом Розі - 2016',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => '16-17 лютого 2019р.',
            'description' => '16-17 лютого 2019р.',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'Сезон 2018/2019',
            'description' => 'Сезон 2018/2019',
        ]);
        DB::table('gallery_heads')->insert([
            'name'        => 'ПХЛ 2007 м.Вінниця',
            'description' => 'ПХЛ 2007 м.Вінниця',
        ]);

    }
}
