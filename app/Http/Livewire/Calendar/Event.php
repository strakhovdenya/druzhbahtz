<?php

namespace App\Http\Livewire\Calendar;

use Carbon\Carbon;
use Livewire\Component;

class Event extends Component
{
    public $event;

    public function addEvent($id)
    {
        if (isset($this->event[$id])) {
            $this->event[$id] = $this->event[$id] === 'bg-success' ? '' : 'bg-success';

            return;
        }
        $this->event[$id] = 'bg-success';
    }

    public function render()
    {
        $dayCount = Carbon::createFromFormat('Y-m-d', '2019-12-31')->daysInMonth;

        return view('livewire.calendar.event')->with(['dayCount' => $dayCount]);
    }
}
