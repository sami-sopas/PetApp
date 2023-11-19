<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="w-1/12 px-6 py-3">
                    ID
                </th>
                <th scope="col" class="w-3/12 px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="w-3/12 px-6 py-3">
                    Cuenta creada
                </th>
                <th scope="col" class="w-3/12 px-6 py-3">
                    Cuenta dada de baja
                </th>
                <th scope="col" class="w-1/12 px-4 py-3 text-center">
                    Acciones
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="w-1/12 px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->id }}
                </th>
                <td class="w-3/12 px-6 py-4">
                    {{ $user->name }}
                </td>
                <td class="w-3/12 px-6 py-4 ">
                    {{ $user->created_at->diffForHumans() }}
                </td>
                <td class="w-3/12 px-6 py-4">
                    {{ $user->deleted_at->diffForHumans() }}
                </td>
                <td class="w-3/12 px-6 py-4">
                    <table>
                        <tr>
                            <td>
                    <form action="{{ route('users.restore', $user->id) }}" method="POST" class="mr-3">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Recuperar
                        </button>
                    </form>
                            </td>
                            <td>
                    <a href=" {{ route('users.deleteForever', $user->id )}}" class="font-medium text-red-500 dark:text-blue-500 hover:underline">
                        Eliminar
                    </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        @endforeach 
        </tbody>
    </table>


    {{-- Modal --}}
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Detalles del usuario
        </x-slot>

        <x-slot name="content">
            <div class="max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md">
                <div class="bg-blue-300 text-white text-center p-4">
                    <!-- Imagen de perfil en un círculo -->
                    <img class="h-20 w-20 rounded-full mx-auto" src="{{ $userModal->profile_photo_url ?? 'hola'}}" alt="Imagen de perfil">
                </div>
                <div class="p-4">
                    <!-- Información del usuario -->
                    <div class="mb-4">
                        <x-label value="Nombre" class="mb-2"/>
                        <x-input type="text" class="w-full text-center" value="{{ $userModal->name ?? '' }}" disabled />
                    </div> 

                    <div class="mb-4">
                        <x-label value="Email" class="mb-2"/>
                        <x-input type="text" class="w-full text-center" value="{{ $userModal->email ?? '' }}" disabled />
                    </div>

                    <div class="mb-4">
                        <x-label value="Rol" class="mb-2"/>
                        <x-input type="text" class="w-full text-center" value="{{ $userModal->role ?? '' }}" disabled />
                    </div>

                    <div class="mb-4">
                        <x-label value="Telefono" class="mb-2"/>
                        <x-input type="text" class="w-full text-center" value="{{ $userModal->phone ?? '' }}" disabled />
                    </div>

                    <div class="mb-4">
                        <x-label value="Ubicacion" class="mb-2"/>
                        <x-input type="text" class="w-full text-center" value="{{ $userModal->state->name ?? '' }}" disabled />
                    </div>

                </div>
            </div>
        </x-slot>

        <x-slot name="footer" class="mb-2">
            <x-button wire:click="$set('open', false)">Cerrar</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
