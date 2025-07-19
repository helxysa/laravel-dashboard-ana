<?php

namespace App\Livewire;

use Livewire\Component;

class Membros extends Component
{
    public function render()
    {
        return view('livewire.membros')->layout('components.layouts.app');
    }
}
