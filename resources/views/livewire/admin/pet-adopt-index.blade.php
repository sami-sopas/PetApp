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
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3"></th>
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
                            <a href="{{ route('pets-adopt.show', $pet) }}"
                                class="font-medium text-black dark:text-white hover:underline">
                                Detalles
                            </a>
                        </td>
                        <td class="px-6 py-4 w-3">
                            <a href="{{ route('pets-adopt.edit', $pet) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                Edit
                            </a>
                        </td>
                        <td class="px-6 py-4 w-3">
                            <form action="{{ route('pets-adopt.destroy', $pet) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-500 dark:text-blue-500 hover:underline">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginacion -->
        <div class="p-5">
            {{-- $pets->links() --}}
        </div>
    @else
        <!-- Mensaje a mostrar cuando no encuentre registros -->
        <div class="p-5">
            <strong>Ups! Paraece que no hay registros</strong>
        </div>
    @endif
</div>
