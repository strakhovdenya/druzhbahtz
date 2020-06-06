<?php

namespace App\Http\Livewire\Events;

use App\Models\CalendarEvents;
use Illuminate\Support\Str;
use Livewire\Component;

class Event extends Component
{

    public $events;

    /**
     *
     */
    public function mount()
    {
        $this->events = CalendarEvents::orderBy('date_event')->get();
        if(empty($this->events)){
            $this->events = collect([]);
        }
    }

    public function render()
    {
        return view('livewire.events.event');
    }
}
