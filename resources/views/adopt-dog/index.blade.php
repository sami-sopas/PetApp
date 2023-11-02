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
                    <h1>Dogs &amp; <span class="spark-right">Puppies</span></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Componente de livewire para mostrar de manera dinamica -->
    {{-- @livewire('dog-list') NO JALO ES TRISTE --}}

    <!-- Componente estatico con los filtros -->
    <x-filter-dog-cat/>

    <!-- Aqui se muestran los doggos -->
    <section class="section wide no-padding">
        <div class="w-dyn-list">
            <div role="list" class="pet-profiles-grid w-dyn-items">
                @foreach ($dogs as $dog)
                    <div role="listitem" class="w-dyn-item my-5 mx-5">
                        <a href="{{ 'dog/' . $dog['slug'] }}" class="profile-card-link-block w-inline-block">
                            <div class="flex-horizontal">
                                <div class="profile-card-half">
                                    <div style="background-color: {{ $dog['background_color'] }}"
                                        class="content-padding profile-cards">
                                        <div class="profile-icon">
                                            <img src="{{ $dog['icon_url'] }}" width="38" alt="" />
                                        </div>
                                        <h3 class="profile-descriptor">
                                            <a href="{{ route('pet.show',$dog) }}">{{ $dog->name }}</a>
                                        </h3>
                                        <div>
                                            <div style="background-color: {{ $dog['badge_color'] }}"
                                                class="badge-outline white">
                                                <h6>{{ $dog['age'] }}</h6>
                                            </div>
                                        </div>
                                        <div class="long-fur-pattern"></div>
                                    </div>
                                </div>
                                <div style="background-color: {{ $dog['background_color'] }}"
                                    class="profile-card-half">
                                    <img src="{{ Storage::url($dog->images->first()->url) }}" alt=""
                                        sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                                        class="pet-thumbnail-image" />
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- EL ejemplo -->
    <section class="section wide no-padding">
        <div class="w-dyn-list">
          <div role="list" class="pet-profiles-grid w-dyn-items">
            <div role="listitem" class="w-dyn-item"><a href="dog/missy.html" class="profile-card-link-block w-inline-block">
                <div class="flex-horizontal">
                  <div class="profile-card-half">
                    <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)" class="content-padding profile-cards">
                      <div class="profile-icon"><img
                          src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                          width="38" alt="" /></div>
                      <h3 class="profile-descriptor">Hi I&#x27;m Missy, the low flying cloud dog.</h3>
                      <div>
                        <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)" class="badge-outline white">
                          <h6>Puppy</h6>
                        </div>
                      </div>
                      <div class="long-fur-pattern"></div>
                    </div>
                  </div>
                  <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)" class="profile-card-half"><img
                      src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%207_Pic%201_white-samoyed_puppy_Photo%20by_wildlittlethingsphoto.jpg"
                      alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                      srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%25207_Pic%25201_white-samoyed_puppy_Photo%2520by_wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%207_Pic%201_white-samoyed_puppy_Photo%20by_wildlittlethingsphoto.jpg 920w"
                      class="pet-thumbnail-image" /></div>
                </div>
              </a>
            </div>
          </div>
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
