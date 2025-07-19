<div class="space-y-6 lg:space-y-8" x-data="{ activeTab: 'visao-geral' }">
    <!-- inicio  -->
    <div>
        <!-- navegacao -->
        <div class="flex items-end">
            <button @click="activeTab = 'visao-geral'"
                :class="activeTab === 'visao-geral'
                    ? 'text-blue-600 bg-white rounded-t-lg border-l border-t border-r border-gray-200 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    📊
                </span>
                Visão Geral
            </button>

            <button @click="activeTab = 'membros'"
                :class="activeTab === 'membros'
                    ? 'text-blue-600 bg-white rounded-t-lg border-l border-t border-r border-gray-200 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    👨‍⚖️
                </span>
                Membros
            </button>

            <button @click="activeTab = 'servidores'"
                :class="activeTab === 'servidores'
                    ? 'text-blue-600 bg-white rounded-t-lg border-l border-t border-r border-gray-200 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    👨‍💼
                </span>
                Servidores
            </button>

            <button @click="activeTab = 'gestao-pessoas'"
                :class="activeTab === 'gestao-pessoas'
                    ? 'text-blue-600 bg-white rounded-t-lg border-l border-t border-r border-gray-200 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    👥
                </span>
                Gestão de Pessoas
            </button>

            <div class="flex-grow border-b border-gray-200"></div>
        </div>

        <!-- conteudo das abas -->
        <div class="bg-white p-4 md:p-6 lg:p-8 rounded-b-lg rounded-tr-lg border border-gray-200 shadow-sm">

            <!-- visao geral -->
            <div x-show="activeTab === 'visao-geral'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                <!-- Filtros de Data -->
                <div class="mb-6 lg:mb-8 p-4 bg-white rounded-xl border border-gray-200 shadow-sm">
                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-start lg:items-center w-full">
                        <!-- Seleção de Ano -->
                        <div class="flex items-center gap-3 min-w-0">
                            <span class="text-sm font-semibold text-gray-700 whitespace-nowrap">Ano:</span>
                            <div class="relative flex items-center group">
                                <button onclick="scrollContainer('anos-container', -200)" 
                                    class="absolute left-0 z-10 p-1 bg-white/80 backdrop-blur-sm rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-all duration-200 hover:bg-white hover:shadow-md">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <div id="anos-container" class="flex gap-2 overflow-x-auto scrollbar-hide scroll-smooth w-56 px-6" style="scrollbar-width: none; -ms-overflow-style: none;">
                                    @foreach ($anosDisponiveis as $ano)
                                        <button wire:click="$set('anoSelecionado', {{ $ano }})"
                                            class="px-4 py-1.5 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                                                   {{ $anoSelecionado == $ano 
                                                      ? 'bg-blue-600 text-white shadow-md' 
                                                      : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                            {{ $ano }}
                                        </button>
                                    @endforeach
                                </div>
                                <button onclick="scrollContainer('anos-container', 200)" 
                                    class="absolute right-0 z-10 p-1 bg-white/80 backdrop-blur-sm rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-all duration-200 hover:bg-white hover:shadow-md">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Seleção de Mês -->
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-semibold text-gray-700 whitespace-nowrap">Mês:</span>
                            <div class="relative flex items-center group">
                                <button onclick="scrollContainer('meses-container', -200)" 
                                    class="absolute left-0 z-10 p-1 bg-white/80 backdrop-blur-sm rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-all duration-200 hover:bg-white hover:shadow-md">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <div id="meses-container" class="flex gap-2 overflow-x-auto scrollbar-hide scroll-smooth w-128 px-6" style="scrollbar-width: none; -ms-overflow-style: none;">
                                    @foreach ($mesesDisponiveis as $num => $nome)
                                        <button wire:click="$set('mesSelecionado', {{ $num }})"
                                            class="px-4 py-1.5 rounded-lg text-sm font-medium transition-all duration-200 whitespace-nowrap
                                                   {{ $mesSelecionado == $num 
                                                      ? 'bg-blue-600 text-white shadow-md' 
                                                      : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                                            {{ $nome }}
                                        </button>
                                    @endforeach
                                </div>
                                <button onclick="scrollContainer('meses-container', 200)" 
                                    class="absolute right-0 z-10 p-1 bg-white/80 backdrop-blur-sm rounded-full shadow-sm opacity-0 group-hover:opacity-100 transition-all duration-200 hover:bg-white hover:shadow-md">
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Divisor -->
                        <div class="hidden lg:block border-l border-gray-300 h-8 flex-shrink-0"></div>

                        <!-- Filtro por Período Personalizado -->
                        <div class="flex items-center gap-3 flex-shrink-0">
                            <span class="text-sm font-semibold text-gray-700 whitespace-nowrap">Período:</span>
                            <div class="flex items-center gap-3">
                                <input type="date" id="data_inicio" wire:model="data_inicio"
                                    class="px-3 py-1.5 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm w-40">
                                <span class="text-gray-400 text-sm font-medium">até</span>
                                <input type="date" id="data_fim" wire:model="data_fim"
                                    class="px-3 py-1.5 rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm w-40">
                                <button wire:click="aplicarFiltroPeriodo"
                                    class="ml-2 bg-blue-600 text-white py-1.5 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 text-sm font-medium transition-all duration-200 whitespace-nowrap">
                                    Aplicar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 mb-4 lg:mb-6">Visão Geral</h1>

                <!-- cards aq -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8" wire:key="cards-container">
                    <!-- Card 1: Membros -->
                    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm" wire:key="card-membros">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-emerald-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="text-sm text-gray-500">Membros</span>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <span class="text-lg font-semibold text-emerald-600">295</span>
                                <span class="block text-sm text-gray-500">Ativos</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-red-500">10</span>
                                <span class="block text-sm text-gray-500">Inativos</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-emerald-600">305</span>
                                <span class="block text-sm text-gray-500">Total</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Servidores Efetivos -->
                    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm" wire:key="card-servidores">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-blue-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="text-sm text-gray-500">Servidores Efetivos</span>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <span class="text-lg font-semibold text-blue-600">62</span>
                                <span class="block text-sm text-gray-500">Ativos</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-red-500">10</span>
                                <span class="block text-sm text-gray-500">Inativos</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-blue-600">72</span>
                                <span class="block text-sm text-gray-500">Total</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Servidores Cedidos -->
                    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm" wire:key="card-cedidos">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-indigo-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <span class="text-sm text-gray-500">Servidores Cedidos</span>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <span class="text-lg font-semibold text-orange-600">36</span>
                                <span class="block text-sm text-gray-500">Pelo MP-AP</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-green-600">98</span>
                                <span class="block text-sm text-gray-500">Para MP-AP</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-indigo-600">134</span>
                                <span class="block text-sm text-gray-500">Total</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Estagiários & Terceirizados -->
                    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm" wire:key="card-estagiarios">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-purple-100 p-2 rounded-lg">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <span class="text-sm text-gray-500">Estagiários & Terceirizados</span>
                        </div>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="text-center">
                                <span class="text-lg font-semibold text-purple-600">82</span>
                                <span class="block text-xs text-gray-500">Colaboradores</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-pink-600">42</span>
                                <span class="block text-xs text-gray-500">Estagiários</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-amber-600">42</span>
                                <span class="block text-xs text-gray-500">Pensionistas</span>
                            </div>
                            <div class="text-center">
                                <span class="text-lg font-semibold text-purple-600">166</span>
                                <span class="block text-xs text-gray-500">Total</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- graficos gerais -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-6 mb-6 lg:mb-8" wire:key="charts-container">
                    <x-charts.simple
                        id="chart1"
                        type="doughnut"
                        title="Distribuição Geral por Categoria"
                        :data="[
                            'labels' => ['Membros', 'Servidores', 'Cedidos', 'Colaboradores', 'Estagiários'],
                            'datasets' => [[
                                'label' => 'Distribuição Geral',
                                'data' => [305, 72, 134, 82, 42],
                                'backgroundColor' => [
                                    'rgba(16, 185, 129, 0.8)',
                                    'rgba(59, 130, 246, 0.8)',
                                    'rgba(99, 102, 241, 0.8)',
                                    'rgba(139, 92, 246, 0.8)',
                                    'rgba(236, 72, 153, 0.8)'
                                ],
                                'borderColor' => '#fff',
                                'borderWidth' => 2,
                                'cutout' => '70%'
                            ]]
                        ]"
                        :height="'h-40 lg:h-48 xl:h-52'"
                    />

                    <x-charts.simple
                        id="chart2"
                        type="bar"
                        title="Crescimento Anual"
                        :data="[
                            'labels' => ['2020', '2021', '2022', '2023', '2024'],
                            'datasets' => [[
                                'label' => 'Total de Pessoas',
                                'data' => [580, 595, 610, 625, 635],
                                'backgroundColor' => 'rgba(59, 130, 246, 0.7)',
                                'borderColor' => 'rgba(59, 130, 246, 1)',
                                'borderWidth' => 1,
                                'borderRadius' => 4
                            ]]
                        ]"
                        :height="'h-40 lg:h-48 xl:h-52'"
                    />

                    <x-charts.simple
                        id="chart3"
                        type="pie"
                        title="Status Geral"
                        :data="[
                            'labels' => ['Ativos', 'Inativos', 'Licença', 'Aposentados'],
                            'datasets' => [[
                                'label' => 'Status',
                                'data' => [595, 25, 10, 5],
                                'backgroundColor' => [
                                    'rgba(16, 185, 129, 0.8)',
                                    'rgba(239, 68, 68, 0.8)',
                                    'rgba(245, 158, 11, 0.8)',
                                    'rgba(107, 114, 128, 0.8)'
                                ],
                                'borderColor' => '#fff',
                                'borderWidth' => 3,
                                'hoverOffset' => 20
                            ]]
                        ]"
                        :height="'h-40 lg:h-48 xl:h-52'"
                    />
                </div>

                <!-- grafico maior -->
                <x-charts.simple
                    id="mainChart"
                    type="line"
                    title="Evolução Geral por Categoria"
                    :data="[
                        'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                        'datasets' => [
                            [
                                'label' => 'Membros',
                                'data' => [300, 302, 305, 305, 305, 305],
                                'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                                'borderColor' => 'rgba(16, 185, 129, 1)',
                                'borderWidth' => 3,
                                'tension' => 0.4
                            ],
                            [
                                'label' => 'Servidores',
                                'data' => [70, 71, 72, 72, 72, 72],
                                'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                                'borderColor' => 'rgba(59, 130, 246, 1)',
                                'borderWidth' => 3,
                                'tension' => 0.4
                            ],
                            [
                                'label' => 'Cedidos',
                                'data' => [130, 132, 134, 134, 134, 134],
                                'backgroundColor' => 'rgba(99, 102, 241, 0.1)',
                                'borderColor' => 'rgba(99, 102, 241, 1)',
                                'borderWidth' => 3,
                                'tension' => 0.4
                            ],
                            [
                                'label' => 'Colaboradores',
                                'data' => [80, 81, 82, 82, 82, 82],
                                'backgroundColor' => 'rgba(139, 92, 246, 0.1)',
                                'borderColor' => 'rgba(139, 92, 246, 1)',
                                'borderWidth' => 3,
                                'tension' => 0.4
                            ],
                            [
                                'label' => 'Estagiários',
                                'data' => [40, 41, 42, 42, 42, 42],
                                'backgroundColor' => 'rgba(236, 72, 153, 0.1)',
                                'borderColor' => 'rgba(236, 72, 153, 1)',
                                'borderWidth' => 3,
                                'tension' => 0.4
                            ]
                        ]
                    ]"
                    :height="'h-64 lg:h-80 xl:h-96'"
                />
            </div>

            <!-- membros -->
            <div x-show="activeTab === 'membros'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('membros')
            </div>

            <!-- servidores -->
            <div x-show="activeTab === 'servidores'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('servidores')
            </div>

            <!-- gestao de pessoas -->
            <div x-show="activeTab === 'gestao-pessoas'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

                <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-gray-800 mb-4 lg:mb-6">Gestão de Pessoas</h1>

                <!-- cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
                    <div
                        class="bg-indigo-50 p-4 lg:p-5 rounded-xl border border-indigo-100 transform hover:scale-105 transition-transform duration-200">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-gray-600 font-medium text-sm lg:text-base">Total de Colaboradores</span>
                            <div class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">
                                <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">42</p>
                        <p class="text-xs lg:text-sm text-green-600 mt-1 flex items-center gap-1">
                            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>+5 este mês</span>
                        </p>
                    </div>

                    <div
                        class="bg-teal-50 p-4 lg:p-5 rounded-xl border border-teal-100 transform hover:scale-105 transition-transform duration-200">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-gray-600 font-medium text-sm lg:text-base">Novas Contratações</span>
                            <div class="bg-teal-100 text-teal-600 p-2 rounded-lg">
                                <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">3</p>
                        <p class="text-xs lg:text-sm text-green-600 mt-1 flex items-center gap-1">
                            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Este mês</span>
                        </p>
                    </div>

                    <div
                        class="bg-yellow-50 p-4 lg:p-5 rounded-xl border border-yellow-100 transform hover:scale-105 transition-transform duration-200">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-gray-600 font-medium text-sm lg:text-base">Aniversariantes</span>
                            <div class="bg-yellow-100 text-yellow-600 p-2 rounded-lg">
                                <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">5</p>
                        <p class="text-xs lg:text-sm text-blue-600 mt-1 flex items-center gap-1">
                            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Este mês</span>
                        </p>
                    </div>

                    <div
                        class="bg-pink-50 p-4 lg:p-5 rounded-xl border border-pink-100 transform hover:scale-105 transition-transform duration-200">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-gray-600 font-medium text-sm lg:text-base">Vagas Abertas</span>
                            <div class="bg-pink-100 text-pink-600 p-2 rounded-lg">
                                <svg class="w-4 h-4 lg:w-5 lg:h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-2xl lg:text-3xl xl:text-4xl font-bold text-gray-900">2</p>
                        <p class="text-xs lg:text-sm text-orange-600 mt-1 flex items-center gap-1">
                            <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Urgentes</span>
                        </p>
                    </div>
                </div>

                <!-- tabela -->
                <div class="bg-gray-50 p-4 lg:p-5 rounded-xl border border-gray-200">
                    <h2 class="text-base lg:text-lg font-semibold text-gray-700 mb-3 lg:mb-4">Membros da Equipe</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left min-w-full">
                            <thead class="border-b-2 border-gray-200">
                                <tr>
                                    <th class="py-2 lg:py-3 px-2 lg:px-4 font-semibold text-xs lg:text-sm">Nome</th>
                                    <th class="py-2 lg:py-3 px-2 lg:px-4 font-semibold text-xs lg:text-sm">Cargo</th>
                                    <th class="py-2 lg:py-3 px-2 lg:px-4 font-semibold text-xs lg:text-sm">Email</th>
                                    <th class="py-2 lg:py-3 px-2 lg:px-4 font-semibold text-xs lg:text-sm">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 flex items-center gap-2 lg:gap-3">
                                        <div
                                            class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-semibold text-xs lg:text-sm">
                                            AS</div>
                                        <div>
                                            <div class="font-medium text-xs lg:text-sm">Ana Silva</div>
                                            <div class="text-xs text-gray-500">@anasilva</div>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">Desenvolvedora Frontend
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">ana.silva@example.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4"><span
                                            class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">Ativo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 flex items-center gap-2 lg:gap-3">
                                        <div
                                            class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-semibold text-xs lg:text-sm">
                                            CP</div>
                                        <div>
                                            <div class="font-medium text-xs lg:text-sm">Carlos Pereira</div>
                                            <div class="text-xs text-gray-500">@carlosp</div>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">Gerente de Projetos</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">carlos.p@example.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4"><span
                                            class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">Ativo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 flex items-center gap-2 lg:gap-3">
                                        <div
                                            class="w-8 h-8 lg:w-10 lg:h-10 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-semibold text-xs lg:text-sm">
                                            MC</div>
                                        <div>
                                            <div class="font-medium text-xs lg:text-sm">Mariana Costa</div>
                                            <div class="text-xs text-gray-500">@mcosta</div>
                                        </div>
                                    </td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">Designer UX/UI</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4 text-xs lg:text-sm">mariana.c@example.com</td>
                                    <td class="py-3 lg:py-4 px-2 lg:px-4"><span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full">Férias</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Função para scroll horizontal dos containers
    function scrollContainer(containerId, scrollAmount) {
        const container = document.getElementById(containerId);
        if (container) {
            container.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }
</script>


@push('styles')
<style>
    /* Esconder scrollbar nos containers */
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    
    /* Smooth scroll para os containers */
    #anos-container, #meses-container {
        scroll-behavior: smooth;
    }
    
    /* Gradiente sutil nas bordas dos containers */
    .group:hover #anos-container::before,
    .group:hover #meses-container::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 20px;
        background: linear-gradient(to right, rgba(255,255,255,0.8), transparent);
        pointer-events: none;
        z-index: 1;
    }
    
    .group:hover #anos-container::after,
    .group:hover #meses-container::after {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 20px;
        background: linear-gradient(to left, rgba(255,255,255,0.8), transparent);
        pointer-events: none;
        z-index: 1;
    }
</style>
@endpush
