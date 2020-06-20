<?php

namespace App\Http\Livewire;

use App\Models\Coaches;
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
        try {
            $coaches = Coaches::all();
        } catch (Throwable $e) {
            $coaches = collect([]);
        }
        return view('livewire.fun-club',['coaches' => $coaches]);
    }
}
