{{-- colaboradores.blade.php --}}
<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">Análise de Colaboradores</h1>
        
        <!-- Botão de teste para verificar atualização -->
        <button 
            onclick="testChartUpdate()"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm">
            🔄 Testar Atualização
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <x-charts.simple
            id="colaboradores_idade"
            type="bar"
            title="Distribuição por Faixa Etária"
            :data="[
                'labels' => ['20-30', '31-40', '41-50', '51+'],
                'datasets' => [[
                    'label' => 'Colaboradores',
                    'data' => [12, 25, 18, 10],
                    'backgroundColor' => 'rgba(147, 51, 234, 0.7)',
                    'borderColor' => 'rgba(147, 51, 234, 1)',
                    'borderWidth' => 1
                ]]
            ]"
        />

        <x-charts.simple
            id="colaboradores_atividade"
            type="pie"
            title="Situação dos Colaboradores"
            :data="[
                'labels' => ['Ativos', 'Inativos', 'Licença'],
                'datasets' => [[
                    'label' => 'Situação',
                    'data' => [45, 3, 2],
                    'backgroundColor' => [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(245, 158, 11, 0.8)'
                    ],
                    'borderColor' => [
                        'rgba(34, 197, 94, 1)',
                        'rgba(239, 68, 68, 1)',
                        'rgba(245, 158, 11, 1)'
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
    console.log('Testando atualização dos gráficos...');
    
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