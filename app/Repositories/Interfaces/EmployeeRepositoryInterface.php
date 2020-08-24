<?php


namespace App\Repositories\Interfaces;


use Illuminate\Support\Collection;

interface EmployeeRepositoryInterface
{
    public function showByTeamId($id);

    public function getAll();

    public function getBornTodayCollection();

    public function getBornSoonCollection();

    public function showOne($id);

    public function getAllCount(): ?int;

    public function getTeamWithCountPlayers(): ?Collection;
}
