<?php

use Illuminate\Database\Seeder;

class FunClubItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф-4',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф-5',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф-6',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Бейсболка',
            'description' => '100% бавовна',
            'price' => 300.0,
            'image'       => 'baseball_cap2.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шапка зимова',
            'description' => '',
            'price' => 300.0,
            'image'       => 'winter_hat.jpg',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Бейсболка-2',
            'description' => '100% бавовна',
            'price' => 200.0,
            'image'       => 'baseball_cap2.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шапка зимова-2',
            'description' => '',
            'price' => 250.0,
            'image'       => 'winter_hat.jpg',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф-2',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Бейсболка-3',
            'description' => '100% бавовна',
            'price' => 200.0,
            'image'       => 'baseball_cap2.png',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шапка зимова-3',
            'description' => '',
            'price' => 250.0,
            'image'       => 'winter_hat.jpg',
        ]);
        DB::table('fun_club_items')->insert([
            'name'  => 'Шарф-3',
            'description' => '',
            'price' => 260.0,
            'image'       => 'scarf.png',
        ]);

    }
}
