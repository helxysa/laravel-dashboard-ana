{{-- resources/views/components/charts/interactive.blade.php --}}
@props([
    'id' => 'chart',
    'type' => 'bar',
    'data' => [],
    'showLegend' => true,
    'legendPosition' => 'bottom',
    'title' => '',
    'options' => []
])

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 lg:p-6">
    @if($title)
        <h3 class="text-base lg:text-lg font-semibold text-gray-900 mb-3 lg:mb-4">{{ $title }}</h3>
    @endif
    <div class="h-40 lg:h-48 xl:h-52">
        <canvas id="{{ $id }}" class="w-full h-full"></canvas>
    </div>
</div>

@push('scripts')
<script>
// Configuração global do gráfico
window[`chartConfig_{{ $id }}`] = {
    type: '{{ $type }}',
    data: @json($data),
    showLegend: {{ $showLegend ? 'true' : 'false' }},
    legendPosition: '{{ $legendPosition }}',
    title: '{{ $title ?? '' }}',
    options: @json($options ?? [])
};

// Função para inicializar o gráfico
function initChart{{ $id }}() {
    console.log('Tentando inicializar gráfico {{ $id }}');
    
    if (typeof Chart === 'undefined') {
        console.log('Chart.js não disponível, tentando novamente em 100ms...');
        setTimeout(initChart{{ $id }}, 100);
        return;
    }
    
    if (typeof window.ChartService === 'undefined') {
        console.log('ChartService não disponível, tentando novamente em 100ms...');
        setTimeout(initChart{{ $id }}, 100);
        return;
    }
    
    console.log('Inicializando gráfico {{ $id }}:', window[`chartConfig_{{ $id }}`]);
    window.ChartService.initializeChart('{{ $id }}', window[`chartConfig_{{ $id }}`]);
}

// Função para aguardar tudo carregar
function waitAndInit{{ $id }}() {
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(initChart{{ $id }}, 200);
        });
    } else {
        setTimeout(initChart{{ $id }}, 200);
    }
}

// Inicializar
waitAndInit{{ $id }}();

// Reinicializar quando o Livewire atualizar
document.addEventListener('livewire:update', () => {
    setTimeout(initChart{{ $id }}, 200);
});
</script>
@endpush