<x-app-layout>
    <div class="container bg-red-500 mx-auto py-8">
        {{-- Los pets son enviados desde el pet Controller --}}

        <div class="grid grid-cols-3 grid-rows-3 gap-6">

            @foreach ($pets as $pet)
                <article>
                  
                    <img src="{{ Storage::url($pet->image->url) }}" alt="">


                </article>
            @endforeach

        </div>
    </div>

</x-app-layout>
