<div>
    {{-- Filtro --}}

    <div class="bg-white w-11/12 border border-gray-200 px-5 mx-auto ">
        <ul class="shadow-box">

            <div class="relative border-b border-gray-200 text-sm" x-data="{ selected: null }">

                <button type="button" class="w-full pt-4 text-left"
                    @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex-horizontal justify-space-between">
                        <h4 class="accordion-headline">I&#x27;m looking for a dog that...</h4>
                        <div class="arrow-icon small"><img
                                src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802a42154384b8_Icons_Adoptable_Purple_Arrow Down.svg"
                                width="75" alt="" /></div>
                    </div>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                    x-ref="container1"
                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                    <div class="p-6">
                        <form wire:submit="filter">
                            <!-- Filtros -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4">
                                <!-- Columna 1 -->
                                <div class="col-span-1 flex flex-col h-full">
                                    <!-- Filtro por Tamaño -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="size">Tamaño</label>
                                        <select wire:model="size" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Todos los tamaños</option>
                                            @foreach (\App\Models\Pet::select('size')->distinct()->get() as $option)
                                                <option value="{{ $option->size }}"
                                                    {{ Request::get('size') == $option->size ? 'selected' : '' }}>
                                                    {{ $option->size }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Filtro por Sexo -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="sex">Sexo</label>
                                        <select wire:model="sex" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Ambos sexos</option>
                                            @foreach (\App\Models\Pet::select('sex')->distinct()->get() as $option)
                                                <option value="{{ $option->sex }}"
                                                    {{ Request::get('sex') == $option->sex ? 'selected' : '' }}>
                                                    {{ $option->sex }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Columna 2 -->
                                <div class="col-span-1 flex flex-col h-full">
                                    <!-- Filtro por Edad -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="age">Edad</label>
                                        <select wire:model="age" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Todas las edades</option>
                                            @foreach (\App\Models\Pet::select('age')->distinct()->get() as $option)
                                                <option value="{{ $option->age }}"
                                                    {{ Request::get('age') == $option->age ? 'selected' : '' }}>
                                                    {{ $option->age }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Filtro por Ubicación -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="state">Ubicación</label>
                                        <select wire:model="state" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Todas las ubicaciones</option>
                                            @foreach (\App\Models\State::all() as $option)
                                                <option value="{{ $option->name }}"
                                                    {{ Request::get('state') == $option->name ? 'selected' : '' }}>
                                                    {{ $option->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Columna 3 -->
                                <div class="col-span-1 flex flex-col h-full">
                                    <!-- Filtro por Etiqueta (Tag) -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="tag">Etiqueta</label>
                                        <select wire:model="tag" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Todas las etiquetas</option>
                                            @foreach (\App\Models\Tag::all() as $option)
                                                <option value="{{ $option->name }}"
                                                    {{ Request::get('tag') == $option->name ? 'selected' : '' }}>
                                                    {{ $option->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Filtro por Color -->
                                    <div class="mb-4 flex-grow w-full">
                                        <label for="color">Color</label>
                                        <select wire:model="color" class="w-full border border-gray-300 rounded p-2">
                                            <option value="" selected>Todos los colores</option>
                                            @foreach (\App\Models\Tag::all() as $option)
                                                <option value="{{ $option->name }}"
                                                    {{ Request::get('color') == $option->name ? 'selected' : '' }}>
                                                    {{ $option->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de Filtrar y Reestablecer -->
                            <div class="col-span-3 text-center">
                                <button type="submit"
                                    class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                                    Filtrar
                                </button>
                                <button 
                                    type="button"
                                    class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 ml-2"
                                    wire:click="resetFilters">
                                    Reestablecer
                                </button>
                            </div>

                        </form>


                    </div>
                </div>

            </div>


        </ul>
    </div>








    {{-- Imprimir doggos --}}
    <section class="section wide no-padding">
        <div class="w-dyn-list">
            <div role="list" class="pet-profiles-grid w-dyn-items">
                {{-- Recuperar items de la wishlist --}}
                @php
                    $likeItems = Cart::content()->pluck('id');
                @endphp
                @foreach ($dogs as $dog)
                    <div role="listitem" class="w-dyn-item my-5 mx-5">
                        <a href="#" class="profile-card-link-block w-inline-block">
                            <div class="flex-horizontal">
                                <div class="profile-card-half">
                                    <div style="background-color: {{ $dog['background_color'] }}"
                                        class="content-padding profile-cards">
                                        <div class="profile-icon">
                                            {{-- Comparar lo de la lista con lo existente para ver cuales tendran el corazon lleno --}}
                                            @if ($likeItems->contains($dog->id))
                                                {{-- Cuando coincide, lo marcamos como likeado, pero si ya esta likeado, lo quita --}}
                                                <a href="#"
                                                    wire:click.prevent="removeFromLikeList({{ $dog->id }})">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            @else
                                                {{-- Cuando no coincide, sin marcar --}}
                                                <a href="#"
                                                    wire:click.prevent="addToLikeList({{ $dog->id }},'{{ $dog->name }}')">
                                                    <i class="fa-regular fa-heart"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <h3 class="profile-descriptor">
                                            <a href="{{ route('pet.show', $dog) }}">{{ $dog->name }}</a>
                                        </h3>
                                        <div>
                                            <div style="background-color: {{ $dog['badge_color'] }}"
                                                class="badge-outline white">
                                                <h6>{{ $dog->age }}</h6>
                                            </div>
                                        </div>
                                        <div class="long-fur-pattern"></div>
                                    </div>
                                </div>
                                <div style="background-color: {{ $dog['background_color'] }}"
                                    class="profile-card-half">
                                    <img src="{{ Storage::url($dog->images->first()->url) }}" alt=""
                                        sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                                        class="pet-thumbnail-image" />
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
