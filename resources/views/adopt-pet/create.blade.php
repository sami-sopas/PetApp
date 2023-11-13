<x-app-layout>

    <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header h-44">
        <div class="container-1440 full-width">
            <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                    <h1 class="headline tilt-left"><span class="spark-left">Creando</span> publicacion </h1>
                </div>
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c31144" class="heading-row-2">
                    <h1 class="headline tilt-right">para dar en adopcion a mascota.</h1>
                </div>
            </div>
    </header>

    <div class="container mx-auto my-10">
        {{-- Formulario --}}
        <form method="POST" action="{{ route('adopt-pet.store') }}"
            class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Mascota en adopción</h2>

            <!-- Campo Name -->
            <div class="mb-4">
                <label for="name" class="text-gray-600">Name</label>
                <input type="text" name="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('name') border-red-500 @enderror" />
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campos Categoria y Size (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Categoria (Select) -->
                <div class="mb-4">
                    <label for="category" class="text-gray-600">Categoria</label>
                    <select name="category_id"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('color_id') border-red-500 @enderror">
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                    @error('category_id')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo Size (Select) -->
                <div class="mb-4">
                    <label for="size" class="text-gray-600">Size</label>
                    <select id="size" name="size"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('size') border-red-500 @enderror">
                        <option value="" disabled selected>Select a size</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->size }}">{{ $size->size }}</option>
                        @endforeach
                    </select>
                    @error('size')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Campos Sex y Age (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Sex (Select) -->
                <div class="mb-4">
                    <label for="sex" class="text-gray-600">Sex</label>
                    <select id="sex" name="sex"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('sex') border-red-500 @enderror">
                        <option value="" disabled selected>Select a sex</option>
                        @foreach ($sexs as $sex)
                            <option value="{{ $sex->sex }}">{{ $sex->sex }}</option>
                        @endforeach
                    </select>
                    @error('sex')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo Color (Select) -->
                <div class="mb-4">
                    <label for="color" class="text-gray-600">Color</label>
                    <select id="color" name="color_id"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('color_id') border-red-500 @enderror">
                        <option value="" disabled selected>Select a color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach

                    </select>
                    @error('color_id')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Campo Description -->
            <div class="mb-4">
                <label for="description" class="text-gray-600">Description</label>
                <textarea name="description" rows="4" placeholder="Enter a description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('description') border-red-500 @enderror"></textarea>
                @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Tags (Select múltiple) -->
            <div class="mb-4">
                <label class="text-gray-600">Tags</label>
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($tags as $tag)
                        <div class="flex items-center">
                            <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]"
                                value="{{ $tag->id }}" class="mr-2 rounded @error('tags') border-red-500 @enderror">
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                    @error('tags')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Campos para la card (color e icono) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Color (Select) -->
                <div class="mb-4">
                    <label for="bg_color" class="text-gray-600">Color de fondo</label>
                    <select id="bg_color" name="bg_color"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('bg_color') border-red-500 @enderror"
                        onchange="this.style.backgroundColor = this.options[this.selectedIndex].value;">
                        <option value="" disabled selected>Select a color</option>
                        @foreach ($bg_colors as $bg_color)
                            <option style="background-color: {{ $bg_color->bg_color }};" value="{{ $bg_color->bg_color }}"></option>
                        @endforeach
                    </select>
                    @error('bg_color')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo Icono (Select) -->
                <div class="mb-4">
                    <label for="icon" class="text-gray-600">Icono <i id="selected-icon" class=""></i></label>
                    <select id="icon" name="icon"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400 @error('icon') border-red-500 @enderror"
                        onchange="document.getElementById('selected-icon').className = this.value;">
                        <option value="" disabled selected>Select an icon</option>
                        @foreach ($icons as $icon)
                            <option value="{{ $icon->icon }}">
                                {{-- Para que no imprima toda la clase del icono--}}
                                {{ str_replace(['fa-solid fa-', '-'], ['', ' '], $icon->icon) }}
                            </option>
                        @endforeach
                    </select>
                    @error('icon')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
                
            </div>

            <!-- Campo Imágenes -->
            <div class="mb-4">
                <label for="images" class="text-gray-600">Images</label>
                <input type="file" name="files[]" id="file" multiple accept="image/*">
                <div id="image-preview"></div>
                @error('files.*')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                @error('files')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!--Previsualizacion-->
            <div id="image-preview"></div>

            
            <!-- Botón de Enviar -->
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <button type="submit"
                        class=" px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Enviar
                    </button>
                </div>
            </div>
        </form>

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
