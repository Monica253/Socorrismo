<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Centro;

class Navigation extends Component
{
    public function render()
    {

        $centros = Centro::all();

        return view('livewire.navigation', compact('centros'));
    }
}
