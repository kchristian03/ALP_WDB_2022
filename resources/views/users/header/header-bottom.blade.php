<div class="header-bottom">
    <div class="header-sticky">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="{{asset("assets.user/media/images/logo/logo.png")}}" alt="Site Logo"/></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="col-xl-8 d-none d-xl-block">
                    <div class="main-menu position-relative">
                        <ul>
                            <li><a href="/"> <span>Home</span></a></li>
                            <li><a href="/products"> <span>Products</span></a></li>
                            <li><a href="/categories"> <span>Category</span></a></li>
                            <li><a href="/about"> <span>About Us</span></a></li>
                            <li><a href="/contact"> <span>Contact</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Menu End -->

                <!-- Header Action Start -->
                <div class="col-xl-2 col-6">
                    <div class="header-actions">

                        <!-- Search Header Action Button Start -->
                        {{-- <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i
                                class="pe-7s-search"></i></a> --}}
                        <!-- Search Header Action Button End -->

                        <!-- User Account Header Action Button Start -->
                        @if (Auth::check())
                        <a href="/my-account" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>
                        @else   
                         <a href="/login"> <span>Log In</span></a>
                        @endif
                        <!-- User Account Header Action Button End -->

                        <!-- Wishlist Header Action Button Start -->
                        {{-- <a href="/wishlist"
                           class="header-action-btn header-action-btn-wishlist d-none d-md-block"><i class="pe-7s-like"></i>
                        </a> --}}
                        <!-- Wishlist Header Action Button End -->

                        <!-- Shopping Cart Header Action Button Start -->
                        @if (Auth::check() && Auth::user()->status == 'user')
                        <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">3</span>
                        </a>
                        @endif
                        <!-- Shopping Cart Header Action Button End -->

                        <!-- Mobile Menu Hambarger Action Button Start -->
                        <a href="javascript:void(0)"
                           class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Mobile Menu Hambarger Action Button End -->

                    </div>
                </div>
                <!-- Header Action End -->

            </div>
        </div>
    </div>
</div>
