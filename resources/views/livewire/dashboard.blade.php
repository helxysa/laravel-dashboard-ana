<div>
    {{-- O Alpine vai chamar a função que definimos no script abaixo --}}
    <div class="p-6 mx-auto mt-10 bg-white rounded-lg shadow-md max-w-3xl"
        x-data='chartComponent(@json($labels), @json($data))' x-init="init()">
        <h2 class="text-2xl font-semibold text-center text-gray-700">Gráfico Dinâmico com Livewire</h2>

        {{-- O wire:ignore continua sendo essencial --}}
        <div wire:ignore class="my-4">
            <canvas x-ref="chartCanvas"></canvas>
        </div>

        <div class="text-center">
            <button wire:click="atualizarDados"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                <span wire:loading.remove wire:target="atualizarDados">Atualizar Dados</span>
                <span wire:loading wire:target="atualizarDados">Carregando...</span>
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Registra o componente globalmente no Alpine
        document.addEventListener('alpine:init', () => {
            Alpine.data('chartComponent', (labels, data) => ({
                labels: labels,
                data: data,
                chart: null,
                init() {
                    const chartCanvas = this.$refs.chartCanvas.getContext('2d');

                    this.chart = new Chart(chartCanvas, {
                        type: 'line',
                        data: {
                            labels: this.labels,
                            datasets: [{
                                label: 'Leituras do Sensor',
                                data: this.data,
                                backgroundColor: 'rgba(119, 178, 255, 0.2)',
                                borderColor: 'rgba(119, 178, 255, 1)',
                                borderWidth: 2,
                                tension: 0.4,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    // Ouve o evento do Livewire
                    Livewire.on('chartUpdated', (event) => {
                        this.chart.data.datasets[0].data = event.data;
                        this.chart.update();
                    });
                }
            }));
        });
    </script>
@endpush
