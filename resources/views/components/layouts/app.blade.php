<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Meta tags para SPA otimizado --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    
    <title>{{ $title ?? 'Gestão de Pessoas - MPAP' }}</title>
    
    {{-- <link rel="icon" type="image/png" href="favicon.png"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @livewireStyles
    
    @stack('styles')
</head>

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="fixed left-0 top-0 w-64 h-screen bg-white shadow-lg flex flex-col z-50">

            <!-- Header da Sidebar -->
            <div class="flex items-center justify-start p-4 border-b border-gray-200 h-16">
                <div class="flex items-center space-x-3">
                    {{-- Adicione a imagem do logo aqui se desejar --}}
                    {{-- <img src="/logo-mpap.png" alt="Logo MPAP" class="h-10 w-auto"> --}}
                    <div class="w-10 h-10 bg-blue-600 rounded-md flex items-center justify-center text-white font-bold text-lg">
                        MP
                    </div>
                    <div>
                        <span class="text-sm font-semibold text-gray-900 leading-tight">Ministério Público</span>
                        <span class="block text-xs text-gray-500 leading-tight">do Estado do Amapá</span>
                    </div>
                </div>
            </div>

            <!-- Navegação Principal -->
            <nav class="mt-4 px-4 flex-1 overflow-y-auto">
                {{-- 
                    A lógica de classe ativa foi alterada para usar request()->routeIs().
                    Isso verifica se o nome da rota atual corresponde ao link.
                    É a forma padrão e mais confiável no Laravel.
                --}}
                <a href="{{ route('visao-geral') }}" wire:navigate
                   class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors duration-200 mb-2
                          {{ request()->routeIs('visao-geral') ? 'text-white bg-blue-600 shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Visão Geral
                </a>

                <a href="<?php echo e(route('pessoas')); ?>" wire:navigate
                   class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors duration-200 mb-2
                          {{ request()->routeIs('pessoas') ? 'text-white bg-blue-600 shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Pessoas
                </a>

                <a href="{{ route('contra-cheque') }}" wire:navigate
                   class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors duration-200 mb-2
                          {{ request()->routeIs('contra-cheque') ? 'text-white bg-blue-600 shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Contracheque
                </a>

                <a href="{{ route('colaboradores') }}" wire:navigate
                   class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors duration-200 mb-2
                          {{ request()->routeIs('colaboradores') ? 'text-white bg-blue-600 shadow-sm' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Colaboradores
                </a>
            </nav>

            <!-- Footer da Sidebar -->
            <div class="p-4 border-t border-gray-200 mt-auto">
                <span class="text-gray-500 text-xs">
                    Powered by
                    <a href="https://www.mpap.mp.br/dti" target="_blank"
                       class="text-blue-600 hover:underline font-medium">DTI/DSIS - MPAP</a>
                </span>
            </div>
        </aside>

        <!-- Conteúdo Principal -->
        <div class="flex-1 flex flex-col min-h-screen ml-64">
            <!-- Barra Superior (Header) -->
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40 h-16 flex items-center">
                <div class="flex items-center justify-between px-6 w-full">
                    <!-- Título da Página (pode ser dinâmico) -->
                    <h1 class="text-xl font-semibold text-gray-800">
                        @if(request()->routeIs('visao-geral'))
                            Visão Geral
                        @elseif(request()->routeIs('pessoas'))
                            Gestão de Pessoas
                        @elseif(request()->routeIs('contra-cheque'))
                            Contracheque
                        @elseif(request()->routeIs('colaboradores'))
                            Análise de Colaboradores
                        @endif
                    </h1>

                    <!-- Perfil do Usuário -->
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center overflow-hidden">
                            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="hidden md:block text-right">
                            <p class="text-sm font-medium text-gray-800">Usuário Logado</p>
                            <p class="text-xs text-gray-500">usuario@mpap.mp.br</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Conteúdo da Página -->
            <main class="flex-1 p-6 bg-gray-50">
                {{-- 
                  Este é o ponto mais importante.
                  O Livewire irá injetar o conteúdo do seu componente de página 
                  (no seu caso, o `pessoas.blade.php`) aqui.
                --}}
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- Scripts do Livewire -->
    @livewireScripts
    
    <!-- Permite que componentes filhos enviem seus próprios scripts para o final do body -->
    @stack('scripts')
</body>

</html>
