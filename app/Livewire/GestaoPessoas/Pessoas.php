<?php

namespace App\Livewire\GestaoPessoas;

use Carbon\Carbon;
use Livewire\Component;

class Pessoas extends Component
{
    public array $metricas = [];
    public array $ordersData = [];
    public string $labels = '';
    public array $customersData = [];
    public array $ordersLabels = [];
    public array $customersLabels = [];
    public ?string $data_inicio = null;
    public ?string $data_fim = null;
    public $anoSelecionado;
    public $mesSelecionado;
    public array $mesesSelecionados = [];
    public $anosDisponiveis = [2021, 2022, 2023, 2024, 2025];
    public $mesesDisponiveis = [
        1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
        5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
        9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];

    public array $chartData = [];

    public function mount()
    {
        $this->anoSelecionado = Carbon::now()->year;
        $this->mesSelecionado = Carbon::now()->month;
        $this->mesesSelecionados = [Carbon::now()->month];
        $this->definirPeriodoPorMes();
        $this->carregarDadosIniciais();
    }

    public function updatedAnoSelecionado()
    {
        $this->definirPeriodoPorMes();
        $this->atualizarDados();
    }

    public function updatedMesSelecionado()
    {
        $this->definirPeriodoPorMes();
        $this->atualizarDados();
    }

    public function definirPeriodoPorMes()
    {
        if ($this->anoSelecionado && $this->mesSelecionado) {
            $this->data_inicio = Carbon::create($this->anoSelecionado, $this->mesSelecionado)->startOfMonth()->toDateString();
            $this->data_fim = Carbon::create($this->anoSelecionado, $this->mesSelecionado)->endOfMonth()->toDateString();
        }
    }

    public function aplicarFiltroPeriodo()
    {
        $this->atualizarDados();
    }

    public function atualizarAno($ano)
    {
        $this->anoSelecionado = $ano;
        $this->mesesSelecionados = [];
        $this->atualizarDados();
    }

    public function atualizarMeses($meses)
    {
        $this->mesesSelecionados = $meses;
        
        if (!empty($meses)) {
            $this->mesSelecionado = $meses[0];
            $this->definirPeriodoPorMesesSelecionados();
        }
        
        $this->atualizarDados();
    }

    public function limparFiltros()
    {
        $this->mesesSelecionados = [];
        $this->data_inicio = null;
        $this->data_fim = null;
        $this->atualizarDados();
    }

    public function definirPeriodoPorMesesSelecionados()
    {
        if ($this->anoSelecionado && !empty($this->mesesSelecionados)) {
            $mesInicio = min($this->mesesSelecionados);
            $mesFim = max($this->mesesSelecionados);
            
            $this->data_inicio = Carbon::create($this->anoSelecionado, $mesInicio)->startOfMonth()->toDateString();
            $this->data_fim = Carbon::create($this->anoSelecionado, $mesFim)->endOfMonth()->toDateString();
        }
    }

    public function carregarDadosIniciais(): void
    {
        $this->metricas = [
            'ativos' => 2450,
            'inativos' => 328,
            'em_manutencao' => 112
        ];

        // Gráfico: Membros por Situação (dados do Card 1)
        $this->ordersLabels = ['Ativos', 'Inativos'];
        $this->ordersData = [295, 10];

        // Gráfico: Membros por Cargo Efetivo (assumindo distribuição dos 305 membros)
        $this->customersLabels = ['PROCURADOR', 'PROMOTOR'];
        $this->customersData = [120, 185]; // Distribuição aproximada dos 305 membros

        $this->chartData = [
            'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
            'datasets' => [
                [
                    'label' => 'PROCURADOR',
                    'data' => [118, 122, 115, 125, 120, 120],
                    'backgroundColor' => '#3B82F6',
                    'borderColor' => '#1D4ED8',
                    'borderWidth' => 2
                ],
                [
                    'label' => 'PROMOTOR',
                    'data' => [182, 188, 175, 190, 185, 185],
                    'backgroundColor' => '#10B981',
                    'borderColor' => '#059669',
                    'borderWidth' => 2
                ],
                [
                    'label' => 'ANALISTA MINISTERIAL',
                    'data' => [35, 38, 32, 40, 36, 36],
                    'backgroundColor' => '#F59E0B',
                    'borderColor' => '#D97706',
                    'borderWidth' => 2
                ],
                [
                    'label' => 'TÉCNICO MINISTERIAL',
                    'data' => [32, 35, 30, 38, 36, 36],
                    'backgroundColor' => '#8B5CF6',
                    'borderColor' => '#7C3AED',
                    'borderWidth' => 2
                ],
                [
                    'label' => 'AUXILIAR MINISTERIAL',
                    'data' => [28, 30, 25, 32, 30, 30],
                    'backgroundColor' => '#EF4444',
                    'borderColor' => '#B91C1C',
                    'borderWidth' => 2
                ]
            ]
        ];

        \Log::info('Dados carregados:', [
            'metricas' => $this->metricas,
            'membrosLabels' => $this->ordersLabels,
            'membrosData' => $this->ordersData,
            'cargosLabels' => $this->customersLabels,
            'cargosData' => $this->customersData,
            'chartData' => $this->chartData,
            'anoSelecionado' => $this->anoSelecionado,
            'mesesSelecionados' => $this->mesesSelecionados,
            'periodo' => $this->data_inicio . ' a ' . $this->data_fim
        ]);
    }

    public function atualizarDados(): void
    {
        \Log::info('Atualizando dados para o período de ' . $this->data_inicio . ' a ' . $this->data_fim);
        $this->carregarDadosIniciais();
    }

    public function render()
    {
        // obs: fazer um if pra verificar a informacao sendo passada
        // if (empty($this->ordersLabels)) $this->ordersLabels = [];
        // if (empty($this->ordersData)) $this->ordersData = [];
        // if (empty($this->customersLabels)) $this->customersLabels = [];
        // if (empty($this->customersData)) $this->customersData = [];
        // if (empty($this->chartData)) $this->chartData = [];

        return view('livewire.gestao-pessoas.pessoas')->layout('components.layouts.app');
    }
}