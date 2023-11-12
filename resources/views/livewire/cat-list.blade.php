<div class="mx-auto">
    {{-- Filtro --}}

    <div class="bg-white w-11/12 border border-gray-200 px-5 mx-auto ">
        <ul class="shadow-box">

            <div class="relative border-b border-gray-200 text-sm" x-data="{ selected: null }">

                <button type="button" class="w-full pt-4 text-left"
                    @click="selected !== 1 ? selected = 1 : selected = null">
                    <div class="flex-horizontal justify-space-between">
                        <h4 class="accordion-headline">I&#x27;m looking for a cat that...</h4>
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
                                <button type="button"
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
    <section class="grid grid-cols-1 ml-12 sm:grid-cols-2 sm:mr-20 md:grid-cols-3 gap-4 mt-5">
        @php
            //Rescatar items de la like list
            $likeItems = Cart::content()->pluck('id');
        @endphp
        @foreach ($cats as $dog)
            <div style="background-color: {{ $dog->bg_color }}"
                class="relative m-5 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 shadow-md">
                <div class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                    <img class="object-cover w-full h-full" src="{{ Storage::url($dog->images->first()->url) }}"
                        alt="{{ $dog->name }}-img" />
                </div>
                <div class="mt-4 px-5 pb-5">
                    <div class="flex justify-between items-center">
                        <a href="#">
                            <div class="flex items-center">
                                <h5 class="text-xl tracking-tight text-slate-900">{{ $dog->name }}</h5>
                                <i class="{{$dog->icon}} pl-4 text-white text-2xl"></i>
                            </div>
                        </a>
                        
                        <div class="flex items-center text-3xl text-red-500">
                            @if ($likeItems->contains($dog->id))
                                {{-- Cuando coincide, lo marcamos como likeado, pero si ya está likeado, lo quita --}}
                                <a href="#" wire:click.prevent="removeFromLikeList({{ $dog->id }})">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            @else
                                {{-- Cuando no coincide, sin marcar --}}
                                <a href="#"
                                    wire:click.prevent="addToLikeList({{ $dog->id }}, '{{ $dog->name }}')">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">{{ $dog->category->name }}</span>
                        </p>
                    </div>
                    <a href="{{ route('pet.show',$dog) }}"
                        class="flex items-center justify-center border-4 font-extrabold border-white rounded-lg py-2 text-center text-lg focus:outline-none focus:ring-4 focus:ring-blue-300 hover:border-dashed transition-all duration-500 ease-in-out">
                        Ver mascota
                    </a>
                </div>
            </div>
        @endforeach
    </section>


</div>
