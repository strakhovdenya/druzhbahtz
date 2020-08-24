<?php


namespace App\Repositories\Interfaces;


interface OrderRepositoryInterface
{
    public function getDiffSecondForLastUniqueOrder($hash): int;

    public function getOrdersItemsCount(): ?int;

    public function getOrdersCount(): ?int;
}
