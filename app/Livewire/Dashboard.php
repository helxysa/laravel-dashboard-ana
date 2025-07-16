<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public array $labels = [];
    public array $data = [];

    public function mount(): void
    {
        $this->carregarDadosIniciais();
    }

   
    public function carregarDadosIniciais(): void
    {
        $this->labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'];
        $this->data = [150, 220, 180, 250, 200];
    }


    public function atualizarDados(): void
    {
        $newData = [
            rand(100, 300),
            rand(100, 300),
            rand(100, 300),
            rand(100, 300),
            rand(100, 300)
        ];

        $this->data = $newData;

        
        $this->dispatch('chartUpdated', data: $this->data);
    }

    public function render()
{
    return view('livewire.dashboard')
        ->layout('components.layouts.app'); 
}
}
