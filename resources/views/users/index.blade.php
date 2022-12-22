@extends("users.layouts.users-layout")

@section('pageTitle', 'Funcy Daisy')

@section('content')
    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide">

                        <!-- Hero Slider Background Image Start-->
                        <div class="hero-slide-bg">
                            <img src={{asset("assets.user/media/images/slider/slide1.jpg")}} alt=""/>
                        </div>
                        <!-- Hero Slider Background Image End-->

                        <!-- Hero Slider Container Start -->
                        <div class="container">

                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                        Funcy Daisy <br/>
                                     
                                    </h2>
                                    <p>Bloom With Cuteness</p>
                                    <a href="/products" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>

                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    <!-- Single Hero Slider Item End -->

                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide">

                        <!-- Hero Slider Background Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{asset("assets.user/media/images/slider/slide2.png")}}" alt=""/>
                        </div>
                        <!-- Hero Slider Background Image End -->

                        <!-- Hero Slider Container Start -->
                        <div class="container">
                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                        Trend Fashion <br/>
                                        Collection
                                    </h2>
                                    <p>Best price for quality</p>
                                    <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    <!-- Single Hero Slider Item End -->
                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Feature Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="feature-wrap">
                <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset("assets.user/media/images/icons/feature-icon-2.png")}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Free Shipping</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset("assets.user/media/images/icons/feature-icon-3.png")}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Support 24/7</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset("assets.user/media/images/icons/feature-icon-4.png")}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Money Return</h5>
                                <p>Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset("assets.user/media/images/icons/feature-icon-1.png")}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Order Discount</h5>
                                <p>Onevery order over $150</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Banner Section Start -->
    {{--    <div class="section">--}}
    {{--        <div class="container">--}}

    {{--            <!-- Banners Start -->--}}
    {{--            <div class="row mb-n6 overflow-hidden">--}}
    {{--                <!-- Banner Start -->--}}
    {{--                <div class="col-md-6 col-12 mb-6">--}}
    {{--                    <div class="banner" data-aos="fade-right" data-aos-delay="300">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="/products"><img src="{{asset("assets.user/media/images/banner/YunseoBlazerTop.JPG")}}" alt="Banner Image"></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="small-banner-content">--}}
    {{--                                <h4 class="sub-title">Up to <span>50%</span> Off</h4>--}}
    {{--                                <h3 class="title">Office Dress</h3>--}}
    {{--                                <a href="/products" class="btn btn-primary btn-hover-dark btn-sm">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Banner End -->--}}

    {{--                <!-- Banner Start -->--}}
    {{--                <div class="col-md-6 col-12 mb-6">--}}
    {{--                    <div class="banner" data-aos="fade-left" data-aos-delay="500">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="/products"><img src="{{asset("assets.user/media/images/banner/AreumKnit.jpeg")}}" alt="Banner Image"></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="small-banner-content">--}}
    {{--                                <h4 class="sub-title">Up to <span>40%</span> Off</h4>--}}
    {{--                                <h3 class="title">All Products</h3>--}}
    {{--                                <a href="/products" class="btn btn-primary btn-hover-dark btn-sm">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Banner End -->--}}
    {{--            </div>--}}
    {{--            <!-- Banners End -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    {{--    <div class="section section-padding mt-0">--}}
    {{--        <div class="container">--}}
    {{--            <!-- Section Title & Tab Start -->--}}
    {{--            <div class="row">--}}
    {{--                <!-- Tab Start -->--}}
    {{--                <div class="col-12">--}}
    {{--                    <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">--}}
    {{--                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#tab-product-all">New Arrivals</a></li>--}}
    {{--                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-clothings">Best Sellers</a></li>--}}
    {{--                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-all">Sale Items</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <!-- Tab End -->--}}
    {{--            </div>--}}
    {{--            <!-- Section Title & Tab End -->--}}

    {{--            <!-- Products Tab Start -->--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}
    {{--                    <div class="tab-content position-relative">--}}
    {{--                        <div class="tab-pane fade show active" id="tab-product-all">--}}
    {{--                            <div class="product-carousel">--}}
    {{--                                <div class="swiper-container">--}}
    {{--                                    <div class="swiper-wrapper">--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="300">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/1.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$38.50</span>--}}
    {{--                                                    <span class="old">$42.85</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left" data-aos="fade-up" data-aos-delay="400">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/2.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$14.50</span>--}}
    {{--                                                    <span class="old">$18.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="400">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <span class="badges">--}}
    {{--															<span class="sale">New</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 67%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(2)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$45.50</span>--}}
    {{--                                                    <span class="old">$48.85</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left" data-aos="fade-up" data-aos-delay="500">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/6.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <span class="badges">--}}
    {{--															<span class="sale">Sold</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 80%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(2)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$16.00</span>--}}
    {{--                                                    <span class="old">$18.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="500">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Lather Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(12)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$65.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left" data-aos="fade-up" data-aos-delay="600">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Fabric Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 70%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(09)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$27.00</span>--}}
    {{--                                                    <span class="old">$29.50</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="600">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/11.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Design Source</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(06)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$96.50</span>--}}
    {{--                                                    <span class="old">$100.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left" data-aos="fade-up" data-aos-delay="700">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$22.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10" data-aos="fade-up" data-aos-delay="700">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Lather Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(12)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$65.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left" data-aos="fade-up" data-aos-delay="800">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Fabric Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 70%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(09)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$27.00</span>--}}
    {{--                                                    <span class="old">$29.50</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                    </div>--}}

    {{--                                    <!-- Swiper Pagination Start -->--}}
    {{--                                    <div class="swiper-pagination d-md-none"></div>--}}
    {{--                                    <!-- Swiper Pagination End -->--}}

    {{--                                    <!-- Next Previous Button Start -->--}}
    {{--                                    <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>--}}
    {{--                                    <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>--}}
    {{--                                    <!-- Next Previous Button End -->--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="tab-pane fade" id="tab-product-clothings">--}}
    {{--                            <div class="product-carousel">--}}
    {{--                                <div class="swiper-container">--}}
    {{--                                    <div class="swiper-wrapper">--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/2.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$14.50</span>--}}
    {{--                                                    <span class="old">$18.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/1.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$38.50</span>--}}
    {{--                                                    <span class="old">$42.85</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/11.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Design Source</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(06)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$96.50</span>--}}
    {{--                                                    <span class="old">$100.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(4)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$22.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <span class="badges">--}}
    {{--															<span class="sale">New</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 67%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(2)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$45.50</span>--}}
    {{--                                                    <span class="old">$48.85</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/6.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <span class="badges">--}}
    {{--															<span class="sale">Sold</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 80%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(2)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$16.00</span>--}}
    {{--                                                    <span class="old">$18.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                        <!-- Product Start -->--}}
    {{--                                        <div class="swiper-slide product-wrapper">--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left mb-10">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Lather Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 100%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(12)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$65.00</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                            <!-- Single Product Start -->--}}
    {{--                                            <div class="product product-border-left">--}}
    {{--                                                <div class="thumb">--}}
    {{--                                                    <a href="single-product.html" class="image">--}}
    {{--                                                        <img class="first-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />--}}
    {{--                                                        <img class="second-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />--}}
    {{--                                                    </a>--}}
    {{--                                                    <div class="actions">--}}
    {{--                                                        <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
    {{--                                                        <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
    {{--                                                        <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="content">--}}
    {{--                                                    <h4 class="sub-title"><a href="single-product.html">Fabric Design</a></h4>--}}
    {{--                                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>--}}
    {{--                                                    <span class="ratings">--}}
    {{--															<span class="rating-wrap">--}}
    {{--																<span class="star" style="width: 70%"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="rating-num">(09)</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <span class="price">--}}
    {{--															<span class="new">$27.00</span>--}}
    {{--                                                    <span class="old">$29.50</span>--}}
    {{--                                                    </span>--}}
    {{--                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- Single Product End -->--}}

    {{--                                        </div>--}}
    {{--                                        <!-- Product End -->--}}

    {{--                                    </div>--}}

    {{--                                    <!-- Swiper Pagination Start -->--}}
    {{--                                    <div class="swiper-pagination d-md-none"></div>--}}
    {{--                                    <!-- Swiper Pagination End -->--}}

    {{--                                    <!-- Next Previous Button Start -->--}}
    {{--                                    <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>--}}
    {{--                                    <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>--}}
    {{--                                    <!-- Next Previous Button End -->--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <!-- Products Tab End -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Product Section End -->

    <!-- Banner Fullwidth Start -->
    {{--    <div class="section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-12" data-aos="fade-up" data-aos-delay="300">--}}
    {{--                    <div class="banner">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="shop-grid.html"><img src="assets/images/banner/big-banner.jpg" alt="Banner"></a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Banner Fullwidth End -->

    <!-- Product List Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n8">
                <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="300">
                    <!-- Product List Title Start -->
                    <div class="product-list-title">
                        <h2 class="title pb-3 mb-0">Best Offer</h2>
                        <span></span>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Carousel Start -->
                    <div class="product-list-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

{{--                                    @foreach($products as $product)--}}
{{--                                        <!-- Single Product Start -->--}}
{{--                                        <div class="product mb-6">--}}
{{--                                            <div class="thumb">--}}
{{--                                                <a href="{{route('product.details', $product->slug)}}" class="image">--}}
{{--                                                    <img class="first-image" src="{{asset('storage/'.$product->image)}}" alt="Product" />--}}
{{--                                                    <img class="second-image" src="{{asset('storage/'.$product->image)}}" alt="Product" />--}}
{{--                                                </a>--}}
{{--                                                <div class="actions">--}}
{{--                                                    <a href="#" class="action wishlist"><i class="pe-7s-like"></i></a>--}}
{{--                                                    <a href="#" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>--}}
{{--                                                    <a href="#" class="action compare"><i class="pe-7s-shuffle"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="content">--}}
{{--                                                <h4 class="sub-title"><a href="{{route('product.details', $product->slug)}}">{{$product->category->name}}</a></h4>--}}
{{--                                                <h5 class="title"><a href="{{route('product.details', $product->slug)}}">{{$product->name}}</a></h5>--}}
{{--                                                <span class="ratings">--}}
{{--                                                    <span class="rating-wrap">--}}
{{--                                                        <span class="star" style="width: 70%"></span>--}}
{{--                                                    </span>--}}
{{--                                                    <span class="rating-num">(09)</span>--}}
{{--                                                </span>--}}
{{--                                                <span class="price">--}}
{{--                                                    <span class="new">${{$product->price}}</span>--}}
{{--                                                    <span class="old">${{$product->price}}</span>--}}
{{--                                                </span>--}}
{{--                                                <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Single Product End -->--}}

{{--                                    @endforeach--}}

{{--                                    {{$products->links()}}--}}

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">

                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/1.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/2.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/3.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                            <span class="price">
													<span class="new">$21.00</span>
                                            <span class="old">$22.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/4.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/6.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                            <span class="price">
													<span class="new">$66.50</span>
                                            <span class="old">$70.55</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/4.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/1.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-md-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                    </div>
                    <!-- Product List Carousel End -->

                </div>
                <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="500">
                    <!-- Product List Title Start -->
                    <div class="product-list-title">
                        <h2 class="title pb-3 mb-0">New Products</h2>
                        <span></span>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Start -->
                    <div class="product-list-carousel-2">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/6.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                            <span class="price">
													<span class="new">$66.50</span>
                                            <span class="old">$70.55</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/4.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/1.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/7.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/9.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                            <span class="price">
													<span class="new">$65.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/11.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/3.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                            <span class="price">
													<span class="new">$44.00</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-md-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->
                        </div>
                    </div>
                    <!-- Product List End -->
                </div>
                <div class="col-md-6 col-lg-4 col-12 mb-8" data-aos="fade-up" data-aos-delay="700">
                    <!-- Product List Title Start -->
                    <div class="product-list-title">
                        <h2 class="title pb-3 mb-0">Best Sellers</h2>
                        <span></span>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Start -->
                    <div class="product-list-carousel-3">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/7.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/9.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                            <span class="price">
													<span class="new">$65.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/11.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/3.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                            <span class="price">
													<span class="new">$44.00</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                                <!-- Product List Wrapper Start -->
                                <div class="swiper-slide product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/1.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/2.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/3.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                            <span class="price">
													<span class="new">$21.00</span>
                                            <span class="old">$22.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/4.jpg" alt="Product"/>
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product"/>
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                </div>
                                <!-- Product List Wrapper End -->

                            </div>

                            <!-- Swiper Pagination Start -->
                            <!-- <div class="swiper-pagination d-md-none"></div> -->
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-product-list-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-product-list-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                    </div>
                    <!-- Product List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product List End -->

    <!-- Banner Section Start -->
    {{--    <div class="section">--}}
    {{--        <div class="container">--}}

    {{--            <!-- Banners Start -->--}}
    {{--            <div class="row mb-n6">--}}
    {{--                <!-- Banner Start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6">--}}
    {{--                    <div class="banner" data-aos="fade-up" data-aos-delay="300">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="shop-grid.html"><img src="assets/images/banner/banner-1.jpg" alt=""></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="small-banner-content">--}}
    {{--                                <h4 class="sub-title">Sun Hat</h4>--}}
    {{--                                <h3 class="title">Get Offer <br />For Summer</h3>--}}
    {{--                                <a href="shop-grid.html" class="btn btn-dark btn-sm">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Banner End -->--}}

    {{--                <!-- Banner Start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6">--}}
    {{--                    <div class="banner" data-aos="fade-up" data-aos-delay="500">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="shop-grid.html"><img src="assets/images/banner/banner-2.jpg" alt=""></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="small-banner-content">--}}
    {{--                                <h4 class="sub-title">Ladies Bag</h4>--}}
    {{--                                <h3 class="title">Buy One <br />Get One Free</h3>--}}
    {{--                                <a href="shop-grid.html" class="btn btn-dark btn-sm">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Banner End -->--}}

    {{--                <!-- Banner Start -->--}}
    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6">--}}
    {{--                    <div class="banner" data-aos="fade-up" data-aos-delay="700">--}}
    {{--                        <div class="banner-image">--}}
    {{--                            <a href="shop-grid.html"><img src="assets/images/banner/banner-3.jpg" alt=""></a>--}}
    {{--                        </div>--}}
    {{--                        <div class="info">--}}
    {{--                            <div class="small-banner-content">--}}
    {{--                                <h4 class="sub-title">Smart Watch</h4>--}}
    {{--                                <h3 class="title">20% Off <br />Smart Watch</h3>--}}
    {{--                                <a href="shop-grid.html" class="btn btn-dark btn-sm">Shop Now</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!-- Banner End -->--}}

    {{--            </div>--}}
    {{--            <!-- Banners End -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Banner Section End -->

    <!-- Product Deal Section Start -->
    <div class="section section-padding mt-0 overflow-hidden">
        <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start -->
                <div class="col-12">
                    <div class="section-title-produt-tab-wrapper">
                        <div class="section-title m-0" data-aos="fade-right" data-aos-delay="300">
                            <h1 class="title">Daily Deals</h1>
                        </div>
                        <ul class="product-tab-nav nav mt-n3" data-aos="fade-left" data-aos-delay="300">
                            <li class="nav-item"><a class="nav-link active mt-3" data-bs-toggle="tab" href="#product-deal-all">New Arrivals</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-clothings">Best Sellers</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab" href="#product-deal-all">Sale Items</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="product-deal-all">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{asset("assets.user/media/images/products/medium-size/1.jpg")}}" alt="Product"/>
                                                    </a>
                                                    <span class="badges">
															<span class="sale">-30%</span>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/22"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Enjoy The Rest T-Shirt</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$38.00</span>
                                                    <span class="old">$42.05</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->

                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper" data-aos="fade-left" data-aos-delay="600">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{asset("assets.user/media/images/products/medium-size/8.jpg")}}" alt="Product"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Classic Trucker Hat</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 65%"></span>
                                                    </span>
                                                    <span class="rating-num">(3)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$07.00</span>
                                                    <span class="old">$08.40</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->

                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{asset("assets.user/media/images/products/medium-size/9.jpg")}}" alt="Product"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Basic Lather Sneaker</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">(2)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$88.00</span>
                                                    <span class="old">$92.50</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-deal-clothings">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper mb-n10">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{asset("assets.user/media/images/products/medium-size/9.jpg")}}" alt="Product"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Basic Lather Sneaker</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 80%"></span>
                                                    </span>
                                                    <span class="rating-num">(2)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$88.00</span>
                                                    <span class="old">$92.50</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->

                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper mb-n10">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="single-product-sale.html" class="image">
                                                        <img src="{{asset("assets.user/media/images/products/medium-size/1.jpg")}}" alt="Product"/>
                                                    </a>
                                                    <span class="badges">
															<span class="sale">-30%</span>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex" data-countdown="2022/12/24"></div>
                                                    </div>
                                                    <h4 class="sub-title"><a href="single-product-sale.html">Studio Design</a></h4>
                                                    <h5 class="title"><a href="single-product-sale.html">Enjoy The Rest T-Shirt</a></h5>
                                                    <span class="ratings">
															<span class="rating-wrap">
																<span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
															<span class="new">$38.00</span>
                                                    <span class="old">$42.05</span>
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-right"></i></div>
                                    <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none"><i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Tab End -->

        </div>
    </div>
    <!-- Product Deal Section End -->

    <!-- Brand Logo Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Brand Logo Wrapper Start -->
                    <div class="brand-logo-carousel p-0">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="300">
                                    <a href="#"><img src="{{asset("assets.user/media/images/brand-logo/IMG_0499.PNG")}}" width="240px" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="{{asset("assets.user/media/images/brand-logo/IMG_0494.PNG")}}" width="240px" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="500">
                                    <a href=""><img src="{{asset("assets.user/media/images/brand-logo/IMG_0495.PNG")}}" width="240px" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="600">
                                    <a href="#"><img src="{{asset("assets.user/media/images/brand-logo/IMG_0496.PNG")}}" width="240px" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                                <!-- Single Brand Logo Start -->
                                <div class="swiper-slide single-brand-logo" data-aos="fade-up" data-aos-delay="700">
                                    <a href="#"><img src="{{asset("assets.user/media/images/brand-logo/IMG_9115.PNG")}}" width="240px" alt="Brand Logo"></a>
                                </div>
                                <!-- Single Brand Logo End -->

                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo End -->

    <!-- Blog Section Start -->
    {{--    <div class="section section-padding">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="section-title" data-aos="fade-up" data-aos-delay="300">--}}
    {{--                    <h2 class="title pb-3">Latest Blog</h2>--}}
    {{--                    <div class="title-border-bottom"></div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="row mb-n6">--}}

    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="300">--}}

    {{--                    <!-- Blog Single Post Start -->--}}
    {{--                    <div class="blog-single-post-wrapper">--}}
    {{--                        <div class="blog-thumb">--}}
    {{--                            <a class="blog-overlay" href="blog-details.html">--}}
    {{--                                <img class="fit-image" src="assets/images/blog/blog-post/1.jpg" alt="Blog Post">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog-content">--}}
    {{--                            <div class="post-meta">--}}
    {{--                                <span>By : <a href="#">Admin</a></span>--}}
    {{--                                <span>14 Jul 2021</span>--}}
    {{--                            </div>--}}
    {{--                            <h3 class="title"><a href="blog-details.html">Some Winter Collections</a></h3>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>--}}
    {{--                            <a href="blog-details.html" class="btn btn-dark btn-hover-primary text-uppercase">Read More</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Blog Single Post End -->--}}

    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="500">--}}

    {{--                    <!-- Blog Single Post Start -->--}}
    {{--                    <div class="blog-single-post-wrapper">--}}
    {{--                        <div class="blog-thumb">--}}
    {{--                            <a class="blog-overlay" href="blog-details.html">--}}
    {{--                                <img class="fit-image" src="assets/images/blog/blog-post/2.jpg" alt="Blog Post">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog-content">--}}
    {{--                            <div class="post-meta">--}}
    {{--                                <span>By : <a href="#">Admin</a></span>--}}
    {{--                                <span>14 Jul 2021</span>--}}
    {{--                            </div>--}}
    {{--                            <h3 class="title"><a href="blog-details.html">My Perty Fashion</a></h3>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>--}}
    {{--                            <a href="blog-details.html" class="btn btn-dark btn-hover-primary text-uppercase">Read More</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Blog Single Post End -->--}}

    {{--                </div>--}}

    {{--                <div class="col-lg-4 col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-delay="700">--}}

    {{--                    <!-- Blog Single Post Start -->--}}
    {{--                    <div class="blog-single-post-wrapper">--}}
    {{--                        <div class="blog-thumb">--}}
    {{--                            <a class="blog-overlay" href="blog-details.html">--}}
    {{--                                <img class="fit-image" src="assets/images/blog/blog-post/3.jpg" alt="Blog Post">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <div class="blog-content">--}}
    {{--                            <div class="post-meta">--}}
    {{--                                <span>By : <a href="#">Admin</a></span>--}}
    {{--                                <span>14 Jul 2021</span>--}}
    {{--                            </div>--}}
    {{--                            <h3 class="title"><a href="blog-details.html">Perfect Fashion House</a></h3>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>--}}
    {{--                            <a href="blog-details.html" class="btn btn-dark btn-hover-primary text-uppercase">Read More</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- Blog Single Post End -->--}}

    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- Blog Section End -->


    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/1.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/2.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/3.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/4.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/5.jpg" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="assets/images/products/large-size/6.jpg" alt="Product">
                                    </a>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Sample product</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- Rating Start -->
                            <span class="ratings justify-content-start">
                        <span class="rating-wrap">
                            <span class="star" style="width: 100%"></span>
                            </span>
                            <span class="rating-num">(4)</span>
                            </span>
                            <!-- Rating End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual
                                teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <!-- Description End -->

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-3">
                                <!-- Product Size Start -->
                                <div class="product-size">
                                    <span>Size :</span>
                                    <a href=""><strong>S</strong></a>
                                    <a href=""><strong>M</strong></a>
                                    <a href=""><strong>L</strong></a>
                                    <a href=""><strong>XL</strong></a>
                                </div>
                                <!-- Product Size End -->
                            </div>
                            <!-- Product Meta End -->

                            <!-- Product Color Variation Start -->
                            <div class="product-color-variation mb-3">
                                <button type="button" class="btn bg-danger"></button>
                                <button type="button" class="btn bg-primary"></button>
                                <button type="button" class="btn bg-dark"></button>
                                <button type="button" class="btn bg-success"></button>
                            </div>
                            <!-- Product Color Variation End -->

                            <!-- Product Meta Start -->
                            <div class="product-meta mb-5">
                                <!-- Product Metarial Start -->
                                <div class="product-metarial">
                                    <span>Metarial :</span>
                                    <a href=""><strong>Metal</strong></a>
                                    <a href=""><strong>Resin</strong></a>
                                    <a href=""><strong>Lather</strong></a>
                                    <a href=""><strong>Polymer</strong></a>
                                </div>
                                <!-- Product Metarial End -->
                            </div>
                            <!-- Product Meta End -->

                            <!-- Quantity Start -->
                            <div class="quantity mb-5">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="0" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart & Wishlist Button Start -->
                            <div class="cart-wishlist-btn pb-4 mb-n3">
                                <div class="add-to_cart mb-3">
                                    <a class="btn btn-outline-dark btn-hover-primary" href="cart.html">Add to cart</a>
                                </div>
                                <div class="add-to-wishlist mb-3">
                                    <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Add to Wishlist</a>
                                </div>
                            </div>
                            <!-- Cart & Wishlist Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <span>Share :</span>
                                <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                                <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Product Delivery Policy Start -->
                            <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                                <li><i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                            </ul>
                            <!-- Product Delivery Policy End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->
@endsection
