<?php


namespace App\Http\ViewComposers;


use App\Models\Employees;
use App\Repositories\EmployeeRepository;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Throwable;

class BirthdayComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $employeeRepository = new EmployeeRepository();
        $bornsToday         = $employeeRepository->getBornTodayCollection();

        $bornsFiltered = $employeeRepository->getBornSoonCollection();

        $bornsMonthDate = $bornsFiltered->map(static function ($oneEmpl) {
            $oneEmpl->bornMonthDate = $oneEmpl->born->format('m-d');
            $oneEmpl->bornFormated  = $oneEmpl->born->format('d') . ' ' . $oneEmpl->born->getTranslatedMonthName('Do MMMM');
            return $oneEmpl;
        });

        $bornsSort = $bornsMonthDate->sortBy('bornMonthDate');

        $view->with('bornsSoon', $bornsSort)->with('bornsToday', $bornsToday);
    }
}
