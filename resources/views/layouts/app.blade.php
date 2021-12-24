<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CoinLend.mn</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
        <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style>
            .form{
                padding: 15px;
            }
            .admin_img{
                height: 50px;
            }
            .admin_sub_img{
                height:45px;
            }
        
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

       

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @include('footer')
    </body>
</html>
