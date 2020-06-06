<?php

namespace App\Http\Livewire\Events;

use App\Models\CalendarEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Livewire\Component;

class Event extends Component
{

    private const ALL     = 'all';
    private const HOME    = 'home';
    private const ON_ROAD = 'onRoad';

    private const ALL_DAYS         = 'allDays';
    private const TODAY_AND_BEYOND = 'todayAndBeyond';
    private const EARLIER          = 'earlier';

    public $all = '';
    public $home = '';
    public $onRoad = '';

    public $allDays = '';
    public $todayAndBeyond = '';
    public $earlier = '';

    public $events;

    /**
     * @var Carbon
     */
    private $today;

    public function __construct($id)
    {
        parent::__construct($id);
        $this->today = Carbon::now();
    }

    /**
     *
     */
    public function mount()
    {
        $this->all            = 'active';
        $this->todayAndBeyond = 'active';
        $this->events         = CalendarEvents::orderBy('date_event', 'DESC')->where('date_event', '>=', $this->today->format('Y-m-d'))->get();
        if (empty($this->events)) {
            $this->events = collect([]);
        }
    }

    public function render()
    {
        return view('livewire.events.event');
    }

    /**
     *
     */
    public function getHome(): void
    {
        $this->switchToPlace(self::HOME);
        $builder = CalendarEvents::orderBy('date_event', 'DESC')->where('type_event', 2);
        $this->setEventsForPlace($builder);
    }

    /**
     *
     */
    public function getOnRoad(): void
    {
        $this->switchToPlace(self::ON_ROAD);
        $builder = CalendarEvents::orderBy('date_event', 'DESC')->where('type_event', 1);
        $this->setEventsForPlace($builder);
    }

    /**
     *
     */
    public function getAll(): void
    {
        $this->switchToPlace(self::ALL);
        $builder = CalendarEvents::orderBy('date_event', 'DESC');
        $this->setEventsForPlace($builder);
    }

    /**
     *
     */
    public function getAllDays(): void
    {
        $this->switchToDate(self::ALL_DAYS);
        $builder = CalendarEvents::orderBy('date_event', 'DESC');
        $this->setEventsForDays($builder);
    }

    /**
     *
     */
    public function getTodayAndBeyonds(): void
    {
        $this->switchToDate(self::TODAY_AND_BEYOND);
        $builder = CalendarEvents::orderBy('date_event', 'DESC')->where('date_event', '>=', $this->today->format('Y-m-d'));
        $this->setEventsForDays($builder);
    }

    /**
     *
     */
    public function getEarlier(): void
    {
        $this->switchToDate(self::EARLIER);
        $builder = CalendarEvents::orderBy('date_event', 'DESC')->where('date_event', '<', $this->today->format('Y-m-d'));
        $this->setEventsForDays($builder);
    }

    /**
     * @param Builder $builder
     */
    private function setEventsForDays(Builder $builder): void
    {
        if (empty($this->home) === false) {
            $builder->where('type_event', 2);
        } elseif (empty($this->onRoad) === false) {
            $builder->where('type_event', 1);
        }

        $this->events = $builder->get();
        if (empty($this->events)) {
            $this->events = collect([]);
        }
    }

    /**
     * @param Builder $builder
     */
    private function setEventsForPlace(Builder $builder): void
    {
        if (empty($this->todayAndBeyond) === false) {
            $builder->where('date_event', '>=', $this->today->format('Y-m-d'));
        } elseif (empty($this->earlier) === false) {
            $builder->where('date_event', '<', $this->today->format('Y-m-d'));
        }

        $this->events = $builder->get();
        if (empty($this->events)) {
            $this->events = collect([]);
        }
    }

    /**
     * @param string $place
     */
    private function switchToPlace(string $place): void
    {
        $this->all    = '';
        $this->home   = '';
        $this->onRoad = '';

        $this->{$place} = 'active';
    }

    /**
     * @param string $place
     */
    private function switchToDate(string $place): void
    {
        $this->allDays        = '';
        $this->todayAndBeyond = '';
        $this->earlier        = '';

        $this->{$place} = 'active';
    }
}
