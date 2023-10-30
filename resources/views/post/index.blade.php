<x-app-layout>
    <div class="m-10 p-6 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
        <h2 class="text-3xl text-center font-bold text-gray-800 dark:text-white mb-4">Publicaciones Realizadas</h2>

        <div class="relative overflow-x-auto">
            <!-- Table Header -->
            <div class="flex items-center justify-between py-4 bg-white dark:bg-gray-800">
            </div>
            <!-- Table -->
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <!-- Table Header Row -->
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-14 py-3">
                            Mascota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Categoria
                        </th>
                        <th scope="col" class="px-10 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-10 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <!-- Table Data Rows -->
                <tbody>
                    @foreach ($pets as $pet)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover-bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{ Storage::url($pet->images->first()->url) }}"
                                    alt="{{ $pet->name }}">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{ $pet->name }}</div>
                                    <div class="font-normal text-gray-500">ID: {{ $pet->id }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $pet->category->name }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full
                                    @switch($pet->status)
                                        @case('En Adopcion')
                                            bg-green-500
                                            @break
                                        @case('En Proceso')
                                            bg-yellow-500
                                            @break
                                        @case('Adoptado')
                                            bg-red-500
                                            @break
                                        @default
                                            bg-gray-500
                                    @endswitch
                                    mr-2">
                                    </div>
                                    {{ $pet->status }}

                                </div>
                            </td>
                            <td class="px-6 py-4">
                        
                                <a href="{{ route('post.edit',$pet) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Editar
                                </a>
                                <a href="#" 
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Edit user modal (si lo necesitas) -->
            <!-- ... -->
        </div>
    </div>

</x-app-layout>
