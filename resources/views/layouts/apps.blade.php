<!-- The only way to do great work is to love what you do. - Steve Jobs -->
<!-- The only way to do great work is to love what you do. - Steve Jobs -->
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <a href="/#home">home</a>
                <a href="/#service">service</a>
                <a href="/#featured">featured</a>
                <a href="/menu-detail">menu</a>
                <a href="/#reviews">reviews</a>
                <a href="/#blogs">blogs</a>
            </nav>
        </div>

    </header>

    <!-- bottom navbar -->

    <nav class="bottom-navbar">
        <a href="/#home" class="fas fa-home"></a>
        <a href="/#service" class="fas fa-hand-holding-heart"></a>
        <a href="/#featured" class="fas fa-list"></a>
        <a href="/menu-detail" class="fas fa-tags"></a>
        <a href="/#reviews" class="fas fa-comments"></a>
        <a href="/#blogs" class="fab fa-blogger-b"></a>
    </nav>

    <!-- home section -->
    {{ $slot }}

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
