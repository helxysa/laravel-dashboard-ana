{{-- membros.blade.php --}}
<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">Análise de Membros</h1>
        
        <!-- Botão de teste para verificar atualização -->
        <button 
            onclick="testChartUpdate()"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm">
            🔄 Testar Atualização
        </button>
    </div>

    <!-- Cards informativos -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3 mb-4">
                <div class="bg-emerald-100 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <span class="text-sm text-gray-500">Total de Membros</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-bold text-emerald-600">305</span>
                <span class="block text-sm text-gray-500">Membros Ativos</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3 mb-4">
                <div class="bg-blue-100 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <span class="text-sm text-gray-500">Procuradores</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-bold text-blue-600">120</span>
                <span class="block text-sm text-gray-500">Ativos</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
            <div class="flex items-center gap-3 mb-4">
                <div class="bg-green-100 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <span class="text-sm text-gray-500">Promotores</span>
            </div>
            <div class="text-center">
                <span class="text-3xl font-bold text-green-600">185</span>
                <span class="block text-sm text-gray-500">Ativos</span>
            </div>
        </div>
    </div>

    <!-- Gráficos principais -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <x-charts.simple
            id="membros_situacao"
            type="doughnut"
            title="Membros por Situação"
            :data="[
                'labels' => ['Ativos', 'Inativos', 'Licença', 'Aposentados'],
                'datasets' => [[
                    'label' => 'Situação',
                    'data' => [295, 10, 5, 3],
                    'backgroundColor' => [
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(107, 114, 128, 0.8)'
                    ],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'cutout' => '70%'
                ]]
            ]"
        />

        <x-charts.simple
            id="membros_cargo"
            type="pie"
            title="Distribuição por Cargo"
            :data="[
                'labels' => ['Procurador', 'Promotor', 'Analista', 'Técnico'],
                'datasets' => [[
                    'label' => 'Cargos',
                    'data' => [120, 185, 45, 35],
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(139, 92, 246, 0.8)'
                    ],
                    'borderColor' => '#fff',
                    'borderWidth' => 3,
                    'hoverOffset' => 20
                ]]
            ]"
        />
    </div>

    <!-- Gráficos secundários -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <x-charts.simple
            id="membros_idade"
            type="bar"
            title="Distribuição por Faixa Etária"
            :data="[
                'labels' => ['25-35', '36-45', '46-55', '56+'],
                'datasets' => [[
                    'label' => 'Membros',
                    'data' => [45, 120, 95, 45],
                    'backgroundColor' => 'rgba(16, 185, 129, 0.7)',
                    'borderColor' => 'rgba(16, 185, 129, 1)',
                    'borderWidth' => 1,
                    'borderRadius' => 4
                ]]
            ]"
        />

        <x-charts.simple
            id="membros_tempo_servico"
            type="bar"
            title="Tempo de Serviço"
            :data="[
                'labels' => ['0-5 anos', '6-10 anos', '11-15 anos', '16-20 anos', '20+ anos'],
                'datasets' => [[
                    'label' => 'Membros',
                    'data' => [25, 45, 85, 95, 55],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.7)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                    'borderWidth' => 1,
                    'borderRadius' => 4
                ]]
            ]"
        />

        <x-charts.simple
            id="membros_especialidade"
            type="doughnut"
            title="Especialidades"
            :data="[
                'labels' => ['Criminal', 'Civil', 'Família', 'Trabalho', 'Outros'],
                'datasets' => [[
                    'label' => 'Especialidades',
                    'data' => [85, 65, 45, 55, 55],
                    'backgroundColor' => [
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(245, 158, 11, 0.8)',
                        'rgba(139, 92, 246, 0.8)'
                    ],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'cutout' => '60%'
                ]]
            ]"
        />
    </div>

    <!-- Gráfico de linha para evolução temporal -->
    <x-charts.simple
        id="membros_evolucao"
        type="line"
        title="Evolução de Membros por Ano"
        :data="[
            'labels' => ['2019', '2020', '2021', '2022', '2023', '2024'],
            'datasets' => [
                [
                    'label' => 'Procuradores',
                    'data' => [110, 115, 118, 120, 120, 120],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                    'borderWidth' => 3,
                    'tension' => 0.4
                ],
                [
                    'label' => 'Promotores',
                    'data' => [175, 180, 182, 185, 185, 185],
                    'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                    'borderColor' => 'rgba(16, 185, 129, 1)',
                    'borderWidth' => 3,
                    'tension' => 0.4
                ]
            ]
        ]"
        :height="'h-64 lg:h-80'"
    />
</div>

<script>
// Função para testar atualização dos gráficos
function testChartUpdate() {
    console.log('Testando atualização dos gráficos de membros...');
    
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
