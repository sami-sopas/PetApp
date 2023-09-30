<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-10">
            <span>{{ Breadcrumbs::render('colors') }}</span>

            <!-- Tarjeta donde iran las tablas -->
            <div class="pt-4">
                <div
                    class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <h5 class="mb-5 text-3xl font-bold text-gray-900 dark:text-white">
                        Colores
                    </h5>

                    <!-- Sesion para cuando se elimina un registro -->
                    @if (session('info'))
                        <div id="alert-border-3"
                            class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800 rounded-sm"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <div class="ml-3 text-sm font-medium">
                                {{ session('info') }} 
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-border-3" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <!-- Boton de crear -->
                    <a href="{{ route('colors.create') }}" class="inline-block text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-4">
                        Agregar color
                    </a>

                    <!-- Tabla-->

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3"></th>
                                    <th scope="col" class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colors as $color)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $color->id }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $color->name }}
                                        </td>
                                        <td class="px-6 py-4 w-3">
                                            <a href="{{ route('colors.edit', $color) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 w-3">
                                            <form action="{{ route('colors.destroy', $color) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-500 dark:text-blue-500 hover:underline">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
