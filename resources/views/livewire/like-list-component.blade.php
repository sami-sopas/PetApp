<div>
        {{-- Mensaje cuando no tenga items en mis me gusta--}}
        @if($pets->count() <= 0)
        
        <div data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header mx-auto pt-32">
            <div class="container-1440 full-width">
                <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                    <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                        <h1 class="headline tilt-left"><span class="spark-left">Aun no</span> tienes </h1>
                    </div>
                    <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c31144" class="heading-row-2">
                        <h1 class="headline tilt-right">mascotas en tus me gusta.</h1>
                    </div>
                </div>
            </div>
        </div>
        @endif

    <section class="grid grid-cols-1 ml-12 sm:grid-cols-2 sm:mr-20 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-5">
        {{-- Recuperar items de la wishlist --}}
        @php
            $likeItems = Cart::content()->pluck('id');
        @endphp
        @foreach ($pets as $pet)
            <div style="background-color: {{ $pet->bg_color }}"
                class="relative m-5 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 shadow-md">
                <div class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                    <img class="object-cover w-full h-full" src="{{ Storage::url($pet->images->first()->url) }}"
                        alt="{{ $pet->name }}-img" />
                </div>
                <div class="mt-4 px-5 pb-5">
                    <div class="flex justify-between items-center">
                        <a href="#">
                            <div class="flex items-center">
                                <h5 class="text-xl tracking-tight text-slate-900">{{ $pet->name }}</h5>
                                <i class="{{ $pet->icon }} pl-4 text-white text-2xl"></i>
                            </div>
                        </a>

                        <div class="flex items-center text-3xl text-red-500">
                            {{-- Remover los items --}}
                            <a href="#" wire:click.prevent="removeFromLikeList({{ $pet->id }})">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">{{ $pet->category->name }}</span>
                        </p>
                    </div>
                    <a href="{{ route('pet.show', $pet) }}"
                        class="flex items-center justify-center border-4 font-extrabold border-white rounded-lg py-2 text-center text-lg focus:outline-none focus:ring-4 focus:ring-blue-300 hover:border-dashed transition-all duration-500 ease-in-out">
                        Ver mascota
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    
</div>
