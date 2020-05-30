<?php

namespace App\Http\Livewire\Calendar;

use App\Models\CalendarEvents;
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

    public $countDays;

    /**
     *
     */
    public function mount()
    {
        if (empty(session('month_year'))) {
            session([
                'current_day_text'     => Carbon::now()->format('Y-m-d'),
                'month_year'           => Carbon::now()->format('Y-m'),
                'start_current_period' => Carbon::now()->startOfMonth()->format('Y-m-d'),
                'end_current_period'   => Carbon::now()->endOfMonth()->format('Y-m-d'),
            ]);
        }
    }



    /**
     *
     */
    public function addMonth(): void
    {
        $monthYearObj = Carbon::createFromFormat('Y-m', session('month_year'));
        session(['month_year' => $monthYearObj->addMonthNoOverflow()->format('Y-m')]);
        $this->updatePeriodRange($monthYearObj);
        $this->resetEvents();
    }

    /**
     *
     */
    public function subMonth(): void
    {
        $monthYearObj = Carbon::createFromFormat('Y-m', session('month_year'));
        session(['month_year' => $monthYearObj->subMonthNoOverflow()->format('Y-m')]);
        $this->updatePeriodRange($monthYearObj);
        $this->resetEvents();
    }

    /**
     * @return Application|Factory|View
     */
    public function render()
    {
        $this->countDays = Carbon::createFromFormat('Y-m', session('month_year'))->daysInMonth;

        $this->setMonthYearText();
        $startCurrentPeriod = session('start_current_period');
        $endCurrentPeriod   = session('end_current_period');

        $this->setCurrentDay($startCurrentPeriod, $endCurrentPeriod);
        $beforePeriod = $this->getBeforeMonthCollection($startCurrentPeriod);
        $afterPeriod  = $this->getAfterMonthCollection($endCurrentPeriod);
        $this->setMonthEvents($startCurrentPeriod, $endCurrentPeriod);

        return view('livewire.calendar.event')
            ->with(compact('beforePeriod', 'afterPeriod'));
    }

    private function setMonthEvents($startCurrentPeriod, $endCurrentPeriod)
    {
        $events = CalendarEvents::where('date_event', '>=',  $startCurrentPeriod)->where('date_event', '<=',  $endCurrentPeriod)->get();
        /** @var CalendarEvents $event */
        foreach ($events as $event){
            $day = (int)Carbon::createFromFormat('Y-m-d H:i:s',$event->date_event)->format('d');
            $this->event[$day]['event_isset'] = 'bg-success';
            $this->event[$day]['event_data'] = $event;
        }
    }

    /**
     * @param Carbon $current
     */
    private function updatePeriodRange(Carbon $current): void
    {
        session([
            'start_current_period' => $current->startOfMonth()->format('Y-m-d'),
            'end_current_period'   => $current->endOfMonth()->format('Y-m-d'),
        ]);
    }

    /**
     *
     */
    private function resetEvents(): void
    {
        $this->event = null;
    }

    /**
     *
     */
    private function setMonthYearText(): void
    {
        $monthYear           = Carbon::createFromFormat('Y-m', session('month_year'));
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

        $currentDay = Carbon::createFromFormat('Y-m-d', session('current_day_text'));
        if ($currentPeriod->contains($currentDay)) {
            $this->event[$currentDay->day]['current'] = 'current';
        }
    }

    /**
     * @param $periodStart
     *
     * @return array|CarbonPeriod
     */
    private function getBeforeMonthCollection($periodStart)
    {

        $periodStartObj = Carbon::createFromFormat('Y-m-d', $periodStart);
        $firstDayInWeek = $periodStartObj->dayOfWeek === 0 ? 7 : $periodStartObj->dayOfWeek;
        $beforeCountDay = $firstDayInWeek - 1;
        if ($beforeCountDay === 0) {
            return [];
        }
        $beforePeriodStart = $periodStartObj->subMonthNoOverflow()->lastOfMonth()->subDays($beforeCountDay - 1)->format('Y-m-d');
        $beforePeriodEnd   = $periodStartObj->lastOfMonth()->format('Y-m-d');


        return CarbonPeriod::create($beforePeriodStart, $beforePeriodEnd);
    }

    /**
     * @param $periodEnd
     *
     * @return array|CarbonPeriod
     */
    private function getAfterMonthCollection($periodEnd)
    {
        $periodEndObj  = Carbon::createFromFormat('Y-m-d', $periodEnd);
        $lastDayInWeek = $periodEndObj->dayOfWeek === 0 ? 7 : $periodEndObj->dayOfWeek;

        $beforeCountDay = 6 - $lastDayInWeek;

        $afterPeriodStart = $periodEndObj->addMonthNoOverflow()->firstOfMonth()->format('Y-m-d');
        $afterPeriodEnd   = $periodEndObj->firstOfMonth()->addDays($beforeCountDay)->format('Y-m-d');
        if ($beforeCountDay === 0) {
            return [];
        }

        return CarbonPeriod::create($afterPeriodStart, $afterPeriodEnd);

    }
}
