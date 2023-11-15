<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    Admin
                </th>
                <th scope="col" class="px-4 py-3">
                    Acciones
                </th>
                <th scope="col" class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $user->name }}
                </td>
                <td class="pl-10 py-4 ">
                    <input type="checkbox" wire:model="isAdmin.{{ $user->id }}" wire:change="updateRole({{ $user->id }}, $event.target.checked)" class="rounded">
                </td>
            

                <td class="px-6 py-4 w-3">
                    <a href="#"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Detalles
                    </a>
                </td>
                <td class="px-6 py-4 w-3">
                    <form action="{{ route('categories.destroy', $user) }}" method="POST">
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
