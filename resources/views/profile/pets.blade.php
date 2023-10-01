<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <!-- Seccion para mostrar las publicaciones realizadas por el usuario -->
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Harder,
                            Better, Faster, Stronger
                        </h2>
                        <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Aqui se podria agregar una
                            barra de busqueda, o pa filtrar nose den ideas
                        </p>
                    </div>
                    <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                        @foreach ($pets as $pet)
                            <div>
                                <div
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                                    <a href="#">
                                        <img class="rounded-lg" src="{{ Storage::url($pet->image->url) }}"
                                            alt="imagen-{{ $pet->name }}">
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $pet->name }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ $pet->size }} ● {{ $pet->sex }}
                                        </p>
                                        <p class="mb-3 font-light text-gray-700 dark:text-gray-400">
                                            {{ $pet->user->state }}
                                        </p>
                                        {{-- Aqui le enviamos como parametro, la mascota actual --}}
                                        <a href="{{ route('avistamientos.show', $pet) }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Ver perfil
                                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <x-section-border />
        </div>
    </div>
</x-app-layout>
