<div class="md:col-span-1">
    <!-- Seccion de filtros -->
    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <!-- Contenido de filtros -->
        <span class="font-bold text-2xl">
            Filtrar
            {{-- Las variables vienen de Livewire/filter.php --}}
        </span>

        <form action="" method="post">
            <!-- Categorias: perro o gato -->
            <div class="mt-2">
                Categoria <br>
                @foreach ($categories as $category)
                    <input type="radio" name="type" value="{{ $category->name }}">{{ $category->name }} <br>
                @endforeach
            </div>

            <!-- Tamaño -->
            <div class="mt-2">
                <label for="size">Tamaño</label> <br>
                <select name="size">
                    @foreach ($petSizes as $pet)
                        <option value="{{ $pet->size }}">
                            {{ $pet->size }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Sexo -->
            <div class="mt-2">
                <label for="size">Sexo</label> <br>
                <select name="size">
                    @foreach ($petSex as $pet)
                        <option value="{{ $pet->sex }}"">
                            {{ $pet->sex }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Edad -->
            <div class="mt-2">
                <label for="size">Edad</label> <br>
                <select name="size">
                    @foreach ($petAges as $pet)
                        <option value="{{ $pet->age }}"">
                            {{ $pet->age }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Ubicacion -->
            <div class="mt-2">
                <label for="size">Ubicacion</label> <br>
                <select name="size">
                    @foreach ($states as $state)
                        <option value="{{ $state->state }}"">
                            {{ $state->state }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Personalidad -->
            <div class="mt-2">
                <label for="size">Personalidad</label> <br>
                <select name="size">
                    @foreach ($petTags as $tag)
                        <option value="{{ $tag->name }}"">
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" 
            type="submit">Buscar</button>

        </form>

    </div>
</div>
