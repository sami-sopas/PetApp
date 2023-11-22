{{-- NAVBAR ANTERIOR (LA QUE VENIA CON LA PLANTILLA)
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
                        @livewire('like-component')
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
                            href=" {{ route('user.index')}}"
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

</header> --}}


<nav class="sticky-nav" style="background-color: #faf6f2;">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pb-6 pt-4">
        {{-- Logo --}}
        <a href="/">
            <div data-w-id="46b83a20-f5b0-8a53-a0a5-8f60c71a63c5" data-is-ix2-target="1" class="nav-logo"
                data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a2a924384a2_Adoptable_Logo.json"
                data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="2"
                data-duration="0" data-ix2-initial-state="0">
            </div>
        </a>

        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

            {{-- Componente de livewire para los likes --}}
            @livewire('like-component')

            {{-- Foto de usuario con opciones --}}
            @auth
                <button type="button"
                    class="flex text-sm mt-1 bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>

                    @if (Auth::user()->profile_photo_path)
                        <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{ Auth::user()->profile_photo_path }}"
                            alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    @endif


                </button>
            @endauth

            {{-- Boton de inicio de sesion --}}
            @guest
                <a href="{{ route('login') }}"
                    class="flex mt-1 p-2.5 font-semibold text-xl rounded-md md:me-0 focus:ring-4 bg-orange-200 hover:bg-orange-300">
                    Iniciar sesión
                </a>
            @endguest

            <!-- Opciones del usuario -->
            @auth      
            <div style="background-color: #faf6f2;"
                class="z-50 hidden my-4 text-base list-none divide-y divide-gray-300 rounded-lg shadow-lg border border-purple-200"
                id="user-dropdown">
                <div class="px-4 py-3 text-center">
                    <span class="block text-sm  mb-2 font-semibold">{{ Auth()->user()->name }}</span>
                    <span class="block text-sm  text-gray-500 truncate ">{{ Auth()->user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">

                    <li>
                        <a href="{{ route('profile.show') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                            Perfil
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('posts.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                            Publicaciones
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('chat.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                            Chats ({{Auth()->user()->conversations()->count()}})
                        </a>
                    </li>

                    @if(Auth()->user()->role == 'admin')
                    <li>
                        <a href="{{ route('admin.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                            Dashboard
                        </a>
                    </li>
                    @endif

                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 text-sm text-red-600 w-full text-left hover:bg-gray-100">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <div class="justify-center">
                
            </div>
            <ul
                class="flex flex-col font-semibold md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-3 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                <li class="my-auto">
                    <a href="{{ route('adopt-dog.index') }}"
                        class="py-2 px-3  rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                        Adopt a Dog
                    </a>
                </li>

                <li class="my-auto">
                    <a href="{{ route('adopt-cat.index') }}"
                        class="py-2 px-3  rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                        Adopt a Cat
                    </a>
                </li>

                <li class="my-auto">
                    <a href="{{ route('adopt-pet.index') }}"
                        class="py-2 px-3  rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                        Adopt a Pet
                    </a>
                </li>

                <li class="my-auto">
                    <a href="{{ route('donate.index') }}"
                        class="py-2 px-3  rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                        Donar
                    </a>
                </li>

                @auth
                <li class="my-auto">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3  md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                        Publicar
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" style="background-color: #faf6f2;"
                        class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-auto text-center border border-purple-200">
                        <ul class="py-2 text-sm px-5" aria-labelledby="dropdownLargeButton">

                            <li>
                                <a href="{{ route('adopt-dog.create') }}"
                                    class="my-1.5 rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                                    Perro en Adopción
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('adopt-cat.create') }}"
                                    class="my-1.5 rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                                    Gato en Adopción
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('adopt-pet.create') }}"
                                    class="my-1.5 rounded md:hover:bg-transparent md:hover:opacity-75 transition-opacity ease-in-out duration-200 md:p-0">
                                    Mascota en Adopción
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

{{-- <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3  hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                </ul>
            </div> --}}
