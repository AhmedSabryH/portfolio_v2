<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
        
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    <link rel="shortcut icon" href="{{asset('assets/logok.png')}}" type="image/x-icon">
    <title>
        @yield('title', 'Portoflio')
    </title>
</head>

<body class="bg-gray-300 dark:bg-gray-900 dark:text-gray-200 ">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @livewireScripts
</body>

</html>
