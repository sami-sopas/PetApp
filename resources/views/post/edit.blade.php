<x-app-layout>
    <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header h-44">
        <div class="container-1440 full-width">
            <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                    <h1 class="headline tilt-left"><span class="spark-left">Editando a</span> {{ $pet->name }} </h1>
                </div>
            </div>
    </header>

    @if (session('info'))
        <strong>{{ session('info') }}</strong>
    @endif

    <div class="container mx-auto mt-10">
        {{-- Formulario para perros y gatos --}}
        @if ($pet->category_id == 1 or $pet->category_id == 2)
            <form method="POST" action="{{ route('pet.update', $pet) }}"
                class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h2 class="text-2xl font-bold mb-4">Editar mascota</h2>

                <!-- Campo Name -->
                <div class="mb-4">
                    <label for="name" class="text-gray-600">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" value="{{ old('name', $pet->name) }}"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400" />
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campos Categoria y Status (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Categoria (Select) -->
                    <div class="mb-4">
                        <label for="category" class="text-gray-600">Categoria</label>
                        <select id="category" name="category_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $category->id == $pet->category->id ? 'selected' : '') }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Status (Select) -->
                    <div class="mb-4">
                        <label for="status" class="text-gray-600">Status</label>
                        <select id="status" name="status"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($statuses as $statusOption)
                                @if ($statusOption->status != $pet->status)
                                    <option value="{{ $statusOption->status }}">{{ $statusOption->status }}</option>
                                @endif
                            @endforeach
                            <option value="{{ $pet->status }}" selected>{{ $pet->status }}</option>
                        </select>
                        @error('status')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Campos Color y Size (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Color (Select) -->
                    <div class="mb-4">
                        <label for="color" class="text-gray-600">Color</label>
                        <select id="color" name="color_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}"
                                    {{ old('color_id', $color->id == $pet->color->id ? 'selected' : '') }}>
                                    {{ $color->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('color_id')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Size (Select) -->
                    <div class="mb-4">
                        <label for="size" class="text-gray-600">Tamaño</label>
                        <select id="size" name="size"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($sizes as $size)
                                <option value="{{ $size->size }}" {{ old('size', $size->size) == $pet->size ? 'selected' : '' }}>
                                    {{ $size->size }}
                                </option>
                            @endforeach
                        </select>
                        @error('size')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!-- Campos Sex y Age (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Sex (Select) -->
                    <div class="mb-4">
                        <label for="sex" class="text-gray-600">Sex</label>
                        <select id="sex" name="sex"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($sexs as $sex)
                                <option value="{{ $sex->sex }}" {{ old('sex', $sex->sex) == $pet->sex ? 'selected' : '' }}>
                                    {{ $sex->sex }}
                                </option>
                            @endforeach
                        </select>
                        @error('sex')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Campo Age (Select) -->
                    <div class="mb-4">
                        <label for="age" class="text-gray-600">Age</label>
                        <select id="age" name="age"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($ages as $age)
                                <option value="{{ $age->age }}" {{ old('age', $age->age) == $pet->age ? 'selected' : '' }}>
                                    {{ $age->age }}
                                </option>
                            @endforeach
                        </select>
                        @error('age')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!-- Campo Description -->
                <div class="mb-4">
                    <label for="description" class="text-gray-600">Description</label>
                    <textarea name="description" rows="4" placeholder="Enter a description"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">{{ old('description', $pet->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campo Tags (Select múltiple) -->
                <div class="mb-4">
                    <label class="text-gray-600">Tags</label>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($tags as $tag)
                            <div class="flex items-center">
                                <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]"
                                    value="{{ $tag->id }}" class="mr-2"
                                    @if (in_array($tag->id, $pet->tags->pluck('id')->toArray())) checked @endif>
                                <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('tags')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campos para la card (color e icono) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Color (Select) -->
                    <div class="mb-4">
                        <label for="bg_color" class="text-gray-600">Color de fondo</label>
                        <select id="bg_color" name="bg_color"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
                            onchange="this.style.backgroundColor = this.options[this.selectedIndex].value;">
                            <option value="" disabled>Select a color</option>
                            @foreach ($bg_colors as $bg_color)
                                <option style="background-color: {{ $bg_color->bg_color }};"
                                    value="{{ $bg_color->bg_color }}"
                                    @if (old('bg_color', $bg_color->bg_color) == $pet->bg_color) selected @endif>
                                </option>
                            @endforeach
                        </select>
                        @error('bg_color')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <script>
                        //Para que aparezca de color el select deacuerdo al seleccionado
                        window.onload = function() {
                            var select = document.getElementById("bg_color");
                            select.style.backgroundColor = select.options[select.selectedIndex].value;
                        }
                    </script>

                    <!-- Campo Icono (Select) -->
                    <div class="mb-4">
                        <label for="icon" class="text-gray-600">Icono <i id="selected-icon"
                                class="{{ $pet->icon }}"></i></label>
                        <select id="icon" name="icon"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
                            onchange="document.getElementById('selected-icon').className = this.value;">
                            <option value="" disabled>Select an icon</option>
                            @foreach ($icons as $icon)
                                <option value="{{ $icon->icon }}" @if (old('icon', $icon->icon) == $pet->icon) selected @endif>
                                    {{-- Para que no imprima toda la clase del icono --}}
                                    {{ str_replace(['fa-solid fa-', '-'], ['', ' '], $icon->icon) }}
                                </option>
                            @endforeach
                        </select>
                        @error('icon')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Imágenes -->
                    <div class="mb-4">
                        <label for="images" class="text-gray-600">Images</label>
                        <input type="file" name="files[]" id="file" multiple accept="image/png, image/jpeg">
                        <div id="image-preview"></div>
                        @error('files.*')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        @error('files')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Imagenes actuales-->
                    <div class="image-gallery grid grid-cols-3 gap-6 mb-4">
                        @foreach ($pet->images as $image)
                            <div id="picture" class="bg-white rounded-lg shadow-lg">
                                <img class="w-full h-full object-cover" src="{{ Storage::url($image->url) }}"
                                    alt="{{ $pet->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                    <!-- Botón de Enviar -->
                    <div class="mb-4" style="display:flex; justify-content:center">
                        <button type="submit"
                            class=" px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Actualizar
                        </button>
                    </div>

            </form>
        @else
            {{-- Formulario para otros tipos de pets --}}
            <form method="POST" action="{{ route('pet.update', $pet) }}"
                class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <h2 class="text-2xl font-bold mb-4">Editar mascota</h2>

                <!-- Campos Nombre y Categoria (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Categoria (Select) -->
                    <div class="mb-4">
                        <label for="name" class="text-gray-600">Name</label>
                        <input type="text" name="name" placeholder="Enter your name" value="{{ old('name', $pet->name) }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400" />
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Categoria (Select) -->
                    <div class="mb-4">
                        <label for="category" class="text-gray-600">Categoria</label>
                        <select id="category" name="category_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $category->id) == $pet->category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!-- Campos Status y Ctatus (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">

                    <!-- Campo Status (Select) -->
                    <div class="mb-4">
                        <label for="status" class="text-gray-600">Status</label>
                        <select id="status" name="status"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($statuses as $statusOption)
                                <option value="{{ $statusOption->status }}"
                                    {{ old('status', $statusOption->status) == $pet->status ? 'selected' : '' }}>
                                    {{ $statusOption->status }}
                                </option>
                            @endforeach
                        </select>
                        @error('status')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Color (Select) -->
                    <div class="mb-4">
                        <label for="color" class="text-gray-600">Color</label>
                        <select id="color" name="color_id"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($colors as $color)
                                <option value="{{ $color->id }}"
                                    {{ old('color_id', $color->id) == $pet->color->id ? 'selected' : '' }}>
                                    {{ $color->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('color_id')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <!-- Campos Sex y Size (en la misma fila) -->
                <div class="grid grid-cols-2 gap-4">

                    <!-- Campo Size (Select) -->
                    <div class="mb-4">
                        <label for="size" class="text-gray-600">Tamaño</label>
                        <select id="size" name="size"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($sizes as $size)
                                <option value="{{ $size->size }}"
                                    {{ old('size', $size->size) == $pet->size ? 'selected' : '' }}>
                                    {{ $size->size }}
                                </option>
                            @endforeach
                        </select>
                        @error('size')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo Sex (Select) -->
                    <div class="mb-4">
                        <label for="sex" class="text-gray-600">Sex</label>
                        <select id="sex" name="sex"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                            @foreach ($sexs as $sex)
                                <option value="{{ $sex->sex }}" {{ old('sex', $sex->sex) == $pet->sex ? 'selected' : '' }}>
                                    {{ $sex->sex }}
                                </option>
                            @endforeach
                        </select>
                        @error('sex')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                </div>


                <!-- Campo Description -->
                <div class="mb-4">
                    <label for="description" class="text-gray-600">Description</label>
                    <textarea name="description" rows="4" placeholder="Enter a description"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">{{ old('description', $pet->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campo Tags (Select múltiple) -->
                <div class="mb-4">
                    <label class="text-gray-600">Tags</label>
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($tags as $tag)
                            <div class="flex items-center">
                                <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]"
                                    value="{{ $tag->id }}" class="mr-2"
                                    @if (in_array($tag->id, old('tags', $pet->tags->pluck('id')->toArray()))) checked @endif>
                                <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('tags')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Campos para la card (color e icono) -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Campo Color (Select) -->
                    <div class="mb-4">
                        <label for="bg_color" class="text-gray-600">Color de fondo</label>
                        <select id="bg_color" name="bg_color"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
                            onchange="this.style.backgroundColor = this.options[this.selectedIndex].value;">
                            <option value="" disabled>Select a color</option>
                            @foreach ($bg_colors as $bg_color)
                                <option style="background-color: {{ $bg_color->bg_color }};"
                                    value="{{ $bg_color->bg_color }}"
                                    @if (old('bg_color', $bg_color->bg_color) == $pet->bg_color) selected @endif>
                                </option>
                            @endforeach
                        </select>
                        @error('bg_color')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <script>
                        //Para que aparezca de color el select deacuerdo al seleccionado
                        window.onload = function() {
                            var select = document.getElementById("bg_color");
                            select.style.backgroundColor = select.options[select.selectedIndex].value;
                        }
                    </script>

                    <!-- Campo Icono (Select) -->
                    <div class="mb-4">
                        <label for="icon" class="text-gray-600">Icono <i id="selected-icon"
                                class="{{ $pet->icon }}"></i></label>
                        <select id="icon" name="icon"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"
                            onchange="document.getElementById('selected-icon').className = this.value;">
                            <option value="" disabled>Select an icon</option>
                            @foreach ($icons as $icon)
                                <option value="{{ $icon->icon }}" @if (old('icon', $icon->icon) == $pet->icon) selected @endif>
                                    {{-- Para que no imprima toda la clase del icono --}}
                                    {{ str_replace(['fa-solid fa-', '-'], ['', ' '], $icon->icon) }}
                                </option>
                            @endforeach
                        </select>
                        @error('icon')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Campo Imágenes -->
                    <div class="mb-4">
                        <label for="images" class="text-gray-600">Images</label>
                        <input type="file" name="files[]" id="file" multiple accept="image/png, image/jpeg">
                        <div id="image-preview"></div>
                        @error('files.*')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        @error('files')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Imagenes actuales-->
                    <div class="image-gallery grid grid-cols-3 gap-6 mb-4">
                        @foreach ($pet->images as $image)
                            <div id="picture" class="bg-white rounded-lg shadow-lg">
                                <img class="w-full h-full object-cover" src="{{ Storage::url($image->url) }}"
                                    alt="{{ $pet->name }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Botón de Enviar -->
                    <div class="ml-auto">
                        <button type="submit"
                            class=" px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Actualizar
                        </button>
                    </div>

            </form>
        @endif
            <script>
                document.getElementById("file").addEventListener('change', cambiarImagen);

                function cambiarImagen(event) {
                    var files = event.target.files;
                    var imagePreview = document.getElementById("image-preview");

                    // Limpiar el div de previsualización
                    imagePreview.innerHTML = '';

                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var reader = new FileReader();
                        reader.onload = (event) => {
                            var img = document.createElement('img');
                            img.src = event.target.result;
                            img.className = "w-32 h-32 m-1 object-cover inline-block"; // establecer las clases de la imagen

                            imagePreview.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    }
                }
            </script>

</x-app-layout>
