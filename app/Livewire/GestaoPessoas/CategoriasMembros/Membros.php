<?php

namespace App\Livewire\GestaoPessoas\CategoriasMembros;

use Livewire\Component;

class Membros extends Component
{
    public function render()
    {
        return view('livewire.gestao-pessoas.categorias-membros.membros')->layout('components.layouts.app');
    }
}
