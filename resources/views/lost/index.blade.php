<x-app-layout>
    <h1>Mostrar mascotas perdidas</h1>
    <div class="container bg-red-500 mx-auto py-8">
        {{-- Los pets son enviados desde el pet Controller --}}
    
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($pets as $pet)
                <article>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                        <a href="#">
                            <img class="rounded-lg" src="{{ Storage::url($pet->image->url) }}" alt="imagen-{{ $pet->name }}">
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $pet->name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $pet->size }} ● {{ $pet->sex }}
                            </p>
                            <p class="mb-3 font-light text-gray-700 dark:text-gray-400">
                                {{ $pet->user->state }}
                            </p>
                            {{-- Aqui le enviamos como parametro, la mascota actual --}}
                            <a href="{{ route('avistamientos.show',$pet) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver perfil
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    

    {{-- Paginacion --}}
    <div class="mt-4">
        {{ $pets->links() }}
    </div>

</x-app-layout>
