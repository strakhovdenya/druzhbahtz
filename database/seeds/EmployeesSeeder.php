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
        $position        = [
            'захисник',
            'центральний нападник',
            'нападник',
            'воротар',
        ];
        $hand            = [
            'лівий',
            'лівий',
            'лівий',
            'правий',
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
        $employees       = factory(Employees::class, 40)->make()->each(function ($employee) use ($position, $hand, $additional_info) {
            $employee->hand            = $hand[array_rand($hand)];
            $employee->position        = $position[array_rand($position)];
            $employee->additional_info = $additional_info;
        })->toArray();
        Employees::insert($employees);
    }
}
