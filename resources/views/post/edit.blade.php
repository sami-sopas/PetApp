<x-app-layout>
    <header data-w-id="bea9b7ed-f748-980a-924e-d39fafb4bf59" class="homepage-header h-44">
        <div class="container-1440 full-width">
            <div class="heading-container text-4xl sm:text-5xl md:text-4xl lg:text-6xl xl:text-6xl">
                <div data-w-id="df8ba497-8e89-eee6-5eb6-a66803c3113f" class="heading-row-1">
                    <h1 class="headline tilt-left"><span class="spark-left">Editando a</span> {{$pet->name}} </h1>
                </div>
            </div>
    </header>

    @if(session('info'))
        <strong>{{session('info')}}</strong>
    @endif

    <div class="container mx-auto mt-10">
        {{-- Formulario --}}
        <form 
            method="POST" 
            action="{{ route('pet.update', $pet) }}"
            class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg" 
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h2 class="text-2xl font-bold mb-4">Editar mascota</h2>

            <!-- Campo Name -->
            <div class="mb-4">
                <label for="name" class="text-gray-600">Name</label>
                <input type="text" name="name" placeholder="Enter your name" value="{{$pet->name}}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400" />
            </div>

            <!-- Campos Categoria y Status (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Categoria (Select) -->
                <div class="mb-4">
                    <label for="category" class="text-gray-600">Categoria</label>
                    <select id="category" name="category_id"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $pet->category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <!-- Campo Status (Select) -->
                <div class="mb-4">
                    <label for="status" class="text-gray-600">Status</label>
                    <select id="status" name="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        @foreach ($statuses as $statusOption)
                            @if ($statusOption->status != $pet->status)
                                <option value="{{ $statusOption->status }}">{{ $statusOption->status }}</option>
                            @endif
                        @endforeach
                        <option value="{{ $pet->status }}" selected>{{ $pet->status }}</option>
                    </select>
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
                            <option value="{{ $color->id }}" {{ $color->id == $pet->color->id ? 'selected' : '' }}>
                                {{ $color->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <!-- Campo Size (Select) -->
                <div class="mb-4">
                    <label for="size" class="text-gray-600">Tamaño</label>
                    <select id="size" name="size" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        @foreach ($sizes as $size)
                            <option value="{{ $size->size }}" {{ $size->size == $pet->size ? 'selected' : '' }}>
                                {{ $size->size }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
            </div>

            <!-- Campos Sex y Age (en la misma fila) -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Campo Sex (Select) -->
                <div class="mb-4">
                    <label for="sex" class="text-gray-600">Sex</label>
                    <select id="sex" name="sex" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">
                        @foreach ($sexs as $sex)
                            <option value="{{ $sex->sex }}" {{ $sex->sex == $pet->sex ? 'selected' : '' }}>
                                {{ $sex->sex }}
                            </option>
                        @endforeach
                    </select>
                </div>
                

                <!-- Campo Age (Select) -->
                <div class="mb-4">
                    <label for="age" class="text-gray-600">Age</label>
                    <select id="age" name="age" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">             
                        @foreach ($ages as $age)
                            <option value="{{ $age->age }}" {{ $age->age == $pet->age ? 'selected' : '' }}>
                                {{ $age->age }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
            </div>

            <!-- Campo Description -->
            <div class="mb-4">
                <label for="description" class="text-gray-600">Description</label>
                <textarea name="description" rows="4" placeholder="Enter a description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-400">{{$pet->description}}</textarea>
            </div>

            <!-- Campo Tags (Select múltiple) -->
            <div class="mb-4">
                <label class="text-gray-600">Tags</label>
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($tags as $tag)
                        <div class="flex items-center">
                            <input type="checkbox" id="tag_{{ $tag->id }}" name="tags[]"
                                value="{{ $tag->id }}" class="mr-2" @if(in_array($tag->id, $pet->tags->pluck('id')->toArray())) checked @endif>
                            <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!--Previsualizacion de imagenes-->
            <div class="image-gallery grid grid-cols-3 gap-4">
                @foreach ($pet->images as $image)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-full object-cover" src="{{ Storage::url($image->url) }}" alt="{{ $pet->name }}">
                    </div>
                @endforeach
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
                        Actualizar
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