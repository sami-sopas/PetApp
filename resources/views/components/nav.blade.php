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
            </div><a id="w-node-_4b84131c-0754-dfda-d19c-e6503af5a026-67d5300b" href="/" aria-current="page"
                class="logo-link-block w-inline-block w--current"></a>
            <nav role="navigation" id="w-node-bb0bf636-1622-2bac-85b3-47f867d53010-67d5300b"
                class="nav-menu w-nav-menu">
                <div class="nav-menu-wrapper">
                    <div class="nav-menu-item-1">
                        <a href="{{ route('adopt-dog.index') }}" class="nav-link">
                            Adopt a Dog
                        </a>
                    </div>
                    <div class="nav-menu-item-2">
                        <a href="{{ route('adopt-cat.index') }}" class="nav-link">
                            Adopt a Cat
                        </a>
                    </div>
                    <div class="nav-menu-item-3">
                        <a href="{{ route('adopt-pet.index')}}" class="nav-link">
                            +Kotas
                        </a>
                    </div>
                    <div class="nav-menu-item-4">
                        <a href="{{ route('adopt-dog.create') }}" class="nav-link">
                            Publicacion dog
                        </a>
                    </div>
                    <div class="nav-menu-item-5">
                        <a href="contact-us.html" class="nav-link right-margin-1em">
                        Contact Us</a>
                    </div>

                    <div>

                        @guest  
                        <a 
                            id="w-node-bb0bf636-1622-2bac-85b3-47f867d5301a-67d5300b" 
                            href=" {{ route('login')}}"
                            class="navigation-button w-button">
                            Iniciar sesion
                        </a>                     
                        @endguest

                        @auth
                        <a 
                            id="w-node-bb0bf636-1622-2bac-85b3-47f867d5301a-67d5300b" 
                            href=" {{ route('profile.show')}}"
                            class="navigation-button w-button">
                            Cuenta
                        </a>    
                        @endauth
                    </div>

                    

                </div>
                <div class="short-fur-pattern hide-desktop"></div>
            </nav>

            <!-- Menu Hamburguesa para versiones mobiles -->
            <div id="w-node-bb0bf636-1622-2bac-85b3-47f867d53020-67d5300b"
                data-w-id="bb0bf636-1622-2bac-85b3-47f867d53020" class="menu-button w-nav-button">
                <div class="menu-icon-wrapper margin-right"><img
                        src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a8f764384d0_Icons_Adoptable_Purple_Hamburger.svg"
                        alt="" class="icon" /></div>
            </div>
        </div>
    </div>

</header>
