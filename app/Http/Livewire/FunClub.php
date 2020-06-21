<?php

namespace App\Http\Livewire;

use App\Models\Coaches;
use App\Models\FunClubItems;
use Livewire\Component;

class FunClub extends Component
{
    /**
     *
     */
    public function mount()
    {

    }
    public function render()
    {

        return view('livewire.fun-club.fun-club');
    }
}
