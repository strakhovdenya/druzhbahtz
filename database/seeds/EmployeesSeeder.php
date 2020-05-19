<?php

use App\Models\Employees;
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

        $additional_info = '<p align="center"> </p>
<p align="center"><font color="#000000"><span style="font-size: 15px;"><strong>ОСОБИСТІ ДАНІ:</strong></span></font></p>
<p align="center"> </p>
<table class="table_description_person">
<tbody>
<tr>
<td>УЛЮБЛЕНЕ ЗАНЯТТЯ</td>
<td>хокей, конструктор</td>
</tr>
<tr>
<td>УЛЮБЛЕНИЙ МУЛЬТФІЛЬМ</td>
<td>усі</td>
</tr>
<tr>
<td>УЛЮБЛЕНА КНИГА</td>
<td> </td>
</tr>
<tr>
<td>УЛЮБЛЕНИЙ ФРУКТ</td>
<td>банан</td>
</tr>
<tr>
<td>УЛЮБЛЕНИЙ КОЛІР</td>
<td>синій</td>
</tr>
<tr>
<td>ЩО БІЛЬШЕ ЗА ВСЕ ПОДОБАЄТЬСЯ У ХОКЕЇ?</td>
<td>закидати шайбу у ворота</td>
</tr>
<tr>
<td>КИМ ХОЧЕШ СТАТИ У МАЙБУТНЬОМУ?</td>
<td>хокеїстом</td>
</tr>
<tr>
<td>МРІЯ</td>
<td>стати відомим хокеїстом</td>
</tr>
</tbody>
</table>';
        $employees       = factory(Employees::class, 80)->make()->each(function ($employee) use ($position, $hand, $additional_info, $images) {
            $employee->hand            = $hand[array_rand($hand)];
            $employee->position        = $position[array_rand($position)];
            $employee->additional_info = $additional_info;
            $employee->image = $images[array_rand($images)];;
        })->toArray();
        Employees::insert($employees);
    }
}
