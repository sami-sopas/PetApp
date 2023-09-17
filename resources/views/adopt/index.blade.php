<x-app-layout>
    <h1>Mostrar mascotas en adopcion</h1>
    <div class="container bg-red-500 mx-auto py-8">
        {{-- Los pets son enviados desde el AdoptController (index) --}}
    
        <!-- Grid -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @livewire('filter')
    
            @foreach ($pets as $pet)
                <article class="col-span-1">
                    <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                        <a href="#">
                            <img class="w-full h-auto rounded-t-lg" src="{{ Storage::url($pet->image->url) }}" alt="imagen-{{ $pet->name }}">
                        </a>
                        <div class="p-2">
                            <a href="#">
                                <h5 class="mb-1 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $pet->name }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-sm text-gray-700 dark:text-gray-400">
                                {{ $pet->size }} ● {{ $pet->sex }}
                            </p>
                            <p class="mb-1 font-light text-sm text-gray-700 dark:text-gray-400">
                                {{ $pet->user->state }}
                            </p>
                            {{-- Aquí le enviamos como parámetro, la mascota actual --}}
                            <a href="{{ route('adoptar.show',$pet) }}"
                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver perfil
                                <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
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
