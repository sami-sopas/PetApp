<div>
    <div class="container">
        <section class="section wide no-padding">
            <div class="w-dyn-list">
                <div role="list" class="pet-profiles-grid w-dyn-items">
                    {{-- Recuperar items de la wishlist --}}
                    @php
                        $likeItems = Cart::content()->pluck('id');
                    @endphp
                    @forelse ($pets as $pet)
                        <div role="listitem" class="w-dyn-item my-5 mx-5">
                            <a href="#" class="profile-card-link-block w-inline-block">
                                <div class="flex-horizontal">
                                    <div class="profile-card-half">
                                        <div 
                                            class="content-padding profile-cards">
                                            <div class="profile-icon">
                                                {{-- Remover los items --}}
                                                <a href="#" wire:click.prevent="removeFromLikeList({{$pet->id}})">
                                                    <i class="fa-solid fa-heart"></i>
                                                </a>
                                            </div>
                                            <h3 class="profile-descriptor">
                                                <a href="{{ route('pet.show',$pet->id) }}">{{ $pet->name }}</a>
                                            </h3>
                                            <div>
                                                <div 
                                                    class="badge-outline white">
                                                    <h6>{{ $pet->age }}</h6>
                                                </div>
                                            </div>
                                            <div class="long-fur-pattern"></div>
                                        </div>
                                    </div>
                                    <div 
                                        class="profile-card-half">
                                        <img src="{{ Storage::url($pet->images->first()->url) }}" alt=""
                                            sizes="(max-width: 767px) 50vw, (max-width: 991px) 25vw, 17vw"
                                            class="pet-thumbnail-image" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        <div>
                            No tienes nada imbecil
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</div>
