<?php

namespace App\Livewire\GestaoPessoas;

use Livewire\Component;

class VisaoGeral extends Component
{
    public function render()
    {
        return view('livewire.gestao-pessoas.categorias-membros.visao-geral')->layout('components.layouts.app');
    }
}
