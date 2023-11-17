<x-admin-layout>
    <x-admin-layout>
        <div class="p-4 sm:ml-64">
            <div class="p-4 mt-10">
                <span>{{ Breadcrumbs::render('home') }}</span>

                <!-- Tarjeta donde iran las tablas -->
                <div class="pt-4">

                    <div
                        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                        <h5 class="mb-5 text-3xl font-bold text-gray-900 dark:text-white">
                            Inicio
                        </h5>

                        {{-- Grid de cards --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">Administradores</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">{{$admins}}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon1"></i>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">Usuarios registrados</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">{{$users}}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon2"></i>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">Publicaciones hechas</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">{{$posts}}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon3"></i>
                                </div>
                            </div>
                            <div class="flex flex-col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                                <p class="text-center text-gray-900 dark:text-white overflow-ellipsis overflow-hidden mb-2">Mascotas adoptadas</p>
                                <h2 class="text-center text-3xl font-bold text-gray-900 dark:text-white mb-auto">{{$adoptions}}</h2>
                                <div class="flex justify-center mt-auto">
                                    <i class="fas fa-icon4"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>

    <div></div>
</x-admin-layout>
