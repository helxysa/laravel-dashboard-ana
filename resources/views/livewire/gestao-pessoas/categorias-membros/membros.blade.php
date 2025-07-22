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

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 lg:gap-6 mb-6 lg:mb-8">
        
        <div class="bg-indigo-50 p-4 lg:p-5 rounded-xl border border-indigo-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Procuradores de Justiça</span>
                <div class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">11</p>
            <p class="text-xs lg:text-sm text-gray-500 mt-1">
                <span>2025</span>
            </p>
        </div>

        <div class="bg-teal-50 p-4 lg:p-5 rounded-xl border border-teal-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Promotores Entrância Inicial</span>
                <div class="bg-teal-100 text-teal-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">10</p>
            <p class="text-xs lg:text-sm text-gray-500 mt-1">
                <span>2025</span>
            </p>
        </div>

        <div class="bg-yellow-50 p-4 lg:p-5 rounded-xl border border-yellow-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Promotores Entrança Final</span>
                <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">49</p>
            <p class="text-xs lg:text-sm text-gray-500 mt-1">
                <span>2025</span>
            </p>
        </div>

        <div class="bg-pink-50 p-4 lg:p-5 rounded-xl border border-pink-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Promotores Substitutos</span>
                <div class="bg-pink-100 text-pink-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">11</p>
            <p class="text-xs lg:text-sm text-gray-500 mt-1">
                <span>2025</span>
            </p>
        </div>

        <div class="bg-green-50 p-4 lg:p-5 rounded-xl border border-green-100 transform hover:scale-105 transition-transform duration-200">
            <div class="flex justify-between items-start mb-2">
                <span class="text-gray-600 font-medium text-sm lg:text-base">Total de Membros Ativos</span>
                <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                    <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">81</p>
            <p class="text-xs lg:text-sm text-green-600 mt-1 flex items-center gap-1">
                <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <span>2025</span>
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <x-charts.simple
            id="membros_situacao"
            type="doughnut"
            title="Cargo Efetivo (%)"
            :data="[
                'labels' => ['Promotor Justiça Entr Final', 'Procurador de Justiça', 'Promotor Justiça Substituto', 'Promotor Justiça Entr Inicial'],
                'datasets' => [[
                    'label' => 'Cargo Efetivo',
                    'data' => [60.5, 13.6, 13.6, 13.6],
                    'backgroundColor' => ['rgba(16, 185, 129, 0.8)', 'rgba(59, 130, 246, 0.8)', 'rgba(236, 72, 153, 0.8)', 'rgba(245, 158, 11, 0.8)'],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'cutout' => '70%'
                ]]
            ]"
        />
        <x-charts.simple
            id="membros_cargo"
            type="bar"
            title="Cargo Efetivo (Qtd)"
            :data="[
                'labels' => ['Promotores Justiça Entr Final', 'Procurador de Justiça', 'Promotor Justiça Substituto', 'Promotor Justiça Entr Inicial'],
                'datasets' => [[
                    'label' => 'Quantidade de Membros por Cargo Efetivo',
                    'data' => [49, 11, 11, 10],
                    'backgroundColor' => ['rgba(16, 185, 129, 0.8)', 'rgba(59, 130, 246, 0.8)', 'rgba(236, 72, 153, 0.8)', 'rgba(245, 158, 11, 0.8)'],
                    'borderColor' => '#fff',
                    'borderWidth' => 1,
                    'borderRadius' => 4
                ]]
            ]"
        />
         <x-charts.simple
            id="lotacao_top_5"
            type="doughnut"
            title="Lotação Top 5 (%)"
            :data="[
                'labels' => ['Outros', 'Ministério Público do Amapá - Substitutos', 'Procuradoria Geral de Justiça', 'Promot Inf e Juventude de Macapá', 'Promotoria de Laranjal do Jari'],
                'datasets' => [[
                    'label' => 'Especialidades',
                    'data' => [80.2, 8.6, 3.7, 3.7, 3.7],
                    'backgroundColor' => ['rgba(255, 159, 64, 0.8)', 'rgba(59, 130, 246, 0.8)', 'rgba(16, 185, 129, 0.8)', 'rgba(236, 72, 153, 0.8)', 'rgba(139, 92, 246, 0.8)'],
                    'borderColor' => '#fff',
                    'borderWidth' => 2,
                    'cutout' => '60%'
                ]]
            ]"
        />
    </div>

    <div class="mb-8">
        <x-charts.simple
            id="lotacao_top_15"
            type="bar"
            title="Lotação Top 15 (Qtd)"
            :data="[
                'labels' => ['Ministério Público do Amapá - Substitutos', 'Promotoria de Laranjal do Jari', 'Procuradoria Geral de Justiça', 'Promot Inf e Juventude de Macapá', '1ª Promotoria', 'Promotoria de Oiapoque', 'Gabinete de Procuradoria - Dra. Margeilla Campelo', 'Gabinete de Procuradoria - Dra. Estela Nascimento', 'Gabinete de Procuradoria - Dr. Márcio Alves', 'Gab. de Família, Órfãos Sucessões e Incap. Mcp', 'Gab. Proc. Justiça Dr. Manuel Felipe Menezes S. Júnior', 'Gab. de Procuradoria Dra. Ivana Lúcia Franco Cei', 'Gabinete de Procuradoria Dr. Joel Chaggas', 'Gab. Dra. Gilaudia Pachno Nunes'],
                'datasets' => [[
                    'label' => 'Quantidade de Membros por Lotação',
                    'data' => [7, 3, 3, 3, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1],
                    'backgroundColor' => 'rgba(239, 68, 68, 0.8)',
                    'borderColor' => 'rgba(239, 68, 68, 1)',
                    'borderWidth' => 1,
                    'borderRadius' => 4
                ]]
            ]"
            :height="'h-64 lg:h-80 xl:h-96'"
            :options="[
                'indexAxis' => 'y'
            ]"
        />
    </div>
    

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