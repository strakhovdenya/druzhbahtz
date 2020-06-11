<?php

namespace App\Http\Livewire\Events;

use App\Models\CalendarEvents;
use App\Models\Competitors;
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


    private const FROM_UP_TO_DOWN = 'fromUpToDown';
    private const FROM_DOWN_TO_UP = 'fromDownToUp';
    private const ORDERING_TYPES  = [
        self::FROM_DOWN_TO_UP => 'DESC',
        self::FROM_UP_TO_DOWN => 'ASC',
    ];


    public $all = '';
    public $home = '';
    public $onRoad = '';

    public $allDays = '';
    public $todayAndBeyond = '';
    public $earlier = '';

    public $ordering = '';
    public $fromUpToDown = '';
    public $fromDownToUp = '';

    public $competitors;
    public $currentCompetitor = '';
    public $currentCompetitorId;


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
        $this->all               = 'active';
        $this->todayAndBeyond    = 'active';
        $this->fromUpToDown      = 'active';
        $this->ordering          = 'ASC';
        $this->competitors       = Competitors::all();
        $this->currentCompetitor = 'Усi';
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
     * @param $id
     */
    public function getCompetitor($id): void
    {
        if($id === 0){
            $this->currentCompetitor = 'Усi';
            $this->currentCompetitorId = null;
            return;
        }
        $currentCompetitor = $this->competitors->first(static function ($item) use ($id) {
            return $item->id === $id;
        });

        $this->currentCompetitor = $currentCompetitor->name;
        $this->currentCompetitorId = $currentCompetitor->id;
    }

    /**
     *
     */
    public function getEarlier(): void
    {
        $this->switchToDate(self::EARLIER);
    }

    public function getFromUpToDown(): void
    {
        $this->switchOrdering(self::FROM_UP_TO_DOWN);
    }

    public function getFromDownToUp(): void
    {
        $this->switchOrdering(self::FROM_DOWN_TO_UP);
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

        if($this->currentCompetitorId !== null){
            $builder->where('competitor_id', $this->currentCompetitorId);
        }

        $this->events = $builder->with('competitor')->get();
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
     * @param string $dateType
     */
    private function switchToDate(string $dateType): void
    {
        $this->allDays        = '';
        $this->todayAndBeyond = '';
        $this->earlier        = '';

        $this->{$dateType} = 'active';
    }

    /**
     * @param string $oreder
     */
    private function switchOrdering(string $oreder): void
    {

        $this->fromUpToDown = '';
        $this->fromDownToUp = '';

        $this->{$oreder} = 'active';
        $this->ordering  = self::ORDERING_TYPES[$oreder];
    }
}
