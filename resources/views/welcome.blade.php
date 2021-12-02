<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri Coffee</title>

    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.1/css/all.min.css">

    <!-- css file link  -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

    <!-- header section -->

    <header class="header-all">

        <div class="header-1">

            <a href="index.html" class="logo"> <i class="fas fa-coffee"></i> AgriCoffee </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here" id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="{{ route('login') }}" class="fas fa-user"></a>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar-2">
                <a href="#home">home</a>
                <a href="#service">service</a>
                <a href="#featured">featured</a>
                <a href="menu-detail.html">menu</a>
                <a href="#reviews">reviews</a>
                <a href="#blogs">blogs</a>
            </nav>
        </div>

    </header>

    <!-- bottom navbar -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#service" class="fas fa-hand-holding-heart"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="menu-detail.html" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fab fa-blogger-b"></a>
    </nav>

    <!-- home section -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>coffee taste</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitatibus, aliquid ex minima at!</p>
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

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>cappucino</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>flat white</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>espresso</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>americano</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>latte</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="foto/kopi-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>mocha</h3>
                        <div class="price">IDR 20,000 <span>IDR 25,000</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>


    <!-- community section -->

    <section class="community">

        <form action="">
            <h3>Join AgriCoffee Community</h3>
            <p>Coffee lovers, welcome to our commumity! AgriCoffee community has 0 member and their number is still zero.</p>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>


    <!-- menu section -->

    <section class="menu" id="">

        <h1 class="heading"> <span>our menu</span> </h1>

        <div class="swiper menu-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>cappucino</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>flat white</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>espresso</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>americano</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>latte</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper menu-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>mocha</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ice cappucino</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="foto/kopi-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>ice americano</h3>
                        <div class="price">IDR 20,000 </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>


    <!-- about us section -->

    <section class="about">

        <div class="content">
            <h3>about us</h3>
            <h1>We make good <br> & tasty coffe</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora quaerat at fuga dolorum natus velit.</p>
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

                <div class="swiper-slide box">
                    <img src="foto/user2.png" alt="">
                    <h3>anonim</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="foto/user2.png" alt="">
                    <h3>anonim</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="foto/user2.png" alt="">
                    <h3>anonim</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="foto/user2.png" alt="">
                    <h3>anonim</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="foto/user2.png" alt="">
                    <h3>anonim</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- blogs section -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="foto/comingsoon.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="foto/comingsoon.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="foto/comingsoon.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="foto/comingsoon.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- footer section -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>menu links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
                <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#menu"> <i class="fas fa-arrow-right"></i> menu </a>
                <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#blogs"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#service"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> jawa barat </a>
                <a href="#"> <i class="fas fa-phone"></i> +62 888 8888 8888 </a>
                <a href="#"> <i class="fas fa-envelope"></i> agricoffee@gmail.com </a>
                <img src="foto/jabar-map.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>

        <div class="credit"> &#169; 2021 <span>AgriCoffee.</span> all rights reserved. </div>

    </section>

    <!-- loader -->

    <div class="loader-container">
        <img src="foto/loader-coffee-2.gif" alt="">
    </div>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="/js/script.js"></script>

</body>

</html>