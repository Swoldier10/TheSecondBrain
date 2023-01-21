<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100">
<x-jet-banner />

<div class="lg:flex flex-col lg:flex-row lg:min-h-screen w-full">
    <!-- Sidebar -->
    <livewire:navigation.sidebar/>
    <!-- End Sidebar -->

    <div class="w-full">

        <livewire:navigation.navbar/>

        <!-- Content Container -->
        <main class="flex-1 relative z-0 overflow-y-auto py-6 " tabindex="0">
            @yield('content')
        </main>
        <!-- Content Container -->

    </div>
</div>

@stack('modals')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
@livewireScripts
</body>
</html>
