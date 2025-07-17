<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Pessoas</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <div class="fixed left-0 top-0 w-64 h-screen bg-white shadow-lg flex flex-col z-50">
            
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div>
                        <span class="text-sm font-semibold text-gray-900 leading-tight">Ministério Público</span>
                        <span class="block text-[10px] text-gray-600 leading-tight">do Estado do Amapá</span>
                    </div>
                    <img src="{{ asset('logo-mpap.png') }}" alt="Logo Ministério Público do Estado do Amapá" class="w-16 h-auto ml-4" />
                </div>

            </div>

            <!-- Navigation -->
            <nav class="mt-6 px-4 flex-1 overflow-y-auto">
                <!-- Dashboard (Active) -->
                <div class="mb-6">
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center px-3 py-2.5 text-blue-600 bg-blue-50 rounded-lg text-[15px] {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600' : 'hover:bg-gray-50' }}">
                        <span class="w-5 h-5 mr-2">@svg('carbon-dashboard')</span>
                        Dashboard
                    </a>
                </div>
            </nav>
        
            <!-- Footer -->
            <div class="p-4 border-t border-gray-200">
                <div class="">
                    <span class="text-gray-500 text-[12px] pl-1">
                        Powered by 
                        <a href="https://www.mpap.mp.br/dti" target="_blank" class="text-blue-600 hover:underline font-medium ml-1">DTI/DSIS - MPAP</a>
                    </span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen ml-64">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-40">
                <div class="flex items-center justify-between px-4 py-3">


                    <!-- Page Title -->
                    <h1 class="text-lg font-semibold text-gray-900">
                        @yield('page-title', 'Dashboard')
                    </h1>

                    <!-- User Profile -->
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="hidden md:block">
                            <p class="text-sm font-medium text-gray-900">Usuário</p>
                            <p class="text-xs text-gray-500">usuario@email.com</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-4 lg:p-6 overflow-y-auto">
                {{ $slot }}
            </main>
        </div>


    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
