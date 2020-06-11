<?php

use App\Models\CalendarEvents;
use Illuminate\Database\Seeder;

class CompetitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competitors = [
            'dnepr.png' => 'Днепр',
            'galecki_lion.jpg' => 'Галецки леви',
            'krivbas.jpg' => 'Кривбас',
            'sea_wolf.jpg' => 'Морськи вовки',
            'shershni.png' => 'Шершнi',
            'sokil.jpg' => 'Сокiл',
        ];

        foreach ($competitors as $img => $name) {
            DB::table('competitors')->insert([
                'name' => $name,
                'image' => $img,
            ]);
        }

    }
}
