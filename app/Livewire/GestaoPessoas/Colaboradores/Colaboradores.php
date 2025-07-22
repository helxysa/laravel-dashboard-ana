<?php

namespace App\Livewire\GestaoPessoas\Colaboradores;

use Livewire\Component;

class Colaboradores extends Component
{
    public function render()
    {
        return view('livewire.gestao-pessoas.outros.colaboradores')->layout('components.layouts.app');
    }
}
