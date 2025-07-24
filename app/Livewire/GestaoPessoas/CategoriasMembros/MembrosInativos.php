<?php

namespace App\Livewire\GestaoPessoas\CategoriasMembros;

use Livewire\Component;

class MembrosInativos extends Component
{
    public $membros = [];
    public $cargos = [];
    public $lotacoes = [];
    public $page = 1;
    public $perPage = 20;
    public $total = 3; // ou o total de membros mockados

    public function mount()
    {
        $this->page = 1;
        $this->perPage = 20;
        $this->total = count($this->membros); // ou defina manualmente
        $this->cargos = [
            'PROMOTOR JUSTICA ENTR FINAL',
            'PROMOTOR JUSTICA ENTR INICIAL',
            'PROMOTOR JUSTICA SUBSTITUTO',
            'PROCURADOR JUSTICA INATIVO',
            // Adicione outros cargos se necessário
        ];

        $this->lotacoes = [
            '1ª PJ DE DEFESA DA SAÚDE PÚBL...',
            'PROMOTORIA DE CALCOENE',
            'PROCURADORIA GERAL DE JUSTI...',
            // Adicione todas as lotações mockadas que aparecem nos membros
        ];

        $this->membros = [
            [
                'nome' => 'WUEBER DUARTE PENAFORT',
                'cargo' => 'PROMOTOR JUSTICA ENTR FINAL',
                'funcao' => 'COORDENADOR CENTRO SAUDE ...',
                'lotacao' => '1ª PJ DE DEFESA DA SAÚDE PÚBL...',
                'ato' => '0096/2008-PGJ',
                'publicacao' => '2 de jun. de 2008',
                'atuacao' => '17 anos e 1 meses',
            ],
            [
                'nome' => 'WELDER TIAGO SANTOS FEITOSA',
                'cargo' => 'PROMOTOR JUSTICA ENTR INICIAL',
                'funcao' => 'PROMOTOR JUSTICA ENTRANCIA ...',
                'lotacao' => 'PROMOTORIA DE CALCOENE',
                'ato' => '1582-GAB/2022-PGJ',
                'publicacao' => '11 de nov. de 2022',
                'atuacao' => '2 anos e 8 meses',
            ],
            [
                'nome' => 'VITOR MEDEIROS DOS REIS',
                'cargo' => 'PROMOTOR JUSTICA SUBSTITUTO',
                'funcao' => 'PROMOTOR JUSTICA SUBSTITUTO',
                'lotacao' => 'PROCURADORIA GERAL DE JUSTI...',
                'ato' => '291-GAB/2024-PGJ',
                'publicacao' => '20 de fev. de 2024',
                'atuacao' => '1 anos e 5 meses',
            ],
            // ...adicione os demais membros mockados aqui...
        ];
    }

    public function render()
    {
        return view('livewire.gestao-pessoas.categorias-membros.membros-inativos');
    }
}
