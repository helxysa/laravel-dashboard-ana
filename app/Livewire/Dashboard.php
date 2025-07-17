<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Dashboard extends Component
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
    public $anosDisponiveis = [2023, 2024, 2025];

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

    public function carregarDadosIniciais(): void
    {
        $this->metricas = [
            'ativos' => 2450,
            'inativos' => 328,
            'em_manutencao' => 112
        ];

        $this->ordersLabels = ['Cível', 'Criminal', 'Família', 'Fazenda', 'Infância'];
        $this->ordersData = [650, 890, 420, 310, 280];

        $this->customersLabels = ['Ativos', 'Inativos', 'Manutenção'];
        $this->customersData = [2450, 328, 112];

        $this->chartData = [
            'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
            'datasets' => [
                [
                    'label' => 'Servidores Ativos',
                    'data' => [2100, 2250, 2300, 2400, 2450, 2500],
                    'backgroundColor' => '#3B82F6',
                    'borderColor' => '#1D4ED8',
                    'borderWidth' => 1
                ],
                [
                    'label' => 'Servidores Inativos',
                    'data' => [280, 300, 310, 320, 325, 328],
                    'backgroundColor' => '#EF4444',
                    'borderColor' => '#B91C1C',
                    'borderWidth' => 1
                ],
                [
                    'label' => 'Distribuição por Promotorias',
                    'data' => [600, 800, 400, 300, 250, 200],
                    'backgroundColor' => '#10B981',
                    'borderColor' => '#059669',
                    'borderWidth' => 1
                ]
            ]
        ];

        \Log::info('Dados carregados:', [
            'metricas' => $this->metricas,
            'promotoriasLabels' => $this->ordersLabels,
            'promotoriasData' => $this->ordersData,
            'statusLabels' => $this->customersLabels,
            'statusData' => $this->customersData,
            'chartData' => $this->chartData
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

        return view('livewire.dashboard')->layout('components.layouts.app');
    }
}
