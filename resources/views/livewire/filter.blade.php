<div class="md:col-span-1">
    <!-- Seccion de filtros -->
    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <!-- Contenido de filtros -->
        <span class="font-bold text-2xl">
            Filtrar
        </span>

        <form action="" method="post">
            <!-- Categorias: perro o gato -->
            <div class="mt-2">
                Categoria <br>
                @foreach ($types as $type)
                    <input type="radio" name="type" value="{{ $type->name }}">{{ $type->name }} <br>
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

        </form>

    </div>
</div>
