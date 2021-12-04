<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @foreach ($menu as $item)
        <div class="coffee-menu-box">
            <div class="coffee-menu-img">
                <img src="{{ asset('storage/' . $item->photo) }}" class="img-responsive img-curve">
            </div>

            <div class="coffee-menu-desc">
                <h3>{{ $item->name }}</h3>
                <p class="coffee-price">IDR {{ $item->price }}</p>
                <p class="coffee-detail">
                    {{ $item->description }}
                </p>
                <br>

                <button type="button" @auth
                    wire:click="addcart('{{ $item->id }}')"
                @endauth class="btn btn-order">add to cart</button>
            </div>
        </div>
    @endforeach
</div>
