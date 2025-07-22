{{-- membros.blade.php --}}
<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">Análise de Membros</h1>

        <button
            onclick="testChartUpdate(event)"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm">
            🔄 Testar Atualização
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
        
        <div class="bg-indigo-50 p-4 lg:p-5 rounded-xl border border-indigo-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Total de Colaboradores</span>
                <div class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">42</p>
            <p class="text-xs lg:text-sm text-green-600 mt-1 flex items-center gap-1">
                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <span>+5 este mês</span>
            </p>
        </div>

        <div class="bg-teal-50 p-4 lg:p-5 rounded-xl border border-teal-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Novas Contratações</span>
                <div class="bg-teal-100 text-teal-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">3</p>
            <p class="text-xs lg:text-sm text-green-600 mt-1 flex items-center gap-1">
                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <span>Este mês</span>
            </p>
        </div>

        <div class="bg-yellow-50 p-4 lg:p-5 rounded-xl border border-yellow-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Aniversariantes</span>
                <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">5</p>
            <p class="text-xs lg:text-sm text-blue-600 mt-1 flex items-center gap-1">
                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                <span>Este mês</span>
            </p>
        </div>

        <div class="bg-pink-50 p-4 lg:p-5 rounded-xl border border-pink-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Vagas Abertas</span>
                <div class="bg-pink-100 text-pink-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">2</p>
            <p class="text-xs lg:text-sm text-orange-600 mt-1 flex items-center gap-1">
                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <span>Urgentes</span>
            </p>
        </div>
    </div>

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
                    'backgroundColor' => ['rgba(16, 185, 129, 0.8)', 'rgba(239, 68, 68, 0.8)', 'rgba(245, 158, 11, 0.8)', 'rgba(107, 114, 128, 0.8)'],
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
                    'backgroundColor' => ['rgba(59, 130, 246, 0.8)', 'rgba(16, 185, 129, 0.8)', 'rgba(245, 158, 11, 0.8)', 'rgba(139, 92, 246, 0.8)'],
                    'borderColor' => '#fff',
                    'borderWidth' => 3,
                    'hoverOffset' => 20
                ]]
            ]"
        />
    </div>

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
                    'backgroundColor' => ['rgba(239, 68, 68, 0.8)', 'rgba(59, 130, 246, 0.8)', 'rgba(16, 185, 129, 0.8)', 'rgba(245, 158, 11, 0.8)', 'rgba(139, 92, 246, 0.8)'],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'cutout' => '60%'
                ]]
            ]"
        />
    </div>

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

    @script
    <script>
        // Função para testar atualização dos gráficos
        function testChartUpdate(event) {
            console.log('Testando atualização dos gráficos de membros...');

            // Simular uma atualização do Livewire
            Livewire.dispatch('update');

            // Mostrar feedback visual
            const button = event.currentTarget;
            const originalText = button.innerHTML;
            
            button.innerHTML = '✅ Atualizado!';
            button.disabled = true;
            button.classList.remove('bg-blue-600', 'hover:bg-blue-700');
            button.classList.add('bg-green-500', 'cursor-not-allowed');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
                button.classList.remove('bg-green-500', 'cursor-not-allowed');
                button.classList.add('bg-blue-600', 'hover:bg-blue-700');
            }, 2000);
        }
    </script>
    @endscript
</div>