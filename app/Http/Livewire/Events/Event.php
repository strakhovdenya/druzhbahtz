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

    public $ordering = '';

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
        $this->ordering       = 'DESC';
    }

    public function render()
    {
        $this->setEventsForParams();
        return view('livewire.events.event');
    }

    /**
     *
     */
    public function getHome(): void
    {
        $this->switchToPlace(self::HOME);
    }

    /**
     *
     */
    public function getOnRoad(): void
    {
        $this->switchToPlace(self::ON_ROAD);
    }

    /**
     *
     */
    public function getAll(): void
    {
        $this->switchToPlace(self::ALL);
    }

    /**
     *
     */
    public function getAllDays(): void
    {
        $this->switchToDate(self::ALL_DAYS);
    }

    /**
     *
     */
    public function getTodayAndBeyonds(): void
    {
        $this->switchToDate(self::TODAY_AND_BEYOND);
    }

    /**
     *
     */
    public function getEarlier(): void
    {
        $this->switchToDate(self::EARLIER);
    }

    /**
     *
     */
    private function setEventsForParams(): void
    {
        $builder = CalendarEvents::orderBy('date_event', $this->ordering);

        if (empty($this->home) === false) {
            $builder->where('type_event', 2);
        } elseif (empty($this->onRoad) === false) {
            $builder->where('type_event', 1);
        }

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
