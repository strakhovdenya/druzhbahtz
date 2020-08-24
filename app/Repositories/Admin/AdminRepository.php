<?php

namespace App\Repositories\Admin;

use App\Models\CalendarEvents;
use App\Repositories\Admin\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Throwable;

class AdminRepository implements AdminRepositoryInterface
{
    /**
     * @return array
     */
    public function getAll(): array
    {
        $data = [];
        try {
            $employees       = app(EmployeeRepositoryInterface::class);
            $data['players'] = $employees->getAllCount();
            $data['teams']   = $this->getPercentageEmployeesByTeam($employees);

            $data['events'] = CalendarEvents::count();


            $data['news'] = app(NewsRepositoryInterface::class)->getAllCount();

            $orders              = app(OrderRepositoryInterface::class);
            $data['orders']      = $orders->getOrdersCount();
            $data['orders_item'] = $orders->getOrdersItemsCount();


        } catch (Throwable $e) {
            $data = [];
        }

        return $data;
    }

    /**
     * @param  EmployeeRepositoryInterface  $employees
     *
     * @return array
     */
    private function getPercentageEmployeesByTeam(EmployeeRepositoryInterface $employees): array
    {
        $response       = [];
        $teamCollection = $employees->getTeamWithCountPlayers();
        $totalCount     = $teamCollection->sum('count_employee');
        foreach ($teamCollection as $num => $oneTeam) {
            $response[(int) $num]['id']         = $num;
            $response[(int) $num]['name']       = $oneTeam->name;
            $response[(int) $num]['count']      = $oneTeam->count_employee;
            $response[(int) $num]['percentageStyle'] = "width:".$oneTeam->count_employee / $totalCount * 100 ."%";
            $response[(int) $num]['percentage'] = $oneTeam->count_employee / $totalCount * 100 ."%";
        }

        return $response;
    }
}
