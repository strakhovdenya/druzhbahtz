<?php

namespace App\Http\Livewire\Calendar;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Livewire\Component;

class Event extends Component
{
    public $event;

    public $monthYearText;

    public $monthYear;

    public $countDays;

    public $startCurrentPeriod;

    public $endCurrentPeriod;

    public $currentDayText;


    /**
     *
     */
    public function mount()
    {
        $this->currentDayText = Carbon::now()->format('Y-m-d');
        $this->monthYear      = Carbon::now()->format('Y-m');

        $this->startCurrentPeriod = Carbon::now()->startOfMonth()->format('Y-m-d');
        $this->endCurrentPeriod   = Carbon::now()->endOfMonth()->format('Y-m-d');
    }

    /**
     * @param $id
     */
    public function addEvent($id): void
    {
        if (isset($this->event[$id]['event'])) {
            $this->event[$id]['event'] = $this->event[$id]['event'] === 'bg-success' ? '' : 'bg-success';

            return;
        }
        $this->event[$id]['event'] = 'bg-success';
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        $this->countDays = Carbon::createFromFormat('Y-m-d', $this->currentDayText)->daysInMonth;

        $this->setMonthYearText();
        $this->setCurrentDay($this->startCurrentPeriod, $this->endCurrentPeriod);
        $beforePeriod = $this->getBeforeMonthCollection($this->startCurrentPeriod);

        return view('livewire.calendar.event')->with(['beforePeriod'=>$beforePeriod]);
    }

    /**
     *
     */
    private function setMonthYearText(): void
    {
        $monthYear           = Carbon::createFromFormat('Y-m', $this->monthYear);
        $this->monthYearText = mb_convert_case($monthYear->getTranslatedMonthName(), MB_CASE_UPPER, 'utf-8') . ' ' . $monthYear->format('Y');
    }

    /**
     * @param $periodStart
     * @param $periodEnd
     */
    private function setCurrentDay($periodStart, $periodEnd)
    {
        $periodStartObj = Carbon::createFromFormat('Y-m-d', $periodStart);
        $periodEndObj   = Carbon::createFromFormat('Y-m-d', $periodEnd);

        $currentPeriod = CarbonPeriod::create($periodStartObj, $periodEndObj);

        $currentDay = Carbon::createFromFormat('Y-m-d', $this->currentDayText);
        if ($currentPeriod->contains($currentDay)) {
            $this->event[$currentDay->day]['current'] = 'current';
        }
    }

    /**
     * @param $periodStart
     *
     * @return CarbonPeriod
     */
    private function getBeforeMonthCollection($periodStart)
    {
        $periodStartObj    = Carbon::createFromFormat('Y-m-d', $periodStart);
        $firstDayInWeek    = $periodStartObj->dayOfWeek === 0 ? 7 : $periodStartObj->dayOfWeek;
        $beforeCountDay    = $firstDayInWeek - 1;
        $beforePeriodStart = $periodStartObj->subMonthNoOverflow()->lastOfMonth()->subDays($beforeCountDay-1)->format('Y-m-d');
        $beforePeriodEnd   = $periodStartObj->lastOfMonth()->format('Y-m-d');

        return CarbonPeriod::create($beforePeriodStart, $beforePeriodEnd);

    }
}
