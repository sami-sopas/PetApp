<div>
    {{--Imprimir doggos --}}
    <section class="section wide no-padding">
        <div class="w-dyn-list">
            <div role="list" class="pet-profiles-grid w-dyn-items">
                {{-- Recuperar items de la wishlist --}}
                @php
                    $likeItems = Cart::content()->pluck('id');
                @endphp
                @foreach ($dogs as $dog)
                    <div role="listitem" class="w-dyn-item my-5 mx-5">
                        <a href="#" class="profile-card-link-block w-inline-block">
                            <div class="flex-horizontal">
                                <div class="profile-card-half">
                                    <div style="background-color: {{ $dog['background_color'] }}"
                                        class="content-padding profile-cards">
                                        <div class="profile-icon">
                                            {{-- Comparar lo de la lista con lo existente para ver cuales tendran el corazon lleno --}}
                                            @if ($likeItems->contains($dog->id))
                                                {{-- Cuando coincide, lo marcamos como likeado, pero si ya esta likeado, lo quita--}}
                                                <a href="#" wire:click.prevent="removeFromLikeList({{$dog->id}})">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            @else
                                                {{-- Cuando no coincide, sin marcar--}}
                                                <a href="#" wire:click.prevent="addToLikeList({{$dog->id}},'{{$dog->name}}')">
                                                    <i class="fa-regular fa-heart"></i>
                                                </a>
                                            @endif
                                        </div>
                                        <h3 class="profile-descriptor">
                                            <a href="{{ route('pet.show',$dog) }}">{{ $dog->name }}</a>
                                        </h3>
                                        <div>
                                            <div style="background-color: {{ $dog['badge_color'] }}"
                                                class="badge-outline white">
                                                <h6>{{ $dog->age }}</h6>
                                            </div>
                                        </div>
                                        <div class="long-fur-pattern"></div>
                                    </div>
                                </div>
                                <div style="background-color: {{ $dog['background_color'] }}"
                                    class="profile-card-half">
                                    <img src="{{ Storage::url($dog->images->first()->url) }}" alt=""
                                        sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                                        class="pet-thumbnail-image" />
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>