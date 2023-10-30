<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-wf-domain="adoptable-template.webflow.io" 
    data-wf-page="5f5b66b53e97c2c39000696c"
    data-wf-site="5f4f91ff23802a48574383ea" 
    data-wf-status="1">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/css/adoptable-template.webflow.9c940ae01.css')}}">
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/" rel="preconnect" />
        <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
        <script src="{{ asset('desmadre/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js')}}" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({ google: { families: ["DM Sans:regular,500,700", "Mulish:200,300,regular", "Mali:200,300,regular", "Indie Flower:regular"] } });</script>
        <script type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
        

        <!-- Icons -->
        {{-- <link href="../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f9455f0f9e08cdea3fe58_Adoptable_A_Favicon_32x32.png" rel="shortcut icon" type="image/x-icon" />
        <link href="../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f946c019ce790ae43aa69_Adoptable_A_Favicon_256x256.png" rel="apple-touch-icon" /> --}}
        
        @livewireStyles
    </head>
    <body>
        <!-- Navbar -->
        <x-nav/>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Footer -->
        <x-footer/>

        <!-- Scripts -->
        <script src="{{ asset('desmadre/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8d3c2.js') }}"></script>
        <script src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/js/webflow.d3e0328fb.js')}}"></script>
   
          @stack('modals')
          @livewireScripts
      
        <!-- Quitar badge -->
        <script>
            $(document).ready(function() {$(".w-webflow-badge").removeClass("w-webflow-badge").empty(); });
        </script>
    </body>
</html>

{{-- ANTERIOR APP
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-100">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navbar')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html> --}}
