<x-apps-layout>
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>coffee taste</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias
                    sit necessitatibus, aliquid ex minima at!</p>
                <a href="#" class="btn">buy now</a>
            </div>

            <div class="swiper coffee-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="foto/kopi-1.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="foto/kopi-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="foto/kopi-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="foto/kopi-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="foto/kopi-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="foto/kopi-6.png" alt=""></a>
                </div>
                <img src="foto/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- service section -->

    <section class="service" id="service">

        <h1 class="heading"><span>our service</span></h1>

        <div class="service-container">

            <div class="icons">
                <i class="fas fa-shopping-cart"></i>
                <div class="content">
                    <h3>Order</h3>
                    <p>choose your favorite coffee</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <div class="content">
                    <h3>free shipping</h3>
                    <p>order over IDR 100,000</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-box"></i>
                <div class="content">
                    <h3>delivered</h3>
                    <p>order delivered safely</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-lock"></i>
                <div class="content">
                    <h3>secure payment</h3>
                    <p>100% payment security guarantee</p>
                </div>
            </div>
        </div>

    </section>


    <!-- featured section -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured coffes</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">
              @livewire('addcartfront')




            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- about us section -->

    <section class="about">

        <div class="content">
            <h3>about us</h3>
            <h1>We make good <br> & tasty coffe</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                quaerat at fuga dolorum natus velit.</p>
        </div>

        <div class="image">
            <img src="foto/about-us-2.png" alt="">
        </div>

    </section>


    <!-- reviews section -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>client's reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">
                @foreach ($review as $item)
                    <div class="swiper-slide box">
                        <img src="foto/user2.png" alt="">
                        @isset($item->user->name)
                            <h3>{{ $item->user->name }}</h3>
                        @else
                            <h3>anonim</h3>
                        @endisset
                        @isset($item->text)
                            <p>{{ $item->text }}</p>
                        @endisset
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>

    </section>


    <!-- blogs section -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                @foreach ($blog as $item)
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="foto/comingsoon.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>{{ $item->title }}</h3>
                            <h5><{{ $item->Category->name }}</h5>
                            <p>{!! Str::limit(strip_tags($item->text), 100, '...') !!}</p>
                            <a href="/read/{{ $item->slug }}" class="btn">read more</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

    </section>


</x-apps-layout>
