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

    public function mount(): void
    {
        $this->carregarDadosIniciais();
    }

    public function carregarDadosIniciais(): void
    {
        $this->metricas = [
            'revenue' => [
                'title' => 'Revenue',
                'value' => '$1.10k',
                'change' => '+32%',
                'type' => 'increase',
                'sparkline' => [10, 15, 12, 18, 22, 25, 20, 30, 28, 35]
            ],
            'new_customers' => [
                'title' => 'New customers',
                'value' => '56',
                'change' => '-3%',
                'type' => 'decrease',
                'sparkline' => [60, 58, 55, 52, 48, 45, 50, 52, 55, 56]
            ],
            'new_orders' => [
                'title' => 'New orders',
                'value' => '104',
                'change' => '+7%',
                'type' => 'increase',
                'sparkline' => [80, 85, 90, 88, 92, 95, 98, 100, 102, 104]
            ]
        ];

        $this->ordersLabels = ['Jan', 'Mar', 'May', 'Jul', 'Sep', 'Nov'];
        $this->ordersData = [3000, 4500, 5200, 6800, 8500, 10000];

        $this->customersLabels = ['Jan', 'Mar', 'May', 'Jul', 'Sep', 'Nov'];
        $this->customersData = [5000, 7000, 9000, 11000, 14000, 17000];
    }

    public function atualizarDados(): void
    {
        $this->carregarDadosIniciais();
    }

    public function render()
    {
        return view('livewire.dashboard')
            ->layout('components.layouts.app');
    }
}
