<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-domain="adoptable-template.webflow.io"
    data-wf-page="5f5b66b53e97c283f800696f" data-wf-site="5f4f91ff23802a48574383ea" data-wf-status="1">
<!-- Mirrored from adoptable-template.webflow.io/dog/polly by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 01:42:42 GMT -->

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


    <link
        href="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/css/adoptable-template.webflow.9c940ae01.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
    <script src="{{ asset('desmadre/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
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

    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    @livewireStyles
    
</head>

<body>
    <!-- Barra de navegacion -->
    <x-nav/>

    {{-- Alerta al crear post --}}
    @if(session('info'))
    <div id="alert-1" class="container w-screen mx-auto flex items-center p-4 mb-4 rounded-lg bg-pink-200 hover:bg-pink-300 " role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-2xl font-bold w-full">
            {{ session('info') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-pink-200 hover:bg-pink-300  rounded-lg focus:ring-2 focus:ring-pink-300 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    @endif

    {{-- Titulo --}}
    <header data-w-id="2d6e12db-2b97-b54e-5e3d-0bc67710e698" class="header pet-profile">
        <div class="container-1440 center">
            <div class="heading-container bottom-margin-3em">
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
                    class="heading-row-1">
                    <h1 class="pet-page-heading margin-right-25em"> Hola, soy </h1>
                    <h1 class="pet-page-heading">{{ $pet->name }}</h1>
                    <h1 class="spark-right"><span>,</span></h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
                    class="heading-row-2">
                    <h1 class="pet-page-heading">y <span class="underline-wavey brand-color-2">soy</span> muy...
                    </h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);opacity:0"
                    class="heading-row-3">
                    <h1 class="pet-page-heading">{{ $pet->tags->first()->name }} </h1>
                </div>
            </div>
        </div>
        <div class="container-1440 full-width">
            <div class="pet-header-images-grid">

                <img style="-webkit-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform-style:preserve-3d"
                    id="w-node-fbff08ae-59a6-0c4f-3634-dd1fe7210177-f800696f"
                    src="{{ Storage::url($pet->images->first()->url) }}" alt="" class="pet-image-mask-left" />
                <img width="639"
                    style="-webkit-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
                    id="w-node-_58b43a32-193d-3b24-8444-9f1887663b2f-f800696f" alt=""
                    src="{{ Storage::url($pet->images->skip(1)->first()->url) }}"
                    sizes="(max-width: 767px) 33vw, (max-width: 991px) 30vw, 20vw" class="pet-image-mask-center" />
                <img style="-webkit-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform-style:preserve-3d"
                    id="w-node-fe32e301-eee8-7fd5-a7aa-4fe955c2c8b0-f800696f"
                    src="{{ Storage::url($pet->images->skip(2)->first()->url) }}" alt=""
                    sizes="(max-width: 479px) 30vw, (max-width: 767px) 27vw, (max-width: 991px) 25vw, 18vw"
                    class="pet-image-mask-right" />
            </div>
        </div>
        <div style="background-color:#e0c4c8" class="color-block-grid-reverse">
            <div id="w-node-_14804969-b861-420b-78b0-14c26d143afd-f800696f" class="photo-credits pet-profile">
                <div class="small-text no-wrap"></div><a
                    class="small-text no-wrap margins"></a>
            </div>
            <div class="long-fur-pattern bigger"></div>
        </div>
    </header>

    {{-- Informacion de la mascota --}}
    <div class="section no-bottom-padding no-top-padding">
        <div class="container-1440">
            <div class="_3-column-grid">
                <div id="w-node-_80975f05-33db-7c5f-b644-082c8cc9d65c-f800696f" class="inside-margin top-margin">
                    <div class="content-padding">
                        <div class="w-richtext">
                            <p> {{ $pet->description }}</p>

                        </div>
                    </div>
                </div>
                <div id="w-node-_9b2b1757-c0ed-3999-8e70-7ee63a085a44-f800696f"
                    class="card minus-bottom-radius no-top-padding">
                    <div class="dotted-divider-container justify-left">
                        <h5 class="stats-heading">Información sobre</h5>
                        <h5 class="ml-3 stats-heading">{{ $pet->name }}</h5>
                    </div>
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Categoria:</h5>
                        <div class="inline">{{ $pet->category->name }}</div>
                    </div>
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Genero:</h5>
                        <div class="inline">{{ $pet->sex }}</div>
                    </div>
                    @if($pet->age)
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Edad:</h5>
                        <div class="inline">{{ $pet->age }}</div>
                    </div>
                    @endif
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Color:</h5>
                        <div class="inline">{{ $pet->color->name }}</div>
                    </div>
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Tamaño:</h5>
                        <div class="inline">{{ $pet->size }}</div>
                    </div>
                    <div class="stats-row-wrapper">
                        <h5 class="inline margin-right-1em">Ubicacion:</h5>
                        <div class="inline">{{ $pet->user->state->name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Tags y contacto con dueño --}}
    <div class="section wide pet-page">
        <div class="container-1440">
            <div class="_3-column-grid no-gap">
                <div id="w-node-d69c77ea-6a6d-0c4a-040c-1b76e9a18c96-f800696f"
                    class="content-padding pet-tags-mobile">
                    <div>
                        <h4>Si estas buscando una mascota que...</h4>
                        <div class="collection-list-wrapper w-dyn-list">
                            <div role="list" class="tags-collection-list w-dyn-items">
                                @foreach ($pet->tags as $tag)
                                    <div role="listitem" class="tags-collection-item w-dyn-item"><a
                                            href="../dog-tags/can-learn-tricks.html"
                                            class="badge brand-color-3 w-inline-block">

                                            <h6>{{ $tag->name }}</h6>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div>
                        <div id="w-node-_4c4ba776-7c2c-f668-c073-e5bf39bedf5c-f800696f">
                            <div class="flex-horizontal get-in-touch-note">
                                <div class="flex-horizontal centered">
                                    @auth    
                                    <h3 class="handwriting margin-right-space">Get in touch to meet </h3>
                                    @endauth
                                    @guest
                                    <h3 class="handwriting margin-right-space">Inicia sesion para contactar al dueño de</h3>
                                    @endguest
                                    <h3 class="handwriting margin-right-space">{{ $pet->name }}</h3>
                                </div><img
                                    class="hidden md:block"
                                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802aa08a438432_Adoptable_Arrow Style 1_orange.svg"
                                    width="115" alt="" class="rotate-arrow bottom-margin-1em" />
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-d1f4d90e-5437-16c4-bfe3-e44140224896-f800696f" class="card pet-profile-details">
                    <div class="dotted-row-container">
                        <h5 class="inline margin-right-1em">ID de la Mascota</h5>
                        <div class="inline">{{ $pet->id }}</div>
                    </div>
                    <div class="dotted-row-container no-dots">
                        <h5 class="inline margin-right-1em">Nombre del dueño</h5>
                        <div class="flex-horizontal">
                            <div class="inline">{{ $pet->user->name }}</div>
                        </div>
                    </div>
                    @auth    
                    <a href="mailto:{{ $pet->user->email }}" class="button bg-orange-200 full-width w-inline-block hover:bg-orange-300">
                        <div class="flex-horizontal centered">
                            <div class="inline margin-right-25em">Email to meet me</div>
                        </div>
                    </a>
                    <a href="tel:{{ $pet->user->phone }}" class="button full-width w-inline-block bg-pink-200 hover:bg-pink-300">
                        <div class="flex-horizontal centered">
                            <div class="inline margin-right-25em">Call me</div>
                        </div>
                    </a>
                    @endauth

                    @guest
                    <div class="mt-10">
                        <a href="{{ route('login') }}" class="button bg-orange-200 full-width w-inline-block hover:bg-orange-300">
                            <div class="flex-horizontal centered">
                                <div class="inline margin-right-25em">Iniciar sesión</div>
                            </div>
                        </a>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    {{-- Mascotas Similares --}}
    <section class="section wide no-padding">
        <h3 class="text-center font-semibold">
            Tambien podra interesarte...
        </h3>
        <div class="grid grid-cols-1 ml-12 sm:grid-cols-2 sm:mr-20 md:grid-cols-3 gap-4 mt-5">
            @foreach ($similars as $pet)
                <div style="background-color: {{ $pet->bg_color }}"
                  class="relative m-5 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 shadow-md">
                  <div class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                    <img class="object-cover w-full h-full" src="{{ Storage::url($pet->images->first()->url) }}"
                      alt="{{ $pet->name }}-img" />
                  </div>
                  <div class="mt-4 px-5 pb-5">
                    <div class="flex justify-center items-center flex-col">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900 text-center">{{ $pet->name }}</h5>
                        </a>
                        <i class="{{$pet->icon}} text-white text-2xl"></i>
                    </div>
                    <div class="mt-2 mb-5 flex items-center justify-center">
                        <p>
                            <span class="text-3xl font-bold text-slate-900 text-center">{{ $pet->category->name }}</span>
                        </p>
                    </div>
                    <a href="{{ route('pet.show', $pet) }}"
                        class="flex items-center justify-center border-4 font-bold border-white rounded-lg py-2 text-center text-lg focus:outline-none focus:ring-4 focus:ring-blue-300 hover:border-dashed transition-all duration-500 ease-in-out">
                        Ver mascota
                    </a>
                    </div>
                    </div>
            @endforeach
        </div>
    </section>

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
