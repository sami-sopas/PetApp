<x-app-layout>
    <div class="container mx-auto py-8 px-8">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
            <!-- Imagen -->
            <div class="col-span-4 sm:col-span-4 md:col-span-1 lg:col-span-1 flex items-center justify-center">
                <img class="w-96 h-96 rounded-lg object-cover object-center" src="{{ Storage::url($pet->image->url) }}" alt="imagen-{{ $pet->name }}">
            </div>
            <!-- Datos -->
            <div class="col-span-6 sm:col-span-6 md:col-span-1 lg:col-span-1 flex flex-col justify-center items-center my-5 md:mt-8 text-center">
                <h2 class="text-2xl font-bold mb-4">Hola, mi nombre es: {{ $pet->name }}</h2>
                <h3 class="text-light text-gray-500">ID: {{ $pet->id }}</h3>
                <span>Sexo: {{ $pet->sex}}</span> <br>
                <span>Tamaño: {{$pet->size}}</span> <br>
                <span>Color: {{$pet->color}}</span> <br> 
                <span>Edad: {{$pet->age}}</span> <br>
                <span>Ubicación: {{$pet->user->state}}</span> <br>
                <div>
                    @foreach ($pet->tags as $tag)
                        <a class="inline-block rounded-full bg-slate-600 text-white p-1 text-light">
                             {{$tag->name}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Descripcion -->
        <div class="mx-12 mt-5 bg-yellow-200 rounded-lg p-3">
            <h4 class="font-bold">Descripcion:</h4>
            <div class="">
                {{$pet->description}}
            </div>
        </div>

        <!-- Mostrar mascotas relacionadas -->
        <div class="mx-12 mt-6">
            <h1 class="text-3xl font-bold">
                Tambien te podria gustar...
            </h1>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($similars as $similar)
                    <article>
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-auto">
                            <a href="#">
                                <img class="rounded-lg" src="{{ Storage::url($similar->image->url) }}" alt="imagen-{{ $similar->name }}">
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $similar->name }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $similar->size }} ● {{ $similar->sex }}
                                </p>
                                {{-- Aquí le enviamos como parámetro la mascota actual --}}
                                <a href="{{ route('pets.show',$similar) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Ver perfil
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>            
        </div>
   
        
        
        
</x-app-layout>