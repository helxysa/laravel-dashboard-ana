<div class="min-h-screen bg-gray-900 p-6">
    <div class="max-w-6xl mx-auto">
        {{-- Grid de métricas superiores --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            @foreach ($metricas as $key => $metrica)
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-300 text-sm font-medium">{{ $metrica['title'] }}</h3>
                    </div>

                    <div class="mb-4">
                        <div class="text-3xl font-bold text-white mb-2">{{ $metrica['value'] }}</div>
                        <div class="flex items-center space-x-2">
                            <span
                                class="text-sm font-medium {{ $metrica['type'] === 'increase' ? 'text-green-400' : 'text-red-400' }}">
                                {{ $metrica['change'] }} {{ $metrica['type'] === 'increase' ? 'increase' : 'decrease' }}
                            </span>
                            <svg class="w-4 h-4 {{ $metrica['type'] === 'increase' ? 'text-green-400' : 'text-red-400' }}"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @if ($metrica['type'] === 'increase')
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                @else
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                                @endif
                            </svg>
                        </div>
                    </div>

                    {{-- Sparkline Chart --}}
                    <div wire:ignore class="h-16">
                        <canvas x-data="sparklineChart(@json($metrica['sparkline']), '{{ $metrica['type'] }}')" x-ref="sparklineCanvas" x-init="init()"
                            class="w-full h-full"></canvas>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Grid de gráficos inferiores --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Orders per month --}}
            <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                <h3 class="text-gray-300 text-sm font-medium mb-6">Orders per month</h3>
                <div wire:ignore class="h-64">
                    <canvas x-data="ordersChart(@json($ordersLabels), @json($ordersData))" x-ref="ordersCanvas" x-init="init()"
                        class="w-full h-full"></canvas>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-yellow-500 rounded-sm"></div>
                        <span class="text-gray-300 text-sm">Orders</span>
                    </div>
                </div>
            </div>

            {{-- Total customers --}}
            <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                <h3 class="text-gray-300 text-sm font-medium mb-6">Total customers</h3>
                <div wire:ignore class="h-64">
                    <canvas x-data="customersChart(@json($customersLabels), @json($customersData))" x-ref="customersCanvas" x-init="init()"
                        class="w-full h-full"></canvas>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-yellow-500 rounded-sm"></div>
                        <span class="text-gray-300 text-sm">Customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            // Sparkline Chart Component
            Alpine.data('sparklineChart', (data, type) => ({
                chart: null,
                init() {
                    const ctx = this.$refs.sparklineCanvas.getContext('2d');
                    const color = type === 'increase' ? '#10b981' : '#ef4444';

                    this.chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: Array.from({
                                length: data.length
                            }, (_, i) => i + 1),
                            datasets: [{
                                data: data,
                                borderColor: color,
                                backgroundColor: color + '20',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4,
                                pointRadius: 0,
                                pointHoverRadius: 0
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                x: {
                                    display: false
                                },
                                y: {
                                    display: false
                                }
                            },
                            interaction: {
                                intersect: false
                            }
                        }
                    });
                }
            }));

            // Orders Chart Component
            Alpine.data('ordersChart', (labels, data) => ({
                chart: null,
                init() {
                    const ctx = this.$refs.ordersCanvas.getContext('2d');

                    this.chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                data: data,
                                borderColor: '#eab308',
                                backgroundColor: '#eab308' + '20',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4,
                                pointBackgroundColor: '#eab308',
                                pointBorderColor: '#eab308',
                                pointRadius: 4,
                                pointHoverRadius: 6
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: '#9ca3af'
                                    },
                                    grid: {
                                        display: false
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: '#9ca3af',
                                        callback: function(value) {
                                            return value >= 1000 ? (value / 1000) + 'k' :
                                                value;
                                        }
                                    },
                                    grid: {
                                        color: '#374151'
                                    }
                                }
                            }
                        }
                    });
                }
            }));

            // Customers Chart Component
            Alpine.data('customersChart', (labels, data) => ({
                chart: null,
                init() {
                    const ctx = this.$refs.customersCanvas.getContext('2d');

                    this.chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                data: data,
                                borderColor: '#eab308',
                                backgroundColor: '#eab308' + '20',
                                borderWidth: 2,
                                fill: true,
                                tension: 0.4,
                                pointBackgroundColor: '#eab308',
                                pointBorderColor: '#eab308',
                                pointRadius: 4,
                                pointHoverRadius: 6
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: '#9ca3af'
                                    },
                                    grid: {
                                        display: false
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: '#9ca3af',
                                        callback: function(value) {
                                            return value >= 1000 ? (value / 1000) + 'k' :
                                                value;
                                        }
                                    },
                                    grid: {
                                        color: '#374151'
                                    }
                                }
                            }
                        }
                    });
                }
            }));
        });
    </script>
@endpush
