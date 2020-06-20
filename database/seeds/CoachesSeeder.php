<?php

use Illuminate\Database\Seeder;

class CoachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coaches')->insert([
            'first_name'  => 'Баранковський',
            'second_name' => 'Олександр',
            'middle_name' => 'Миколайович',
            'type_coach'  => 'головний тренер',
            'phone'       => '067-588-14-56, 099-500-77-43',
            'image'       => 'baranovskiy.jpg',
        ]);
        DB::table('coaches')->insert([
            'first_name'  => 'Аліфанов',
            'second_name' => 'Іван',
            'middle_name' => 'Олександрович',
            'type_coach'  => 'тренер',
            'phone'       => '050-282-50-08',
            'image'       => 'alifanov.jpg',
        ]);
        DB::table('coaches')->insert([
            'first_name'  => 'Скребела',
            'second_name' => 'Валерій',
            'middle_name' => 'Євгенійович',
            'type_coach'  => 'тренер',
            'phone'       => '067-366-13-28',
            'image'       => 'skrebela.jpg',
        ]);

    }
}
