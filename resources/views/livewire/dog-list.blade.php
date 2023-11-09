<div class="mx-auto">
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
        @foreach ($dogs as $dog)
            <div style="background-color:hsla(41, 100.00%, 76.34%, 0.65)"
                class="relative m-5 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 shadow-md">
                <div class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                    <img class="object-cover" src="{{ Storage::url($dog->images->first()->url) }}"
                        alt="{{ $dog->name }}-img" />
                </div>
                <div class="mt-4 px-5 pb-5">
                    <div class="flex justify-between items-center">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">{{ $dog->name }}</h5>
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
                    <a href="#"
                        class="flex items-center justify-center border-4 font-extrabold border-white rounded-lg py-2 text-center text-lg focus:outline-none focus:ring-4 focus:ring-blue-300 hover:border-dashed transition-all duration-500 ease-in-out">
                        Ver mascota
                    </a>
                </div>
            </div>
        @endforeach
    </section>



    {{-- Ejemplo --}}
    <section class="section wide no-padding">
        <div class="w-dyn-list">
            <div role="list" class="pet-profiles-grid w-dyn-items">
                <div role="listitem" class="w-dyn-item"><a href="dog/missy.html"
                        class="profile-card-link-block w-inline-block">
                        <div class="flex-horizontal">
                            <div class="profile-card-half">
                                <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)"
                                    class="content-padding profile-cards">
                                    <div class="profile-icon"><img
                                            src="https://uploads-ssl.webflow.com/5f4f91ff23802a48574383ea/5f4f91ff23802ae14a438512_Icons_Adoptable_White_Bone.svg"
                                            width="38" alt="" /></div>
                                    <h3 class="profile-descriptor">Hi I&#x27;m Missy, the low flying cloud dog.</h3>
                                    <div>
                                        <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)"
                                            class="badge-outline white">
                                            <h6>Puppy</h6>
                                        </div>
                                    </div>
                                    <div class="long-fur-pattern"></div>
                                </div>
                            </div>
                            <div style="background-color:hsla(41, 100.00%, 76.34%, 1.00)" class="profile-card-half">
                                <img src="../uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%207_Pic%201_white-samoyed_puppy_Photo%20by_wildlittlethingsphoto.jpg"
                                    alt="" sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                                    srcset="https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%25207_Pic%25201_white-samoyed_puppy_Photo%2520by_wildlittlethingsphoto-p-500.jpeg 500w, https://uploads-ssl.webflow.com/5f4f91ff23802a3d804383e9/5f4f91ff23802a2d1a4384e8_Adoptable-Webflow-Theme_Dog%207_Pic%201_white-samoyed_puppy_Photo%20by_wildlittlethingsphoto.jpg 920w"
                                    class="pet-thumbnail-image" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
