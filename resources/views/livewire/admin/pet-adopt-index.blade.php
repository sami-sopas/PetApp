<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <!-- Barra de busqueda -->
    <div class="p-5">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" wire:model.live="search"
                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar...">
        </div>
    </div>
    

    @if ($pets->count())
        <!-- Tabla -->
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Autor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sexo
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Acciones
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pet->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $pet->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pet->category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pet->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pet->sex }}
                        </td>
                        <td class="px-6 py-4 w-3">     
                            <table>
                                <tr>
                                    <td>    
                                        <button type="button" wire:click="openModal({{ $pet->id }})"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Detalles
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{ route('pets-adopt.destroy', $pet->id) }}" method="POST" class="ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-500 dark:text-blue-500 hover:underline">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginacion -->
        <div class="p-5">
            {{ $pets->links() }}
        </div>
    @else
        <!-- Mensaje a mostrar cuando no encuentre registros -->
        <div class="p-5">
            <strong>Ups! Paraece que no hay registros</strong>
        </div>
    @endif

    {{-- Modal --}}
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Detalles de la mascota
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4">
                    <x-label value="Nombre" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->name ?? '' }}" disabled />
                </div>
                @if ($petModal && $petModal->age != null)
                <div class="mb-4">
                    <x-label value="Edad" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->age }}" disabled />
                </div>
                @endif
                <div class="mb-4">
                    <x-label value="Sexo" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->sex ?? '' }}" disabled />
                </div>
                <div class="mb-4">
                    <x-label value="Categoría" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->category->name ?? '' }}" disabled />
                </div>
                <div class="mb-4">
                    <x-label value="Autor" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->user->name ?? '' }}" disabled />
                </div>
                <div class="mb-4">
                    <x-label value="Estado" class="mb-2"/>
                    <x-input type="text" class="w-full" value="{{ $petModal->status ?? '' }}" disabled />
                </div>
            </div>
            <div class="mb-4">
                <x-label value="Descripción" class="mb-2"/>
                <textarea class="w-full rounded border border-gray-300" rows="3" disabled>{{ $petModal->description ?? '' }}</textarea>
            </div>
            <div class="mb-4">
                <x-label value="Etiquetas" class="mb-2"/>
                <div class="flex flex-wrap">
                    @foreach ($petModal->tags ?? [] as $tag)
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800 mr-2 mb-2">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <x-label value="Imagenes" class="mb-2"/>
                <div class="flex flex-wrap justify-center items-center">
                    @foreach ($petModal->images ?? [] as $image)
                        <img src="{{ Storage::url($image->url) }}" alt="" class="w-32 h-32 object-cover mr-2 mb-2">
                    @endforeach
                </div>
        </x-slot>

        <x-slot name="footer" class="mb-2">
            <x-button wire:click="$set('open', false)">Cerrar</x-button>
        </x-slot>
    </x-dialog-modal>

</div>
