<a href="{{route('likelist')}}">
    likes
    @if (Cart::count() > 0)
        <span>{{ Cart::count() }}</span>
    @endif
</a>
