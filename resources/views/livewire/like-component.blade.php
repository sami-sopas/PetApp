<a href="{{ route('likelist') }}" class="pr-5 mt-2">
    <span class="relative inline-block">
        <i class="fa-solid fa-heart text-2xl text-red-500"></i>

        @if (Cart::count() > 0)
            <span
                class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
                {{ Cart::count() }}
            </span>
        @endif
    </span>
</a>
