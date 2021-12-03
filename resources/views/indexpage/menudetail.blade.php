<x-apps-layout>
    <section class="coffee-menu">
        <div class="coffee-container">
            <h1 class="heading"><span>coffees menu</span></h1>
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

                        <a href="#" class="btn btn-order">add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="clearfix"></div>

    </section>
</x-apps-layout>
