<?php

use App\Models\EmployeeDatas;
use App\Models\Employees;
use Illuminate\Database\Seeder;

class EmployeeDatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeesIds = Employees::pluck('id')->toArray();
        $employeeData    = factory(EmployeeDatas::class, count($employeesIds))->make()->each(static function ($employee, $index) use ($employeesIds) {
            $employee->employee_id = $employeesIds[$index];
        })->toArray();
        EmployeeDatas::insert($employeeData);
    }
}
