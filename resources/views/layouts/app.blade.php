<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="/css/client-header.styles.css" rel="stylesheet">
        <link href="/css/client.styles.css" rel="stylesheet">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- iconify -->
        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
        <!-- Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
        </script>
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Font awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
        </script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="ch-wrapper">
            <a href="{{ url('/client')}}" class="ch-amara-capital-logo">
                <img src="/images/amara-capital-images/Amara Capital Logo_V1-06.jpg" alt="Amara Capital">
            </a>
            <div class="ch-client-name-container " id="client-name">
                <h6 class="ch-client-name">Hi, {{ Auth::user()->name }}</h6>
                <div class="ch-client-profile-image-and-barge-container">
                    <div class="ch-client-profile-image"><i class="fas fa-user fa-2x"></i></div>
                </div> 
            </div>
            
        </div>
            
        

        <div style="background-image: linear-gradient(#142F65, #000);">
            <div class="clp-page-name-container" align=right style="display:block;margin-left: 20px;padding-right:20px;padding-top:20px;text-decoration:underline;">
                <a href="{{ url('/client') }}" class="clp-name-container" style="color: #fff; margin-top: 20px;">
                    <h3>Return to dashboard</h3>
                </a>
            </div>
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}
           

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
