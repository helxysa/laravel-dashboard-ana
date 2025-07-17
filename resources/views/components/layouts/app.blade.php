<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Pessoas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="fixed left-0 top-0 w-64 h-screen bg-white shadow-lg flex flex-col z-50">
            
            <!-- Logo/Brand -->
            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                   
                    <span class="text-xl font-bold text-gray-900">Painel Adminstrativo</span>
                </div>
                

            </div>

            <!-- Navigation -->
            <nav class="mt-6 px-4 flex-1 overflow-y-auto">
                <!-- Dashboard (Active) -->
                <div class="mb-6">
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center px-4 py-3 text-orange-600 bg-orange-50 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-orange-50 text-orange-600' : 'hover:bg-gray-50' }}">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l6.293 6.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                        Dashboard
                    </a>
                </div>
            </nav>

            <!-- Footer -->
            <div class="p-4 border-t border-gray-200">
                <div class="text-center">
                    <p class="text-xs text-gray-500 mb-2">Powered by</p>
                    <p class="text-xs font-medium text-gray-700 mb-1">DTI - DSIS</p>
                    <p class="text-xs text-gray-500">Ministério Público</p>
                    <p class="text-xs text-gray-500">do Estado do Amapá</p>
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
