<div class="space-y-6 lg:space-y-8" x-data="{ activeTab: 'visao-geral' }">
    <!-- inicio  -->
    <div>
        <!-- navegacao -->
        <div class="flex items-end">
            <button @click="activeTab = 'visao-geral'"
                :class="activeTab === 'visao-geral'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center">
                    <!-- SVG clean e relacionado a visão geral (dashboard/overview) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 lg:h-6 lg:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <rect x="3" y="3" width="7" height="7" rx="2" stroke-width="1.5"/>
                        <rect x="14" y="3" width="7" height="7" rx="2" stroke-width="1.5"/>
                        <rect x="14" y="14" width="7" height="7" rx="2" stroke-width="1.5"/>
                        <rect x="3" y="14" width="7" height="7" rx="2" stroke-width="1.5"/>
                    </svg>
                </span>
                Visão Geral
            </button>

            <button @click="activeTab = 'membros'"
                :class="activeTab === 'membros'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: user outline -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="10" cy="7" r="4" stroke="currentColor" stroke-width="1.2" fill="none"/>
                        <path d="M3 17c0-3 3.5-5 7-5s7 2 7 5" stroke="currentColor" stroke-width="1.2" fill="none"/>
                    </svg>
                </span>
                Membros Ativos
            </button>

            <button @click="activeTab = 'membros-inativos'"
                :class="activeTab === 'membros-inativos'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="10" cy="7" r="4" stroke="currentColor" stroke-width="1.2" fill="none"/>
                        <path d="M3 17c0-3 3.5-5 7-5s7 2 7 5" stroke="currentColor" stroke-width="1.2" fill="none"/>
                        <line x1="14.5" y1="3.5" x2="17.5" y2="6.5" stroke="#ef4444" stroke-width="1.2" stroke-linecap="round"/>
                        <line x1="17.5" y1="3.5" x2="14.5" y2="6.5" stroke="#ef4444" stroke-width="1.2" stroke-linecap="round"/>
                    </svg>
                </span>
                Membros Inativos
            </button>

            <button @click="activeTab = 'servidores'"
                :class="activeTab === 'servidores'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: badge/check -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="10" cy="10" r="8" stroke="#22c55e" stroke-width="1.2" fill="none"/>
                        <path d="M7 10.5l2 2 4-4" stroke="#22c55e" stroke-width="1.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                Servidores Ativos
            </button>

            <button @click="activeTab = 'servidores-inativos'"
                :class="activeTab === 'servidores-inativos'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: badge com X -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="10" cy="10" r="8" stroke="#ef4444" stroke-width="1.2" fill="none"/>
                        <line x1="7" y1="7" x2="13" y2="13" stroke="#ef4444" stroke-width="1.4" stroke-linecap="round"/>
                        <line x1="13" y1="7" x2="7" y2="13" stroke="#ef4444" stroke-width="1.4" stroke-linecap="round"/>
                    </svg>
                </span>
                Servidores Inativos
            </button>

            <button @click="activeTab = 'estagiarios'"
                :class="activeTab === 'estagiarios'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: chapéu de formatura simples -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <polygon points="10,4 18,8 10,12 2,8 10,4" fill="#3b82f6" stroke="#2563eb" stroke-width="1"/>
                        <rect x="8.5" y="12" width="3" height="1.2" rx="0.6" fill="#2563eb"/>
                    </svg>
                </span>
                Estagiários
            </button>

            <button @click="activeTab = 'pensionista'"
                :class="activeTab === 'pensionista'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: bengala simples -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <rect x="12" y="8" width="1" height="7" rx="0.5" fill="#a3a3a3"/>
                        <circle cx="12.5" cy="16" r="0.7" fill="#a3a3a3"/>
                        <circle cx="12.5" cy="7" r="1.2" stroke="#a3a3a3" stroke-width="1" fill="none"/>
                    </svg>
                </span>
                Pensionista
            </button>

            <button @click="activeTab = 'colaboradores'"
                :class="activeTab === 'colaboradores'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: duas pessoas outline -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="7" cy="8" r="2" stroke="#2563eb" stroke-width="1" fill="none"/>
                        <circle cx="13" cy="8" r="2" stroke="#2563eb" stroke-width="1" fill="none"/>
                        <path d="M4 16c0-2 2-4 6-4s6 2 6 4" stroke="#2563eb" stroke-width="1" fill="none"/>
                    </svg>
                </span>
                Cedidos
            </button>

            <button @click="activeTab = 'cedidos'"
                :class="activeTab === 'cedidos'
                    ? 'text-blue-600 bg-gray-100 rounded-t-lg border-l border-t border-r border-gray-300 -mb-px relative z-10'
                    : 'text-gray-500 hover:text-blue-600 border-b border-gray-200'"
                class="flex items-center gap-2 py-2 px-4 lg:py-3 lg:px-5 font-semibold transition-all duration-200 text-sm lg:text-base whitespace-nowrap">
                <span class="flex items-center justify-center mr-2">
                    <!-- SVG alternativo menor: três pessoas outline -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <circle cx="10" cy="7" r="2" stroke="#2563eb" stroke-width="1" fill="none"/>
                        <circle cx="6" cy="10" r="1.2" stroke="#2563eb" stroke-width="1" fill="none"/>
                        <circle cx="14" cy="10" r="1.2" stroke="#2563eb" stroke-width="1" fill="none"/>
                        <path d="M3 17c0-2 2.5-4 7-4s7 2 7 4" stroke="#2563eb" stroke-width="1" fill="none"/>
                    </svg>
                </span>
                Colaboradores
            </button>

            <div class="flex-grow border-b border-gray-200"></div>
        </div>

        <!-- conteudo das abas -->
        <div class="bg-gray-100 p-4 md:p-6 lg:p-8 rounded-b-lg rounded-tr-lg border border-gray-300 shadow-sm">

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
                                <div id="meses-container" class="flex gap-2 overflow-x-auto scrollbar-hide scroll-smooth w-[700px] max-w-full px-6" style="scrollbar-width: none; -ms-overflow-style: none;">
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
                                <div class="flex items-center gap-3">
                                <input type="date" id="data_inicio" wire:model="data_inicio"
                                    class="px-1 py-0.5 rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-[11px] w-20 h-7">
                                <span class="text-gray-400 text-[11px] font-medium">até</span>
                                <input type="date" id="data_fim" wire:model="data_fim"
                                    class="px-1 py-0.5 rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-[11px] w-20 h-7">
                                <button wire:click="aplicarFiltroPeriodo"
                                    class="ml-1 bg-blue-600 text-white py-0.5 px-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 text-[11px] font-medium transition-all duration-200 whitespace-nowrap h-7">
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

            <!-- membros ativos -->
            <div x-show="activeTab === 'membros'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.categorias-membros.membros')
            </div>

            <!-- membros inativos -->
            <div x-show="activeTab === 'membros-inativos'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.categorias-membros.membros-inativos')
            </div>

            <!-- servidores ativos -->
            <div x-show="activeTab === 'servidores'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.categoria-servidores.servidores')
            </div>

            <!-- servidores inativos -->
            <div x-show="activeTab === 'servidores-inativos'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.categoria-servidores.servidores-inativos')
            </div>

            <!-- servidores ativos -->
            <div x-show="activeTab === 'estagiarios'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.estagiarios.estagiarios')
            </div>


            <div x-show="activeTab === 'colaboradores'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.colaboradores.colaboradores')
            </div>

            <div x-show="activeTab === 'pensionista'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                @livewire('gestao-pessoas.colaboradores.colaboradores')
            </div>

            <!-- gestao de pessoas -->
           
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
