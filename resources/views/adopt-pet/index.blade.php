<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-domain="adoptable-template.webflow.io"
    data-wf-page="5f5b66b53e97c210ad00697c" data-wf-site="5f4f91ff23802a48574383ea" data-wf-status="1">

<head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="Adoptable is a playful website template designed to help animal shelters put their best paw forward"
        name="description" />
    <meta content="Adoptable - Webflow CMS Website Template" property="og:title" />
    <meta content="Adoptable is a playful website template designed to help animal shelters put their best paw forward"
        property="og:description" />
    <meta content="Adoptable - Webflow CMS Website Template" property="twitter:title" />
    <meta content="Adoptable is a playful website template designed to help animal shelters put their best paw forward"
        property="twitter:description" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link
        href="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/css/adoptable-template.webflow.9c940ae01.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="{{ asset('desmadre/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["DM Sans:regular,500,700", "Mulish:200,300,regular", "Mali:200,300,regular",
                    "Indie Flower:regular"
                ]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link
        href="../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f9455f0f9e08cdea3fe58_Adoptable_A_Favicon_32x32.png"
        rel="shortcut icon" type="image/x-icon" />
    <link
        href="../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f946c019ce790ae43aa69_Adoptable_A_Favicon_256x256.png"
        rel="apple-touch-icon" />

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <!-- Barra de navegacion -->
    <x-nav />

    <header class="header">
        <div class="container-1440 center">
            <div class="heading-container">
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
                    class="heading-row-1">
                    <h1><span class="underline-wavey brand-color-2">Loveable</span></h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
                    class="heading-row-2">
                    <h1>Mas <span class="spark-right">Mascotas</span></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Aqui se muestran los pets -->
    @livewire('pet-list')

    <x-footer />


    <script src="{{ asset('desmadre/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8d3c2.js') }}"></script>
    <script src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/js/webflow.d3e0328fb.js') }}">
    </script>

    @stack('modals')
    @livewireScripts

    <script>
        $(document).ready(function() {
            $(".w-webflow-badge").removeClass("w-webflow-badge").empty();
        });
    </script>
</body>

</html>
