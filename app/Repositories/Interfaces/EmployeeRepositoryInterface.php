<?php


namespace App\Repositories\Interfaces;


interface OrderRepositoryInterface
{
    public function getDiffSecondForLastUniqueOrder($hash): int;
}
