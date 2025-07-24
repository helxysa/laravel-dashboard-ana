<?php

namespace App\Livewire\GestaoPessoas\CategoriasMembros;

use Livewire\Component;
use Livewire\WithPagination;

class Membros extends Component
{
    use WithPagination;

    public $perPage = 10;

    // Filtros
    public $filtroCargo = '';
    public $filtroLotacao = '';
    public $filtroTempoAtuacao = '';

    public function updating($property)
    {
        // Sempre que um filtro mudar, volta para a primeira página
        if (in_array($property, ['filtroCargo', 'filtroLotacao', 'filtroTempoAtuacao'])) {
            $this->resetPage();
        }
    }

    public function render()
    {
        // Dados mockados
        $membros = [
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
                'funcao' => 'PROMOTOR JUSTICA ENTRANCIA...',
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
            // ...adicione mais mockados conforme necessário...
        ];

        // Filtros
        $membros = array_filter($membros, function ($membro) {
            $passa = true;
            if ($this->filtroCargo && $membro['cargo'] !== $this->filtroCargo) {
                $passa = false;
            }
            if ($this->filtroLotacao && $membro['lotacao'] !== $this->filtroLotacao) {
                $passa = false;
            }
            if ($this->filtroTempoAtuacao) {
                $anos = 0;
                if (preg_match('/(\d+)\s+anos?/', $membro['atuacao'], $match)) {
                    $anos = (int)$match[1];
                }
                if ($this->filtroTempoAtuacao === 'menos1' && $anos >= 1) $passa = false;
                if ($this->filtroTempoAtuacao === '1-3' && ($anos < 1 || $anos > 3)) $passa = false;
                if ($this->filtroTempoAtuacao === '3-5' && ($anos < 3 || $anos > 5)) $passa = false;
                if ($this->filtroTempoAtuacao === 'mais5' && $anos <= 5) $passa = false;
            }
            return $passa;
        });

        // Paginação manual (mock)
        $page = request()->get('page', 1);
        $perPage = $this->perPage;
        $offset = ($page - 1) * $perPage;
        $membrosPaginados = array_slice($membros, $offset, $perPage);
        $total = count($membros);

        // Opções dos filtros (pode ser dinâmico depois)
        $cargos = array_unique(array_column($membros, 'cargo'));
        $lotacoes = array_unique(array_column($membros, 'lotacao'));

        return view('livewire.gestao-pessoas.categorias-membros.membros', [
            'membros' => $membrosPaginados,
            'total' => $total,
            'page' => $page,
            'perPage' => $perPage,
            'cargos' => $cargos,
            'lotacoes' => $lotacoes,
        ])->layout('components.layouts.app');
    }
}
