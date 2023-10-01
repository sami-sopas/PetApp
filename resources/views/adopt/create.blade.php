<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dar en adopcion') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <!-- Seccion para mostrar el formulario de crear mascota en adopcion -->
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
                       
                    </div>
                </div>
            </section>

            <x-section-border />
        </div>
    </div>

        

</x-app-layout>
