<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-10">
            <span>{{ Breadcrumbs::render('tags-create') }}</span>

            <div class="pt-4">
                <div
                    class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <!-- Formulario para crear categoria -->

                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name"
                                class="flex text-start mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nombre
                            </label>
                            <input type="text" placeholder="Travieso" name="name" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('name')
                                <div>
                                    <span class="flex text-start mt-2 text-xs text-red-600 dark:text-red-400 font-medium">
                                        {{$message}}
                                    </span>
                                </div>
                            @enderror
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Guardar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
