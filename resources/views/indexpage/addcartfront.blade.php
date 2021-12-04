
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @foreach ($menu as $item)
        <div class="swiper-slide box">
            <div class="icons">
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="{{ asset('storage/' . $item->photo) }}" alt="">
            </div>
            <div class="content">
                <h3>{{ $item->name }}</h3>
                <div class="price">IDR {{ $item->price }} </div>
                <button type="button" wire:click="addcart({{ $item->id }})" class="btn">add to cart</button>
            </div>
        </div>
    @endforeach

