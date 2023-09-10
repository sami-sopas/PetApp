<x-app-layout>
    <div class="container mx-auto py-8 px-8">

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <!-- Imagen -->
            <div class="col-span-2">
                <figure>
                    <img class="w-80 h-80 rounded-lg object-cover object-center" src="{{ Storage::url($pet->image->url) }}" alt="imagen-{{ $pet->name }}">
                </figure>
               
            </div>
            <!-- Datos -->
            <div class=" p-5">
                <h2 class="text-2xl font-bold mb-4">Hola, mi nombre es: {{ $pet->name }}</h2>
                <h3 class="text-light text-gray-500">ID: {{ $pet->id }}</h3>
                <span>Sexo: {{ $pet->sex}}</span> <br>
                <span>Tamaño: {{$pet->size}}</span> <br>
                <span>Color: {{$pet->color}}</span> <br> 
                <span>Edad: </span> <br>
                <span>Ubicacion: {{$pet->user->state}}</span> <br>
            </div>
        </div>

        <!-- Descripcion -->
        <div class="mt-5">
            <h4 class="font-bold">Descripcion:</h4>
            <div class="text-base">
                {{$pet->description}}
            </div>
        </div>
        
        
        
</x-app-layout>