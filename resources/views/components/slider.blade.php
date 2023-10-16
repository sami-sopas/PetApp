<div class="container mx-auto my-5 px-4">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative grid grid-cols-2 w-full h-96 md:h-96 bg-gray-100 rounded-lg p-4"
            style="overflow: hidden;">

            @foreach ($pets as $pet)
            <!-- Elemento del carrusel para cada mascota en $pets -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="relative h-96">
                    <img src="{{ Storage::url($pet->image->url) }}" class="absolute w-1/3 h-full object-cover rounded-lg" alt="{{ $pet->name }}">
                </div>
                <div class="absolute top-0 right-0 w-2/3 h-full p-8 text-left flex flex-col justify-center">
                    <h2 class="text-2xl font-bold">Soy {{ $pet->name }}</h2>
                    <p class="mt-5">{{ $pet->sex }}</p>
                    <p>Y soy de {{ $pet->user->state->name }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-400 dark:bg-gray-800/30 group-hover-bg-white/50 dark:group-hover-bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-400 dark:bg-gray-800/30 group-hover-bg-white/50 dark:group-hover-bg-gray_800/60 group-focus:ring-4 group-focus-ring-white dark:group-focus-ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</div>