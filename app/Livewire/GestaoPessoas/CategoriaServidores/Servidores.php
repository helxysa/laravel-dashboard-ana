<?php

namespace App\Livewire\GestaoPessoas\CategoriaServidores;

use Livewire\Component;

class Servidores extends Component
{
    public function render()
    {
        return view('livewire.gestao-pessoas.categoria-servidores.servidores')->layout('components.layouts.app');
    }
}
