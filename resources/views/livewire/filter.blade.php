<div class="md:col-span-1">
    <!-- Seccion de filtros -->
    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <!-- Contenido de filtros -->
        <span class="font-bold text-2xl">
            Filtrar
            {{-- Las variables vienen de Livewire/filter.php --}}
        </span>

        <form action="{{ route('adoptar.search') }}" method="GET">

            <!-- Categorias: perro o gato -->
            <div class="mt-2">
                <label for="category">Categoria</label> <br>
                <input type="radio" name="category" value="all" {{ request('category') === 'all' ? 'checked' : '' }}
                    checked> Todos <br>
                @foreach ($categories as $category)
                    <input type="radio" name="category" value="{{ $category->id }}">
                    {{ $category->name }} <br>
                    </input>
                @endforeach
            </div>

            <!-- Tamaño -->
            <div class="mt-2">
                <label for="size">Tamaño</label> <br>
                <select name="size">
                    <option value="all">Todos</option>
                    @foreach ($petSizes as $pet)
                        <option value="{{ $pet->size }}" {{ request('size') == $pet->size ? 'selected' : '' }}>
                            {{ $pet->size }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Sexo -->
            <div class="mt-2">
                <label for="sex">Sexo</label> <br>
                <select name="sex">
                    <option value="all">Todos</option>
                    @foreach ($petSex as $pet)
                        <option value="{{ $pet->sex }}" {{ request('sex') == $pet->sex ? 'selected' : '' }}>
                            {{ $pet->sex }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Edad -->
            <div class="mt-2">
                <label for="age">Edad</label> <br>
                <select name="age">
                    <option value="all">Todos</option>
                    @foreach ($petAges as $pet)
                        <option value="{{ $pet->age }}" {{ request('age') == $pet->age ? 'selected' : '' }}>
                            {{ $pet->age }}
                        </option>
                    @endforeach
                </select>
            </div>

   
            <!-- Ubicación -->
            <div class="mt-2">
                <label for="state">Ubicación</label> <br>
                <select name="state">
                    <option value="all">Todos</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->state }}">{{ $state->state }}</option>
                    @endforeach
                </select>
            </div>


            <!-- Personalidad / Tags -->
            <div class="mt-2">
                <label for="tags">Etiquetas</label> <br>
                @foreach ($petTags as $tag)
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                    {{ $tag->name }} <br>
                    </input>
                @endforeach
            </div>


            <!-- Color -->
            <div class="mt-2">
                <label for="color">Color</label> <br>
                <select name="color">
                    <option value="all" {{ request('color') === 'all' ? 'selected' : '' }}>Todos</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}" {{ request('color') == $color->id ? 'selected' : '' }}>
                            {{ $color->name }}
                        </option>
                    @endforeach
                </select>
            </div>



            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                type="submit">Buscar
            </button>

        </form>

    </div>
</div>
