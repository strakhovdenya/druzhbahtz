<?php

use App\Models\Employees;
use App\Models\Teams;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = [
            'захисник',
            'центральний нападник',
            'нападник',
            'воротар',
        ];
        $hand     = [
            'лівий',
            'лівий',
            'лівий',
            'правий',
        ];

        $images = [
            'employees80_date02_02_2018_11_52_24916735_549321.jpg',
            'employees92_date02_02_2018_11_51_50600286_531186.jpg',
            'employees93_date02_02_2018_11_52_02906915_706903.jpg',
            'employees94_date02_02_2018_11_51_21118708_389037.jpg',
            'employees95_date02_02_2018_11_51_37807632_552134.jpg',
            'employees96_date02_02_2018_11_50_59829191_984285.jpg',
            'employees98_date02_02_2018_11_50_41509675_578043.jpg',
            'employees99_date02_02_2018_11_50_22705312_991426.jpg',
            'employees100_date02_02_2018_11_50_10975981_922633.jpg',
            'employees101_date02_02_2018_11_49_56668744_293851.jpg',
            'employees103_date02_02_2018_11_49_25441531_663346.jpg',
            'employees106_date02_02_2018_11_48_55204375_415857.jpg',
            'employees107_date02_02_2018_11_48_08761961_372001.jpg',
            'employees108_date02_02_2018_11_47_55880599_721568.jpg',
            'employees109_date02_02_2018_11_32_32635098_737691.jpg',
        ];


        $teamIds = Teams::pluck('id')->toArray();
        $employees       = factory(Employees::class, 80)->make()->each(function ($employee) use ($position, $hand, $images, $teamIds) {
            $employee->hand            = $hand[array_rand($hand)];
            $employee->position        = $position[array_rand($position)];
            $employee->image = $images[array_rand($images)];
            $employee->team_id = $teamIds[array_rand($teamIds)];
        })->toArray();
        Employees::insert($employees);
    }
}
