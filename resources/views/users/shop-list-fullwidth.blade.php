@extends("users.layouts.users-layout")

@section('pageTitle', 'Shop')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Shop List</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left mb-md-0 mb-2">
                            <div class="shop-top-show">
                                <span>Showing 1–12 of 39 results</span>
                            </div>
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Show 24</option>
                                    <option value="1">Show 24</option>
                                    <option value="2">Show 12</option>
                                    <option value="3">Show 15</option>
                                    <option value="3">Show 30</option>
                                </select>
                            </div>

                            <div class="shop-short-by mr-4">
                                <select class="nice-select" aria-label=".form-select-sm example">
                                    <option selected>Short by Default</option>
                                    <option value="1">Short by Popularity</option>
                                    <option value="2">Short by Rated</option>
                                    <option value="3">Short by Latest</option>
                                    <option value="3">Short by Price</option>
                                    <option value="3">Short by Price</option>
                                </select>
                            </div>

                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                                <button data-role="grid_list" type="button" class="active btn-list" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_list" data-aos="fade-up" data-aos-delay="200">

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/2.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$40.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/6.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Make Thing Happen T-Shirt</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/11.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Handmade Shoulder Bag</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/3.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Simple Woven Fashion</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/1.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/5.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/7.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/9.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Basic Lather Sneaker</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-12 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="single-product.html" class="image">
                                        <img class="first-image" src="assets/images/products/medium-size/4.jpg" alt="Product" />
                                        <img class="second-image" src="assets/images/products/medium-size/10.jpg" alt="Product" />
                                    </a>
                                    <div class="actions">
                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a>
                                        <a href="#" title="Quickview" class="action quickview" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="pe-7s-search"></i></a>
                                        <a href="compare.html" title="Compare" class="action compare"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="sub-title"><a href="single-product.html">Studio Design</a></h4>
                                    <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                    <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">(4)</span>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    <span class="price">
                                            <span class="new">$38.50</span>
                                    <span class="old">$42.85</span>
                                    </span>
                                    <div class="shop-list-btn">
                                        <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">Add To Cart</button>
                                        <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                    </div>
                    <!-- Shop Wrapper End -->

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mt-10">

                        <!-- Shop Top Bar Left start -->
                        <div class="shop-top-bar-left">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select rounded-0" aria-label=".form-select-sm example">
                                    <option selected>Show 12 Per Page</option>
                                    <option value="1">Show 12 Per Page</option>
                                    <option value="2">Show 24 Per Page</option>
                                    <option value="3">Show 15 Per Page</option>
                                    <option value="3">Show 30 Per Page</option>
                                </select>
                            </div>
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->





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
                            <p class="desc-content mb-5">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
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
                                <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance Module)</span></li>
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
