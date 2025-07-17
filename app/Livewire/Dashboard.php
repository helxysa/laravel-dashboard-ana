<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public array $metricas = [];
    public array $ordersData = [];
    public string $labels = '';
    public array $customersData = [];
    public array $ordersLabels = [];
    public array $customersLabels = [];
    

    public array $chartData = [];

    public function mount()
    {
        $this->carregarDadosIniciais();
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
        $this->carregarDadosIniciais();
    }

    public function render()
    {
        //obs: fazer um if pra verificar a informacao sendo passada
        // if (empty($this->ordersLabels)) $this->ordersLabels = [];
        // if (empty($this->ordersData)) $this->ordersData = [];
        // if (empty($this->customersLabels)) $this->customersLabels = [];
        // if (empty($this->customersData)) $this->customersData = [];
        // if (empty($this->chartData)) $this->chartData = [];
        

        return view('livewire.dashboard')->layout('components.layouts.app');
    }
}
