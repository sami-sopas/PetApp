<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Wed Feb 10 2021 00:02:48 GMT+0000 (Coordinated Universal Time) -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
data-wf-domain="adoptable-template.webflow.io" data-wf-page="5f5b66b53e97c222eb00697b"
  data-wf-site="5f4f91ff23802a48574383ea" data-wf-status="1">
<!-- Mirrored from adoptable-template.webflow.io/adopt-a-cat by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 01:42:33 GMT -->

<head>
    <meta charset="utf-8"/>
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


  <link href="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/css/adoptable-template.webflow.9c940ae01.css')}}"
    rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/" rel="preconnect" />
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
  <script src="{{ asset('/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
  <script
    type="text/javascript">WebFont.load({ google: { families: ["DM Sans:regular,500,700", "Mulish:200,300,regular", "Mali:200,300,regular", "Indie Flower:regular"] } });</script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
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
  <header id="nav" class="sticky-nav">
    <div data-animation="over-right" class="navbar w-nav" data-easing2="ease-in-out" data-easing="ease-in-out"
      data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
      <div class="nav-grid-container">

        <!-- Barra de navegacion -->
        <x-nav/>

        <div id="w-node-bb0bf636-1622-2bac-85b3-47f867d53020-67d5300b" data-w-id="bb0bf636-1622-2bac-85b3-47f867d53020"
          class="menu-button w-nav-button">
          <div class="menu-icon-wrapper margin-right"><img
              src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a8f764384d0_Icons_Adoptable_Purple_Hamburger.svg"
              alt="" class="icon" /></div>
        </div>
      </div>
    </div>
  </header>
  <header class="header">
    <div class="container-1440 center">
      <div class="heading-container">
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
          class="heading-row-1">
          <h1>Cool <span class="spark-right brand-color-4">Cats</span></h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
          class="heading-row-2">
          <h1>&amp; <span class="underline-wavey brand-color-5">Kittens</span></h1>
        </div>
      </div>
    </div>
  </header>
  <div
    style="-webkit-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
    class="section">
    <div class="container-1440">
      <div class="accordion-wrapper">
        <div class="accordion-item">
          <div data-w-id="75aa9fd6-b3b8-3b8e-1a08-ba0fe29c31d2" class="accordion-item-trigger">
            <div class="flex-horizontal justify-space-between">
              <h4 class="accordion-headline">I&#x27;m looking for a cat that...</h4>
              <div class="arrow-icon small"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a42154384b8_Icons_Adoptable_Purple_Arrow Down.svg"
                  width="75" alt="" /></div>
            </div>
          </div>
          <div style="height:0PX;opacity:0" class="accordion-item-content">
            <div class="collection-list-wrapper w-dyn-list">
              <div role="list" class="center-tags-horizontal w-dyn-items">
                <div role="listitem" class="tags-collection-item w-dyn-item"><a href="cat-tags/is-kid-friendly.html"
                    class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">is kid friendly</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a
                    href="cat-tags/is-good-with-other-cats.html" class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">is good with other cats</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a href="cat-tags/is-dog-friendly.html"
                    class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">is dog friendly</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a
                    href="cat-tags/doesnt-shed-too-much.html" class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">doesn&#x27;t shed too much</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a href="cat-tags/has-special-needs.html"
                    class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">has special needs</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a href="cat-tags/is-easy-going.html"
                    class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">is easy going</h6>
                  </a></div>
                <div role="listitem" class="tags-collection-item w-dyn-item"><a
                    href="cat-tags/is-energetic-and-active.html" class="badge brand-color-6 w-inline-block">
                    <h6 class="centered-text">is energetic and active</h6>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="section wide no-padding">
    <div class="w-dyn-list">
      <div role="list" class="pet-profiles-grid w-dyn-items">
        <div role="listitem" class="w-dyn-item"><a href="cat/fido.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:hsla(165, 61.60%, 67.91%, 1.00)" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Fido, and I think I might be a dog...</h3>
                  <div>
                    <div style="background-color:hsla(165, 61.60%, 67.91%, 1.00)" class="badge-outline white">
                      <h6>Adult</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a29c84385c7_Adoptable_Cat%205_Pic%201_photo-of-british-shorthair-cat-sitting-on-grass-field.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/marcia.html"
            class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#a2def6" class="content-padding profile-cards">
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Marcia, and I like keeping to myself.</h3>
                  <div>
                    <div style="background-color:#a2def6" class="badge-outline white">
                      <h6>Adult</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a116e4385ca_Adoptable_Cat%203_Pic%203_white-and-brown-van-cat-on-wooden-table-with-teacup.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/milo.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#e6f4a2" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Milo, and I&#x27;m looking for a very special owner.</h3>
                  <div>
                    <div style="background-color:#e6f4a2" class="badge-outline white">
                      <h6>Kitten</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802acbf5438599_Cat%202_Pic%201_grey-american-shorthair-kitten-on-wooden-floor-photo%20by_d-ng-nhan.jpg"
                  alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                  srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802acbf5438599_Cat%25202_Pic%25201_grey-american-shorthair-kitten-on-wooden-floor-photo%2520by_d-ng-nhan-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802acbf5438599_Cat%202_Pic%201_grey-american-shorthair-kitten-on-wooden-floor-photo%20by_d-ng-nhan.jpg 920w"
                  class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/biscuit.html"
            class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#80e6a2" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Biscuit, and I&#x27;m one lazy cat.</h3>
                  <div>
                    <div style="background-color:#80e6a2" class="badge-outline white">
                      <h6>Adult</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a6f45438598_Adoptable-Webflow-Theme_Cat%201_Pic%204_Green%20eyed%20white%20and%20black%20persian%20cat_Photo%20by%20ewe-my-life.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/kimba.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#c9f2fd" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Kimba, and I love chasing mice.</h3>
                  <div>
                    <div style="background-color:#c9f2fd" class="badge-outline white">
                      <h6>Kitten</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802ac10643859c_Adoptable-Webflow-Theme_Cat%204_Pic%201_photo-of-tabby-cat-near-plant_Photo%20by%20flowerstofox.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/mitsy.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#f5ffc7" class="content-padding profile-cards">
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Mitsy, and loud noises frighten me.</h3>
                  <div>
                    <div style="background-color:#f5ffc7" class="badge-outline white">
                      <h6>Kitten</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a736543856d_Cat%206_Pic%202_gray-and-white-tabby-kitten-near-plant_Photo%20by%20Tranmautritam.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="cat/bowie.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#9ffebe" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a058643840f_Adoptable Template Icons_Fish.svg"
                      width="38" alt="Adoptable fish icon white" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a3bd8438537_Icons_Adoptable_White_Mouse.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6f0f43854f_Icons_Adoptable_White_Wool.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a0feb438517_Icons_Adoptable_White_Climbing Toy.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Bowie, hide and seek champion 2020!</h3>
                  <div>
                    <div style="background-color:#9ffebe" class="badge-outline white">
                      <h6>Kitten</h6>
                    </div>
                  </div>
                  <div class="short-fur-pattern"></div>
                </div>
              </div>
              <div class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802abab8438521_Adoptable-Webflow-Theme_Cat%207_Pic%201_close-up-of-orange-tabby-cat_Photo%20by%20Samer%20Daboul.jpg"
                  alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                  srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802abab8438521_Adoptable-Webflow-Theme_Cat%25207_Pic%25201_close-up-of-orange-tabby-cat_Photo%2520by%2520Samer%2520Daboul-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802abab8438521_Adoptable-Webflow-Theme_Cat%207_Pic%201_close-up-of-orange-tabby-cat_Photo%20by%20Samer%20Daboul.jpg 920w"
                  class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
      </div>
    </div>
  </section>
  <footer data-w-id="e390ad44-2592-9581-74e8-99c94401d838" class="footer">
    <div class="container-1440">
      <div class="footer-grid"><a id="w-node-_675502e3-7f63-fc61-f6e8-a96a776d83e3-4401d838" href="index.html"
          class="logo-link-block footer w-inline-block"></a>
        <div id="w-node-e390ad44-2592-9581-74e8-99c94401d83a-4401d838" class="footer-links-container">
          <div class="adoptable-a-lottie">
            <div data-is-ix2-target="1" class="lottie-a" data-w-id="d635e1a8-d698-1958-c773-2721a0b23d75"
              data-animation-type="lottie"
              data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a5c7b43849e_Adoptable_A%20Mark.json"
              data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1"
              data-duration="0"></div>
          </div>
        </div>
        <div id="w-node-e390ad44-2592-9581-74e8-99c94401d83b-4401d838" class="card newsletter-offset">
          <h3>Sign up to our newsletter*</h3>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-field-container"
              data-wf-page-id="5f5b66b53e97c222eb00697b" data-wf-element-id="e390ad44-2592-9581-74e8-99c94401d83e">
              <div class="form-field-wrapper"><label for="Name" class="field-label">Name</label><input type="text"
                  class="text-field w-input" maxlength="256" name="Name" data-name="Name" placeholder="" id="Name"
                  required="" /></div>
              <div class="form-field-wrapper"><label for="Email-3" class="field-label">Email Address</label><input
                  type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email" placeholder=""
                  id="Email-3" required="" /></div><input type="submit" value="sign me up!" data-wait="Please wait..."
                class="button top-margin w-button" />
            </form>
            <div class="success-message w-form-done">
              <div>Thank you! <br />Your submission has been received!</div>
            </div>
            <div class="error-message w-form-fail">
              <div>Oops! <br />Something went wrong while submitting the form.</div>
            </div>
          </div>
          <div class="small-text">*for adorable AND adoptable cat and dog spam once a week.</div>
        </div>
        <div id="w-node-e390ad44-2592-9581-74e8-99c94401d84c-4401d838" class="footer-links-container"><a
            href="adopt-a-dog.html" class="nav-link footer">Adopt a Dog</a><a href="adopt-a-cat.html"
            aria-current="page" class="nav-link footer w--current">Adopt a Cat</a><a href="ways-to-help.html"
            class="nav-link footer">Ways to Help</a></div>
        <div id="w-node-e390ad44-2592-9581-74e8-99c94401d853-4401d838" class="footer-links-container"><a
            href="blog.html" class="nav-link footer">Blog</a><a href="contact-us.html" class="nav-link footer">Contact
            Us</a>
          <div class="flex-horizontal socials-padding"><a href="https://www.facebook.com/webflow/" target="_blank"
              class="social-links w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1b17438524_Icons_Adoptable_White_Facebook.svg"
                alt="" /></a><a href="https://twitter.com/webflow" target="_blank"
              class="social-links w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a37dd43854e_Icons_Adoptable_White_Twitter.svg"
                alt="" /></a><a href="https://www.instagram.com/webflow/" target="_blank"
              class="social-links w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a486f43852b_Icons_Adoptable_White_Instagram.svg"
                alt="" /></a><a href="https://www.tiktok.com/tag/webflow" target="_blank"
              class="social-links w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a1f49438555_Icons_Adoptable_White_Tiktok.svg"
                alt="" /></a></div>
        </div>
      </div>
    </div>
    <div class="short-fur-pattern bigger lighter"></div>
  </footer>
  <div class="template-footer">
    <div class="container-1440 full-width">
      <div class="footer-grid">
        <div id="w-node-_31f2d73d-efea-3de6-87d8-c6dfbca6b7c5-bca6b7c3">
          <div class="small-text reversed">Designed by Hollagraphica</div>
        </div>
        <div id="w-node-_31f2d73d-efea-3de6-87d8-c6dfbca6b7c8-bca6b7c3"><a href="template/style-guide.html"
            class="small-footer-link reverse">Style Guide</a><a href="template/licences.html"
            class="small-footer-link reverse">Licences</a><a href="template/changelog.html"
            class="small-footer-link reverse">Changelog</a></div>
        <div id="w-node-_31f2d73d-efea-3de6-87d8-c6dfbca6b7cf-bca6b7c3">
          <div class="small-text reversed">Powered by <a href="https://webflow.com/" target="_blank"
              class="small-text reversed">Webflow</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="search-modal">
    <div class="search-card">
      <form action="https://adoptable-template.webflow.io/search" class="search-form w-form"><input type="search"
          class="search-input large w-input" maxlength="256" name="query" placeholder="Search Adoptable" id="search"
          required="" /><input type="submit" value="Search" class="button large search-button w-button" /></form>
    </div>
    <div data-w-id="c2807aa4-d9bf-2d8f-f78c-7b6aed1a8c42" class="search-modal-trigger"></div>
  </div>

  <script src="{{ asset('desmadre/d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8d3c2.js') }}"></script>
  <script src="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/js/webflow.d3e0328fb.js')}}"></script>
    
    @stack('modals')
    @livewireScripts

    <script>
        $(document).ready(function() {$(".w-webflow-badge").removeClass("w-webflow-badge").empty(); });
    </script>
</body>
</html>