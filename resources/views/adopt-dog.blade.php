<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Wed Feb 10 2021 00:02:48 GMT+0000 (Coordinated Universal Time) -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
data-wf-domain="adoptable-template.webflow.io" data-wf-page="5f5b66b53e97c210ad00697c"
  data-wf-site="5f4f91ff23802a48574383ea" data-wf-status="1">

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


  <link href="{{ asset('desmadre/uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/css/adoptable-template.webflow.9c940ae01.css') }}"
    rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/" rel="preconnect" />
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous" />
  <script src="{{ asset('desmadre/ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js')}}" type="text/javascript"></script>
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
        <div id="w-node-da75a56e-7b3b-26b8-c721-a123e3e4a8ff-67d5300b">
          <div data-w-id="46b83a20-f5b0-8a53-a0a5-8f60c71a63c5" data-is-ix2-target="1" class="nav-logo"
            data-animation-type="lottie"
            data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a2a924384a2_Adoptable_Logo.json"
            data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2"
            data-duration="0" data-ix2-initial-state="0"></div>
        </div><a id="w-node-_4b84131c-0754-dfda-d19c-e6503af5a026-67d5300b" href="index.html"
          class="logo-link-block w-inline-block"></a>
        <nav role="navigation" id="w-node-bb0bf636-1622-2bac-85b3-47f867d53010-67d5300b" class="nav-menu w-nav-menu">
          <div class="nav-menu-wrapper">
            <div class="nav-menu-item-1"><a href="adopt-a-dog.html" aria-current="page"
                class="nav-link w--current">Adopt a Dog</a></div>
            <div class="nav-menu-item-2"><a href="adopt-a-cat.html" class="nav-link">Adopt a Cat</a></div>
            <div class="nav-menu-item-3"><a href="ways-to-help.html" class="nav-link">Ways to Help</a></div>
            <div class="nav-menu-item-4"><a href="blog.html" class="nav-link">Blog</a></div>
            <div class="nav-menu-item-5"><a href="contact-us.html" class="nav-link right-margin-1em">Contact Us</a>
            </div><a id="w-node-bb0bf636-1622-2bac-85b3-47f867d5301a-67d5300b" href="donate.html"
              class="navigation-button w-button">Donate Today</a>
          </div>
          <div class="short-fur-pattern hide-desktop"></div>
        </nav>
        <div id="w-node-d0391931-44cd-60ee-f7b8-796ab8e2c63b-67d5300b" data-w-id="d0391931-44cd-60ee-f7b8-796ab8e2c63b"
          class="search-icon-trigger"><img
            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a7f614384f1_Icons_Adoptable_Purple_Search.svg"
            alt="" class="icon" /></div>
        <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="modal" data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        id
        price {
          value
          unit
          decimalValue
          string
        }
        product {
          id
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_description_
          f_icon_ {
            id
            name
          }
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        sku {
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}
" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper"><a href="#"
            data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink cart-button w-inline-block"
            role="button" aria-haspopup="dialog" aria-label="Open cart">
            <div class="cart-icon"><img
                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f5b6dbc5cecaf2166d43ab1_Icons_Adoptable_Purple_Cart.svg"
                alt="" class="icon" />
              <div
                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                class="w-commerce-commercecartopenlinkcount cart-quantity-indicator">0</div>
            </div>
          </a>
          <div data-node-type="commerce-cart-container-wrapper" style="display:none"
            class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal cart-wrapper">
            <div data-node-type="commerce-cart-container" role="dialog"
              class="w-commerce-commercecartcontainer card cart">
              <div class="w-commerce-commercecartheader dotted-divider-container">
                <h4 class="w-commerce-commercecartheading cart-headline">Your Cart</h4><a href="#"
                  data-node-type="commerce-cart-close-link"
                  class="w-commerce-commercecartcloselink close-button w-inline-block" role="button"
                  aria-label="Close cart"><img
                    src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a9a174384f2_Icons_Adoptable_Purple_Small Close.svg"
                    loading="lazy" alt="" /></a>
              </div>
              <div class="w-commerce-commercecartformwrapper">
                <form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
                  <script type="text/x-wf-template"
                    id="wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d2">%3Cdiv%20class%3D%22w-commerce-commercecartitem%20cart-item%22%3E%3Cdiv%20class%3D%22cart-item-container%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aicon%2522%253A%257B%2522eq%2522%253A%252225fd369869bf2d7da070540d10a06072%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22icon%20medium%20w-condition-invisible%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F5f4f91ff23802a48574383ea%2F5f4f91ff23802acf23438506_Icons_Adoptable_Purple_Wool.svg%22%20loading%3D%22lazy%22%20alt%3D%22%22%2F%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aicon%2522%253A%257B%2522eq%2522%253A%2522312fa76f0835ac6830a15d82e2581a49%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22icon%20medium%20w-condition-invisible%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F5f4f91ff23802a48574383ea%2F5f4f91ff23802ad48d4384d1_Icons_Adoptable_Purple_Fish.svg%22%20loading%3D%22lazy%22%20alt%3D%22%22%2F%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aicon%2522%253A%257B%2522eq%2522%253A%252234284f02648b2d43e30ba9beee431910%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22icon%20medium%20w-condition-invisible%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F5f4f91ff23802a48574383ea%2F5f4f91ff23802a23984384e4_Icons_Adoptable_Purple_Mouse.svg%22%20loading%3D%22lazy%22%20alt%3D%22%22%2F%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aicon%2522%253A%257B%2522eq%2522%253A%252226ee73ba012def55f54230d3fe2f5229%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22icon%20medium%20w-condition-invisible%22%3E%3Cimg%20src%3D%22https%3A%2F%2Fuploads-ssl.webflow.com%2F5f4f91ff23802a48574383ea%2F5f4f91ff23802a7c234384bd_Icons_Adoptable_Purple_Bone.svg%22%20loading%3D%22lazy%22%20alt%3D%22%22%2F%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%20cart-item-wrapper%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_description_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d8%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d8%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22flex-vertical%20align-right%22%3E%3Cinput%20type%3D%22number%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%20cart-quantity%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3Ca%20href%3D%22%23%22%20role%3D%22%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22remove-text%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script>
                  <div class="w-commerce-commercecartlist cart-list"
                    data-wf-collection="database.commerceOrder.userItems"
                    data-wf-template-id="wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d2">
                    <div class="w-commerce-commercecartitem cart-item">
                      <div class="cart-item-container">
                        <div data-wf-bindings="%5B%5D"
                          data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aicon%22%3A%7B%22eq%22%3A%2225fd369869bf2d7da070540d10a06072%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                          class="icon medium w-condition-invisible"><img
                            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802acf23438506_Icons_Adoptable_Purple_Wool.svg"
                            loading="lazy" alt="" /></div>
                        <div data-wf-bindings="%5B%5D"
                          data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aicon%22%3A%7B%22eq%22%3A%22312fa76f0835ac6830a15d82e2581a49%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                          class="icon medium w-condition-invisible"><img
                            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ad48d4384d1_Icons_Adoptable_Purple_Fish.svg"
                            loading="lazy" alt="" /></div>
                        <div data-wf-bindings="%5B%5D"
                          data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aicon%22%3A%7B%22eq%22%3A%2234284f02648b2d43e30ba9beee431910%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                          class="icon medium w-condition-invisible"><img
                            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a23984384e4_Icons_Adoptable_Purple_Mouse.svg"
                            loading="lazy" alt="" /></div>
                        <div data-wf-bindings="%5B%5D"
                          data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aicon%22%3A%7B%22eq%22%3A%2226ee73ba012def55f54230d3fe2f5229%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                          class="icon medium w-condition-invisible"><img
                            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a7c234384bd_Icons_Adoptable_Purple_Bone.svg"
                            loading="lazy" alt="" /></div>
                        <div class="w-commerce-commercecartiteminfo cart-item-wrapper">
                          <div
                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_description_%22%7D%7D%5D"
                            class="w-commerce-commercecartproductname w-dyn-bind-empty"></div>
                          <div
                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D">
                            $ 0.00 USD</div>
                          <script type="text/x-wf-template"
                            id="wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d8">%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                          <ul
                            data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                            class="w-commerce-commercecartoptionlist"
                            data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                            data-wf-template-id="wf-template-78b344dd-1eb8-5b2a-8ca0-f7fe02e3b8d8">
                            <li><span
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"
                                class="w-dyn-bind-empty"></span><span>: </span><span
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"
                                class="w-dyn-bind-empty"></span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="flex-vertical align-right"><input type="number"
                          data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                          class="w-commerce-commercecartquantity cart-quantity" required="" pattern="^[0-9]+$"
                          inputMode="numeric" name="quantity" autoComplete="off"
                          data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1" /><a href="#"
                          role=""
                          data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                          class="remove-button w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id=""
                          aria-label="Remove item from cart">
                          <div class="remove-text">Remove</div>
                        </a></div>
                    </div>
                  </div>
                  <div class="w-commerce-commercecartfooter cart-footer">
                    <div aria-atomic="false" aria-live="" class="w-commerce-commercecartlineitem cart-line-item">
                      <div>Subtotal</div>
                      <div
                        data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                        class="w-commerce-commercecartordervalue"></div>
                    </div>
                    <div>
                      <div data-node-type="commerce-cart-quick-checkout-actions" style="display:none"><a
                          data-node-type="commerce-cart-apple-pay-button" role="button" aria-haspopup="dialog"
                          aria-label="Apple Pay"
                          style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                          class="w-commerce-commercecartapplepaybutton apple-pay" tabindex="0">
                          <div></div>
                        </a><a data-node-type="commerce-cart-quick-checkout-button" role="button" tabindex="0"
                          aria-haspopup="dialog" style="display:none"
                          class="w-commerce-commercecartquickcheckoutbutton"><svg
                            class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                            <defs>
                              <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                              <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                              <path fill="#4285F4"
                                d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                              </path>
                              <path fill="#34A853"
                                d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                              </path>
                              <g transform="translate(0 4)">
                                <mask id="google-mark-b" fill="#fff">
                                  <use xlink:href="#google-mark-a"></use>
                                </mask>
                                <path fill="#FBBC04"
                                  d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                  mask="url(#google-mark-b)"></path>
                              </g>
                              <mask id="google-mark-d" fill="#fff">
                                <use xlink:href="#google-mark-c"></use>
                              </mask>
                              <path fill="#EA4335"
                                d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                mask="url(#google-mark-d)"></path>
                            </g>
                          </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g fill="none" fill-rule="evenodd">
                              <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                              <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                              <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                              <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                            </g>
                          </svg>
                          <div>Pay with browser.</div>
                        </a></div><a href="checkout.html" value="Continue to Checkout"
                        data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton button"
                        data-loading-text="Hang Tight...">Continue to Checkout</a>
                    </div>
                  </div>
                </form>
                <div class="w-commerce-commercecartemptystate">
                  <div class="flex-vertical centered">
                    <div class="bottom-margin-1em">No items found.</div><a href="donate.html"
                      class="navigation-button cart w-button">Make a Donation</a>
                  </div>
                </div>
                <div aria-live="" style="display:none" data-node-type="commerce-cart-error"
                  class="w-commerce-commercecarterrorstate error-message">
                  <div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity."
                    data-w-cart-general-error="Something went wrong when adding this item to the cart."
                    data-w-cart-checkout-error="Checkout is disabled on this site."
                    data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                    data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                    Product is not available in this quantity.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          <h1><span class="underline-wavey brand-color-2">Loveable</span></h1>
        </div>
        <div
          style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
          class="heading-row-2">
          <h1>Dogs &amp; <span class="spark-right">Puppies</span></h1>
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
          <div data-w-id="828cfaa3-090e-e241-cc03-3ea597911d62" class="accordion-item-trigger">
            <div class="flex-horizontal justify-space-between">
              <h4 class="accordion-headline">I&#x27;m looking for a dog that...</h4>
              <div class="arrow-icon small"><img
                  src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a42154384b8_Icons_Adoptable_Purple_Arrow Down.svg"
                  width="75" alt="" /></div>
            </div>
          </div>
          <div style="height:0PX;opacity:0" class="accordion-item-content">
            <div class="collection-list-wrapper w-dyn-list">
              <div role="list" class="center-tags-horizontal w-dyn-items">
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/needs-a-home-based-owner.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">needs a home-based owner</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/can-be-left-alone.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">can be left alone</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-fine-alone-sometimes.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">Is fine alone sometimes</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-lead-trained.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is lead trained</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-energetic.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is energetic</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-easy-going.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is easy going</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/has-special-needs.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">has special needs</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-good-for-novice-owners.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is good for novice owners</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/can-learn-tricks.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">can learn tricks</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/doesnt-shed-too-much.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">doesn&#x27;t shed too much</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-cat-friendly.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is cat friendly</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-suited-to-apartment-life.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is suited to apartment life</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-good-with-other-dogs.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is good with other dogs</h6>
                  </a></div>
                <div id="w-node-_5f0b8d2a-a268-fcd9-2f16-fddfeedd3145-ad00697c" role="listitem"
                  class="tags-collection-item w-dyn-item"><a href="dog-tags/is-kid-friendly.html"
                    class="badge brand-color-3 w-inline-block">
                    <h6 class="centered-text">is kid friendly</h6>
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
        <div role="listitem" class="w-dyn-item"><a href="dog/missy.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)" class="content-padding profile-cards">
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
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
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/polly.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#e0c4c8" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Polly, and I&#x27;m a very good girl!</h3>
                  <div>
                    <div style="background-color:#e0c4c8" class="badge-outline white">
                      <h6>Adult</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#e0c4c8" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%205_Pic%201_brown-and-white-short-haired-pointer-dog-close-up_photo%20by%20wildlittlethingsphoto.jpg"
                  alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                  srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%25205_Pic%25201_brown-and-white-short-haired-pointer-dog-close-up_photo%2520by%2520wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a53f94384af_Dog%205_Pic%201_brown-and-white-short-haired-pointer-dog-close-up_photo%20by%20wildlittlethingsphoto.jpg 920w"
                  class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/freddie.html"
            class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#ecc3ee" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Freddie, will you &#x27;netflix and chill&#x27; with me?
                  </h3>
                  <div>
                    <div style="background-color:#ecc3ee" class="badge-outline white">
                      <h6>Senior</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#ecc3ee" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a573c4385cd_Adoptable_Dog%204_Pic%201_short-coated-black-and-white-border-terrier-cross-dog-sitting-on-stairs.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/sophie.html"
            class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#ff8d7b" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Sophie, I get excited meeting new people.</h3>
                  <div>
                    <div style="background-color:#ff8d7b" class="badge-outline white">
                      <h6>Puppy</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#ff8d7b" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a670243842b_Dog%206_Pic%201_white-and-black-dalmatian-puppy-on-red-chair_photo%20by%20wildlittlethingsphoto.jpg"
                  alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                  srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a670243842b_Dog%25206_Pic%25201_white-and-black-dalmatian-puppy-on-red-chair_photo%2520by%2520wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a670243842b_Dog%25206_Pic%25201_white-and-black-dalmatian-puppy-on-red-chair_photo%2520by%2520wildlittlethingsphoto-p-800.jpeg 800w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a670243842b_Dog%206_Pic%201_white-and-black-dalmatian-puppy-on-red-chair_photo%20by%20wildlittlethingsphoto.jpg 920w"
                  class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/monty.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#ffdbe0" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Monty, and I love chilling out at home.</h3>
                  <div>
                    <div style="background-color:#ffdbe0" class="badge-outline white">
                      <h6>Adult</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#ffdbe0" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a494b4383fe_Adoptable-Webflow-Theme_Dog%203_Pic%203_pit%20bull-st-bernard-cross-outside_photo%20by%20bukatovamedia.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/blitz.html" class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#fddbff" class="content-padding profile-cards">
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Blitz, and I&#x27;m one cheeky puppy.</h3>
                  <div>
                    <div style="background-color:#fddbff" class="badge-outline white">
                      <h6>Puppy</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#fddbff" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a17ae4383fb_Adoptable-Webflow-Theme_Dog%201_Pic%201_black-and-tan-miniature-pinscher_photo%20by%20victor%20cayke.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
            </div>
          </a></div>
        <div role="listitem" class="w-dyn-item"><a href="dog/blinkey.html"
            class="profile-card-link-block w-inline-block">
            <div class="flex-horizontal">
              <div class="profile-card-half">
                <div style="background-color:#ffccb0" class="content-padding profile-cards">
                  <div class="profile-icon"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a76ae43851d_Icons_Adoptable_White_Dog House.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a34b643853c_Icons_Adoptable_White_Ribbon.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a6955438557_Icons_Adoptable_White_Trophy.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a426743855b_Icons_Adoptable_White_Tree.svg"
                      width="38" alt="" /></div>
                  <div class="profile-icon w-condition-invisible"><img
                      src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ab0e5438511_Icons_Adoptable_White_Ball.svg"
                      width="38" alt="" /></div>
                  <h3 class="profile-descriptor">Hi I&#x27;m Blinkey, and I love to play fetch.</h3>
                  <div>
                    <div style="background-color:#ffccb0" class="badge-outline white">
                      <h6>Puppy</h6>
                    </div>
                  </div>
                  <div class="long-fur-pattern"></div>
                </div>
              </div>
              <div style="background-color:#ffccb0" class="profile-card-half"><img
                  src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a509d4383f8_Adoptable-Webflow-Theme_Dog%202_Pic%202_photo-of-black-and-white-border-collie_photo%20by%20Josh%20Hild.jpg"
                  alt="" class="pet-thumbnail-image" /></div>
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
              data-wf-page-id="5f5b66b53e97c210ad00697c" data-wf-element-id="e390ad44-2592-9581-74e8-99c94401d83e">
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
            href="adopt-a-dog.html" aria-current="page" class="nav-link footer w--current">Adopt a Dog</a><a
            href="adopt-a-cat.html" class="nav-link footer">Adopt a Cat</a><a href="ways-to-help.html"
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