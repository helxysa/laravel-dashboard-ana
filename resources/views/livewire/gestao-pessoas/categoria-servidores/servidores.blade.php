{{-- servidores.blade.php --}}
<div
    class="p-6 spcae-y-6">

    <div class="flex justify-between items-center">
        <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 mb-4 lg:mb-6">Servidores Ativos</h1>
    </div>
    


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <x-charts.simple
            id="servidores_tempo_servico"
            type="bar"
            title="Tempo de Serviço"
            :data="[
                'labels' => ['0-5 anos', '6-10 anos', '11-15 anos', '16-20 anos', '20+ anos'],
                'datasets' => [[
                    'label' => 'Servidores',
                    'data' => [15, 25, 18, 12, 2],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.7)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                    'borderWidth' => 1
                ]]
            ]"
        />

        <x-charts.simple
            id="servidores_situacao"
            type="doughnut"
            title="Situação dos Servidores"
            :data="[
                'labels' => ['Ativos', 'Aposentados', 'Licença', 'Afastados'],
                'datasets' => [[
                    'label' => 'Situação',
                    'data' => [62, 5, 3, 2],
                    'backgroundColor' => [
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(107, 114, 128, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    'borderColor' => [
                        'rgba(16, 185, 129, 1)',
                        'rgba(107, 114, 128, 1)',
                        'rgba(245, 158, 11, 1)',
                        'rgba(239, 68, 68, 1)'
                    ],
                    'borderWidth' => 2
                ]]
            ]"
        />
    </div>
</div>

<script>
// Função para testar atualização dos gráficos
function testChartUpdate() {
    console.log('Testando atualização dos gráficos de servidores...');
    
    // Simular uma atualização do Livewire
    const event = new CustomEvent('livewire:update');
    document.dispatchEvent(event);
    
    // Mostrar feedback visual
    const button = event.target;
    const originalText = button.innerHTML;
    button.innerHTML = '✅ Atualizado!';
    button.classList.add('bg-green-600');
    
    setTimeout(() => {
        button.innerHTML = originalText;
        button.classList.remove('bg-green-600');
    }, 2000);
}
</script>
