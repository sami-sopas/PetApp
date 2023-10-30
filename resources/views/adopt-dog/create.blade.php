<x-app-layout>
    <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header h-44">
        <div class="container-1440 full-width">
            <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                    <h1 class="headline tilt-left"><span class="spark-left">Creando</span> publicacion </h1>
                </div>
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c31144" class="heading-row-2">
                    <h1 class="headline tilt-right">para dar en adopcion a doggo.</h1>
                </div>
            </div>
    </header>

    <div class="container mx-auto mt-10">
        {{-- Formulario --}}
        <form method="POST" action="{{ route('adopt-dog.store') }}"
            class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Perro en adopción</h2>

            <!-- Campo Name -->
            <div class="mb-4">
                <label for="name" class="text-gray-600">Name</label>
                <input type="text" name="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400" />
            </div>

            <!-- Campos Color y Size (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Color (Select) -->
                <div class="mb-4">
                    <label for="color" class="text-gray-600">Color</label>
                    <select id="color" name="color_id"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="" disabled selected>Select a color</option>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach

                    </select>
                </div>

                <!-- Campo Size (Select) -->
                <div class="mb-4">
                    <label for="size" class="text-gray-600">Size</label>
                    <select id="size" name="size"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="" disabled selected>Select a size</option>
                        @foreach ($sizes as $size)
                            <option value="{{ $size->size }}">{{ $size->size }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Campos Sex y Age (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Sex (Select) -->
                <div class="mb-4">
                    <label for="sex" class="text-gray-600">Sex</label>
                    <select id="sex" name="sex"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="" disabled selected>Select a sex</option>
                        @foreach ($sexs as $sex)
                            <option value="{{ $sex->sex }}">{{ $sex->sex }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Campo Age (Select) -->
                <div class="mb-4">
                    <label for="age" class="text-gray-600">Age</label>
                    <select id="age" name="age"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        <option value="" disabled selected>Select an age</option>
                        @foreach ($ages as $age)
                            <option value="{{ $age->age }}">{{ $age->age }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <!-- Campo Description -->
            <div class="mb-4">
                <label for="description" class="text-gray-600">Description</label>
                <textarea name="description" rows="4" placeholder="Enter a description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400"></textarea>
            </div>

            <!-- Campo Tags (Select múltiple) -->
            <div class="mb-4">
                <label class="text-gray-600">Tags</label>
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($tags as $tag)
                        <div class="flex items-center">
                            <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]"
                                value="{{ $tag->id }}" class="mr-2">
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!--Previsualizacion-->
            <div class="">
                <img id="picture"
                    class="w-32 h-32"
                    src="https://cdn.dribbble.com/users/1201194/screenshots/7197395/media/d5d300c76b56aa290f34cfc39de99c2d.gif"
                    alt="">
            </div>

            <!-- Campo Imágenes -->
            <div class="mb-4">
                <label for="images" class="text-gray-600">Images</label>
                <input type="file" name="files[]" id="file" multiple>
                <div id="image-preview"></div>
                @error('files.*')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                @error('files')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
  

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
            // Imagenes
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event) {
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result)
                }

                reader.readAsDataURL(file);
            }
        </script>


</x-app-layout>
