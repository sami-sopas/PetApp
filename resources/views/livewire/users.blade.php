<div class="container mx-auto my-10">
    <h5 class="text-center text-5xl font-bold py-3">
        Usuarios
    </h5>


    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 p-2">

        @foreach ($users as $key => $user)
            <div class="w-full bg-white border border-gray-200 rounded-lg p-5 shadow">
                <div class="flex flex-col items-center pb-10">


                    @if ($user->profile_photo_path)
                    <img class="w-24 h-24 mb-2 5 rounded-full shadow-lg" src="/storage/{{ $user->profile_photo_path }}"
                        alt="{{ $user->name }}" />
                    @else
                    <img class="w-24 h-24 mb-2 5 rounded-full shadow-lg" src="{{ $user->profile_photo_url }}"
                        alt="{{ $user->name }}" />
                    @endif


                    <h5 class="mb-1 text-xl font-medium text-gray-900">
                        {{ $user->name }}
                    </h5>
                    <span class="text-sm text-gray-500">{{ $user->email }}</span>

                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <x-secondary-button>
                            Add Friend
                        </x-secondary-button>

                        <x-button wire:click="message({{ $user->id }})">
                            Message
                        </x-button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


</div>
