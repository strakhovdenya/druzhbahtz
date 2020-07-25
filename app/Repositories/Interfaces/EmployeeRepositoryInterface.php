<?php


namespace App\Repositories\Interfaces;


interface EmployeeRepositoryInterface
{
    public function showByTeamId($id);

    public function getAll();

    public function getBornTodayCollection();

    public function getBornSoonCollection();

    public function showOne($id);
}
