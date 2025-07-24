{{-- membros.blade.php --}}
<div class="p-6 space-y-6">
    <div class="flex justify-between items-center">
        <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 mb-4 lg:mb-6">Membros Ativos</h1>

    </div>

    <!-- Container único para cards do topo e gráficos -->
    <div class="w-full px-2">
        <!-- Cards coloridos do topo em linha ocupando toda a largura -->
        <div class="flex flex-row gap-6 mb-6 lg:mb-8 w-full justify-between">

            <div
                class="flex-1 bg-yellow-100 p-4 lg:p-5 rounded-xl border border-yellow-200 transform hover:scale-105 transition-transform duration-200 min-w-[220px] max-w-xs">
                <div class="flex justify-between items-start mb-2">
                    <span class="text-gray-700 font-medium text-sm lg:text-base">Promotores Entrança Final</span>
                    <div class="bg-yellow-200 text-yellow-700 p-2 rounded-lg">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">49</p>
                <p class="text-xs lg:text-sm text-gray-500 mt-1">
                    <span>2025</span>
                </p>
            </div>

            <div
                class="flex-1 bg-pink-100 p-4 lg:p-5 rounded-xl border border-pink-200 transform hover:scale-105 transition-transform duration-200 min-w-[220px] max-w-xs">
                <div class="flex justify-between items-start mb-2">
                    <span class="text-gray-700 font-medium text-sm lg:text-base">Promotores Substitutos</span>
                    <div class="bg-pink-200 text-pink-700 p-2 rounded-lg">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">11</p>
                <p class="text-xs lg:text-sm text-gray-500 mt-1">
                    <span>2025</span>
                </p>
            </div>

            <div
                class="flex-1 bg-green-100 p-4 lg:p-5 rounded-xl border border-green-200 transform hover:scale-105 transition-transform duration-200 min-w-[220px] max-w-xs">
                <div class="flex justify-between items-start mb-2">
                    <span class="text-gray-700 font-medium text-sm lg:text-base">Total de Membros Ativos</span>
                    <div class="bg-green-200 text-green-700 p-2 rounded-lg">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">81</p>
                <p class="text-xs lg:text-sm text-green-700 mt-1 flex items-center gap-1">
                    <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>2025</span>
                </p>
            </div>
        </div>

        <!-- Seção 1: Gráficos de cargos lado a lado -->
        <div class="flex flex-col lg:flex-row gap-6 mb-8">
            <div class="flex-1 flex flex-col">
                <x-charts.simple id="membros_situacao" type="doughnut" title="Cargo Efetivo (%)" :data="[
                    'labels' => [
                        'Promotor Justiça Entr Final',
                        'Procurador de Justiça',
                        'Promotor Justiça Substituto',
                        'Promotor Justiça Entr Inicial',
                    ],
                    'datasets' => [
                        [
                            'label' => 'Cargo Efetivo',
                            'data' => [60.5, 13.6, 13.6, 13.6],
                            'backgroundColor' => [
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(236, 72, 153, 0.8)',
                                'rgba(245, 158, 11, 0.8)',
                            ],
                            'borderColor' => '#fff',
                            'borderWidth' => 2,
                            'cutout' => '60%',
                        ],
                    ],
                ]"
                    :height="'h-80'" class="h-full min-h-[20rem]" />
            </div>
            <div class="flex-1 flex flex-col">
                <x-charts.simple id="membros_cargo" type="bar" title="Cargo Efetivo (Qtd)" :data="[
                    'labels' => [
                        'Promotores Justiça Entr Final',
                        'Procurador de Justiça',
                        'Promotor Justiça Substituto',
                        'Promotor Justiça Entr Inicial',
                    ],
                    'datasets' => [
                        [
                            'label' => 'Quantidade de Membros por Cargo Efetivo',
                            'data' => [49, 11, 11, 10],
                            'backgroundColor' => [
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(236, 72, 153, 0.8)',
                                'rgba(245, 158, 11, 0.8)',
                            ],
                            'borderColor' => '#fff',
                            'borderWidth' => 1,
                            'borderRadius' => 4,
                        ],
                    ],
                ]"
                    :height="'h-80'" class="h-full min-h-[20rem]" />
            </div>
        </div>


    </div>

    <!-- Seção 3: Gráfico Tempo de Atuação ocupando toda a largura -->
    <div class="w-full mb-8">
        <x-charts.simple id="tempo_atuacao" type="bar" title="Tempo de Atuação no MP-AP" :data="[
            'labels' => [
                '33 anos',
                '17 anos',
                '2 anos',
                '11 anos',
                '28 anos',
                '0 anos',
                '18 anos',
                '30 anos',
                '1 anos',
                '9 anos',
                '22 anos',
                '23 anos',
                '7 anos',
                '8 anos',
                '27 anos',
                '32 anos',
                '21 anos',
                '20 anos',
            ],
            'datasets' => [
                [
                    'label' => 'Quantidade de Membros ativos por tempo de atuação no MP-AP',
                    'data' => [13, 11, 9, 6, 6, 6, 5, 5, 5, 4, 3, 2, 1, 1, 1, 1, 1, 1],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.8)',
                    'borderColor' => 'rgba(59, 130, 246, 1)',
                    'borderWidth' => 1,
                    'borderRadius' => 4,
                ],
            ],
        ]"
            :height="'h-64 lg:h-80 xl:h-96'" />
    </div>

    <!-- Seção 4: Tabela Analítica -->
    <div class="w-full max-w-full">
        <!-- Header da seção -->
        <div class="text-center mb-10 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Membros (Analítico)</h2>
            <p class="text-gray-500 text-base">Gestão completa de membros do sistema</p>
        </div>
        <!-- Espaço extra para separar do topo -->
        <div class="mb-6"></div>
        <!-- Filtros -->
        <div class="p-4 border-b border-gray-100 bg-white rounded-t-xl">
            <div class="flex flex-row flex-wrap gap-4">
                <!-- Filtro por Cargo -->
                <div class="flex-1 min-w-[180px]">
                    <label class="block text-xs font-medium text-gray-500 mb-1">Cargo Efetivo</label>
                    <div class="relative">
                        <select wire:model="filtroCargo"
                            class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500 appearance-none">
                            <option value="">Todos os cargos</option>
                            @foreach ($cargos as $cargo)
                                <option value="{{ $cargo }}">{{ $cargo }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                        </div>
                    </div>
                </div>
                <!-- Filtro por Lotação -->
                <div class="flex-1 min-w-[180px]">
                    <label class="block text-xs font-medium text-gray-500 mb-1">Lotação</label>
                    <div class="relative">
                        <select wire:model="filtroLotacao"
                            class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500 appearance-none">
                            <option value="">Todas as lotações</option>
                            @foreach ($lotacoes as $lotacao)
                                <option value="{{ $lotacao }}">{{ $lotacao }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                        </div>
                    </div>
                </div>
                <!-- Filtro por Tempo de Atuação -->
                <div class="flex-1 min-w-[180px]">
                    <label class="block text-xs font-medium text-gray-500 mb-1">Tempo de Atuação</label>
                    <div class="relative">
                        <select wire:model="filtroTempoAtuacao"
                            class="w-full px-3 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-100 focus:border-blue-500 appearance-none">
                            <option value="">Todos os períodos</option>
                            <option value="menos1">Menos de 1 ano</option>
                            <option value="1-3">1-3 anos</option>
                            <option value="3-5">3-5 anos</option>
                            <option value="mais5">Mais de 5 anos</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabela estilizada -->
        <div class="bg-white rounded-b-xl shadow-sm sm:overflow-x-auto md:overflow-x-visible">
            <table class="min-w-full w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Cargo Efetivo</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Função</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Lotação</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ato/Portaria Nº</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Data publicação</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Atuação</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($membros as $i => $membro)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                {{ ($page - 1) * $perPage + $i + 1 }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-900">
                                {{ $membro['nome'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm">
                                <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">
                                    {{ $membro['cargo'] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm text-gray-500">
                                {{ $membro['funcao'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm text-gray-500">
                                {{ $membro['lotacao'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm text-gray-500">
                                {{ $membro['ato'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm text-gray-500">
                                {{ $membro['publicacao'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-normal break-words text-sm">
                                <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">
                                    {{ $membro['atuacao'] }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-8 text-center text-gray-400">Nenhum membro
                                encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Paginação -->
        <div
            class="px-4 py-3 flex flex-col md:flex-row justify-between items-center border-t border-gray-200 bg-gray-50">
            <div class="text-sm text-gray-500 mb-2 md:mb-0">
                Exibindo <span class="font-medium">{{ ($page - 1) * $perPage + 1 }}</span> - <span
                    class="font-medium">{{ min($page * $perPage, $total) }}</span> de <span
                    class="font-medium">{{ $total }}</span> membros
            </div>
            <div class="flex gap-2">
                <button @if ($page <= 1) disabled @endif
                    wire:click="$set('page', {{ $page - 1 }})"
                    class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 flex items-center gap-1 disabled:opacity-50">
                    <i class="fas fa-chevron-left text-xs"></i>
                    Anterior
                </button>
                <button @if ($page * $perPage >= $total) disabled @endif
                    wire:click="$set('page', {{ $page + 1 }})"
                    class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 flex items-center gap-1 disabled:opacity-50">
                    Próxima
                    <i class="fas fa-chevron-right text-xs"></i>
                </button>
            </div>
        </div>
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
