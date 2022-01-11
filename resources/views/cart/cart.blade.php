<div>
    {{-- The whole world belongs to you. --}}
    
    @if ($cart->count() == 0)
        belum ada pesanan
    @else
        <div class="cart">
            <div class="products">
                @php
                    $total = 0;
                @endphp
                @foreach ($cart as $item)
                    @php
                        $total += $item->menu->price * $item->quantity;
                    @endphp
                    <div class="product">
                        <img src="{{ asset('storage/' . $item->menu->photo) }}">
                        <div class="product-info">

                            <h3 class="product-name">{{ $item->menu->name }}</h3>
                            <input type="hidden" value="{{ $item->menu->name }}" />
                            <h4 class="product-price">IDR {{ $item->menu->price }}</h4>
                            <input type="hidden" value="{{ $item->menu->name }}" />

                            <p class="product-quantity">Quantity: <button type="button" wire:click="plusone('{{ $item->id }}')"> +
                                </button>{{ $item->quantity }}<button type="button" wire:click="minone('{{ $item->id }}')"> - </button></p>

                            <button class="product-remove" wire:click="removecart('{{ $item->id }}')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                <button class="remove"></button>
                            </button>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="cart-total">
                <p>
                    <span>Total Price</span>

                    <span>IDR {{ $total }}</span>
                </p>
                <p>
                    <select name="type" id="" wire:model="typecart">
                        <option value="onsite" name="onsite">Onsite</option>
                        <option value="delivery" name="delivery">delivery</option>
                    </select>
                </p>
                {{-- <input type="hidden" wire:model='total' /> --}}
                <button wire:click="checkoutcart({{$total}})" class="btn btn-primary">Proceed to Checkout</button>

            </div>
        </div>
    @endif
</div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt fuga quas maiores impedit, fugiat omnis distinctio illum harum repudiandae?Cappucino