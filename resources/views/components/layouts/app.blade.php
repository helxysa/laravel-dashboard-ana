<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Pessoas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('scripts')
</head>

<body class="bg-gray-100">
    <div class="min-h-screen">
        {{ $slot }}
    </div>


    @livewireScripts
</body>

</html>
