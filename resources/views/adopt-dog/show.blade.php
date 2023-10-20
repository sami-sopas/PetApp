<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
data-wf-domain="adoptable-template.webflow.io" data-wf-page="5f5b66b53e97c283f800696f"
  data-wf-site="5f4f91ff23802a48574383ea" data-wf-status="1">
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
  <script src="{{ asset('desmadre/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript">
  <script
    type="text/javascript">WebFont.load({ google: { families: ["DM Sans:regular,500,700", "Mulish:200,300,regular", "Mali:200,300,regular", "Indie Flower:regular"] } });</script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link
    href="../../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f9455f0f9e08cdea3fe58_Adoptable_A_Favicon_32x32.png"
    rel="shortcut icon" type="image/x-icon" />
  <link
    href="../../uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f946c019ce790ae43aa69_Adoptable_A_Favicon_256x256.png"
    rel="apple-touch-icon" />
 
    <!-- Styles -->
    @livewireStyles
</head>

<body>
      <!-- Barra de navegacion -->
      <x-nav />

  <header data-w-id="2d6e12db-2b97-b54e-5e3d-0bc67710e698" class="header pet-profile">
    <div class="container-1440 center">
      <div class="heading-container bottom-margin-3em">
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
          class="heading-row-1">
          <h1 class="pet-page-heading margin-right-25em"> Ola, soy </h1>
          <h1 class="pet-page-heading">{{ $dog->name }}</h1>
          <h1 class="spark-right"><span>,</span></h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
          class="heading-row-2">
          <h1 class="pet-page-heading">my <span class="underline-wavey brand-color-2">favourite</span> thing to do is...
          </h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-8DEG) skew(0, 0);opacity:0"
          class="heading-row-3">
          <h1 class="pet-page-heading">play frisbee in the dog park </h1>
        </div>
      </div>
    </div>
    <div class="container-1440 full-width">
      <div class="pet-header-images-grid"><img
          style="-webkit-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform:translate3d(21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform-style:preserve-3d"
          id="w-node-fbff08ae-59a6-0c4f-3634-dd1fe7210177-f800696f"
          src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a98e14384c2_Dog%205_Pic%202_brown-and-white-short-haired-pointer-dog-walking_photo%20by%20wildlittlethingsphoto.jpg') }}"
          alt="" class="pet-image-mask-left" /><img width="639"
          style="-webkit-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0VW, 0, 0VW) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
          id="w-node-_58b43a32-193d-3b24-8444-9f1887663b2f-f800696f" alt=""
          src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%205_Pic%201_brown-and-white-short-haired-pointer-dog-close-up_photo%20by%20wildlittlethingsphoto.jpg') }}"
          sizes="(max-width: 767px) 33vw, (max-width: 991px) 30vw, 20vw"
          srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%25205_Pic%25201_brown-and-white-short-haired-pointer-dog-close-up_photo%2520by%2520wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%205_Pic%201_brown-and-white-short-haired-pointer-dog-close-up_photo%20by%20wildlittlethingsphoto.jpg 920w"
          class="pet-image-mask-center" /><img
          style="-webkit-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-moz-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);-ms-transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform:translate3d(-21VW, 3VW, 0VW) scale3d(1, 1, 1) rotateX(0DEG) rotateY(0DEG) rotateZ(0DEG) skew(0, 0);transform-style:preserve-3d"
          id="w-node-fe32e301-eee8-7fd5-a7aa-4fe955c2c8b0-f800696f"
          src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a3b254384d5_Dog%205_Pic%203_short-haired-pointer-dog-outside-walking_photo%20by%20wildlittlethingsphoto.jpg') }}"
          alt="" sizes="(max-width: 479px) 30vw, (max-width: 767px) 27vw, (max-width: 991px) 25vw, 18vw"
          srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a3b254384d5_Dog%25205_Pic%25203_short-haired-pointer-dog-outside-walking_photo%2520by%2520wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a3b254384d5_Dog%205_Pic%203_short-haired-pointer-dog-outside-walking_photo%20by%20wildlittlethingsphoto.jpg 920w"
          class="pet-image-mask-right" /></div>
    </div>
    <div style="background-color:#e0c4c8" class="color-block-grid-reverse">
      <div id="w-node-_14804969-b861-420b-78b0-14c26d143afd-f800696f" class="photo-credits pet-profile">
        <div class="small-text no-wrap">Photo credit:</div><a href="https://www.pexels.com/@wildlittlethingsphoto"
          target="_blank" class="small-text no-wrap margins">Helena Lopes</a>
      </div>
      <div class="long-fur-pattern bigger"></div>
    </div>
  </header>
  <div class="section no-bottom-padding no-top-padding">
    <div class="container-1440">
      <div class="_3-column-grid">
        <div id="w-node-_80975f05-33db-7c5f-b644-082c8cc9d65c-f800696f" class="inside-margin top-margin">
          <div class="content-padding">
            <div class="w-richtext">
              <p> {{ $dog->description }}</p>
             
            </div>
          </div>
        </div>
        <div id="w-node-_9b2b1757-c0ed-3999-8e70-7ee63a085a44-f800696f" class="card minus-bottom-radius no-top-padding">
          <div class="dotted-divider-container justify-left">
            <h5 class="stats-heading">{{ $dog->name }}</h5>
            <h5 class="stats-heading">&#x27;s stats</h5>
          </div>
          <div class="stats-row-wrapper">
            <h5 class="inline margin-right-1em">Genero:</h5>
            <div class="inline">{{ $dog->sex}}</div>
          </div>
          <div class="stats-row-wrapper">
            <h5 class="inline margin-right-1em">Edad:</h5>
            <div class="inline">{{ $dog->age }}</div>
          </div>
          <div class="stats-row-wrapper">
            <h5 class="inline margin-right-1em">Color:</h5>
            <div class="inline">{{ $dog->color->name }}</div>
          </div>
          <div class="stats-row-wrapper">
            <h5 class="inline margin-right-1em">Tamaño:</h5>
            <div class="inline">{{ $dog->size }}</div>
          </div>
          <div class="stats-row-wrapper">
            <h5 class="inline margin-right-1em">Ubicacion:</h5>
            <div class="inline">{{ $dog->user->state->name }}</div>
          </div>

           <!-- AUN PENDIENTE SI METEREMOS ESTO
          <div class="dotted-divider-container justify-left">
            <h5 class="stats-heading">health info</h5>
          </div>
          <div class="_3-column-grid health-stats margin-top-1em">
            <div id="w-node-_1490c1fa-2ee2-8bb5-eb7f-b59311d0a209-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1f95438529_Icons_Adoptable_White_Health Check.svg"
                  width="50" alt="" />
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div>
              </div>
              <div class="health-icon-text">Health<br />Check</div>
            </div>
            <div id="w-node-_10c11859-bc13-6f02-0b0b-8c70408dc9f3-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2">
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a8abb438536_Icons_Adoptable_White_Microchip.svg"
                  width="50" alt="" />
              </div>
              <div class="health-icon-text">Microchip</div>
            </div>
            <div id="w-node-_272b9fb3-4c11-3974-a1b0-a9acce5d29fe-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a866a43855e_Icons_Adoptable_White_Wormed.svg"
                  width="50" alt="" />
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div>
              </div>
              <div class="health-icon-text">Wormed</div>
            </div>
            <div id="w-node-_5b1d50de-4eac-4b6d-5c15-df8c72d6313f-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a785c43852a_Icons_Adoptable_White_Heartworm Treated.svg"
                  width="50" alt="" />
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div>
              </div>
              <div class="health-icon-text">Heartworm<br />Treated</div>
            </div>
            <div id="w-node-_66d33d47-6376-3342-6dec-fc7af6bb74a0-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a866743854c_Icons_Adoptable_White_Vaccinated.svg"
                  width="50" alt="" />
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div>
              </div>
              <div class="health-icon-text">Vaccinated</div>
            </div>
            <div id="w-node-_04f13af1-86c7-0a58-90c1-23cdcf85a84d-f800696f" class="flex-vertical centered">
              <div class="circle-icon brand-color-2"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a4c9b43851b_Icons_Adoptable_White_De-sexed Female.svg"
                  width="50" alt="" /><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a5dbb43851c_Icons_Adoptable_White_De-sexed Male.svg"
                  width="50" alt="" class="w-condition-invisible" />
                <div class="tick-icon brand-color-4"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1ae3438556_Icons_Adoptable_White_Yes Tick.svg"
                    loading="lazy" alt="" /></div>
              </div>
              <div class="health-icon-text">De-sexed</div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section wide pet-page">
    <div class="container-1440">
      <div class="_3-column-grid no-gap">
        <div id="w-node-d69c77ea-6a6d-0c4a-040c-1b76e9a18c96-f800696f" class="content-padding pet-tags-mobile">
          <div>
            <h4>Si estas buscando un perro que...</h4>
            <div class="collection-list-wrapper w-dyn-list">
              <div role="list" class="tags-collection-list w-dyn-items">
                @foreach ($dog->tags as $tag)
                <div role="listitem" class="tags-collection-item w-dyn-item"><a href="../dog-tags/can-learn-tricks.html"
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
                  <h3 class="handwriting margin-right-space">Get in touch to meet </h3>
                  <h3 class="handwriting margin-right-space">{{ $dog->name }}</h3>
                </div><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802aa08a438432_Adoptable_Arrow Style 1_orange.svg"
                  width="115" alt="" class="rotate-arrow bottom-margin-1em" />
              </div>
            </div>
          </div>
        </div>
        <div id="w-node-d1f4d90e-5437-16c4-bfe3-e44140224896-f800696f" class="card pet-profile-details">
          <div class="dotted-row-container">
            <h5 class="inline margin-right-1em">rescue org. number:</h5>
            <div class="inline">9876543210</div>
          </div>
          <div class="dotted-row-container">
            <h5 class="inline margin-right-1em">pet rescue id:</h5>
            <div class="inline">123456789</div>
          </div>
          <div class="dotted-row-container no-dots">
            <h5 class="inline margin-right-1em">adoption fee:</h5>
            <div class="flex-horizontal">
              <div class="inline">$</div>
              <div class="inline">300.0</div>
            </div>
          </div><a href="#" class="button brand-color-1 full-width w-inline-block">
            <div class="flex-horizontal centered">
              <div class="inline margin-right-25em">Email to meet me</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Similares --}}

  <section class="section wide no-padding">
        <h3 class="text-center font-semibold">
          Tambien podra interesarte...
        </h3>
        <div class="w-dyn-list">
            <div role="list" class="pet-profiles-grid w-dyn-items">
                @foreach ($similars as $dog)
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
                                            <a href="{{ route('adopt-dog.show',$dog) }}">{{ $dog->name }}</a>
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
                                    <img src="{{ Storage::url($dog->image->url) }}" alt=""
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
    
  <x-footer/>

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