<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tecnofit</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link href="{{ asset('assets/css/app.css') }}">
        
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.tecnofit.com.br/wp-content/uploads/fbrfg/favicon.ico?v=3">
        
        @yield('styles')
        
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <style>
            body { font-family: 'Inter', sans-serif !important; }
            @supports (font-variation-settings: normal) { body { font-family: 'Inter var', sans-serif !important; } }
            pre { background-color: #eee; width: 100%; }
        </style>

        @livewireStyles

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">    

    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                @livewire('painel.geral')
            </div>
        </section>

        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        @livewireScripts

        <script>
            window.addEventListener('toastr:error', event => {
                toastr.error(event.detail.message);
            });

            window.addEventListener('toastr:success', event => {
                toastr.success(event.detail.message);
            });
        </script>

        @yield('scripts')
        @stack('scripts_dash')

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    </body>
</html>


