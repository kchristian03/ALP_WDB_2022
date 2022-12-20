<div class="section section-margin">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-12 col-custom">


                <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">


                    <div class="shop-top-bar-left mb-md-0 mb-2">
                        <div class="shop-top-show">
                            <span>Showing Prodcuts</span>
                        </div>
                    </div>


                </div>

                <div class="row shop_wrapper grid_3">

                    @foreach ($products as $pr)
                    <div class="col-lg-4 col-md-4 col-sm-6 product" >
                        <div class="product-inner">
                            <div class="thumb">
                                <p class="image">
                                    <img class="first-image" src="{{url("storage/" . $pr->product_image)}}" alt="Product" />
                                    <img class="second-image" src="{{url("storage/" . $pr->product_image)}}" alt="Product" />
                                </a>
                                <div class="actions">
                                    {{-- <a href="wishlist.html" title="Wishlist" class="action wishlist"><i class="pe-7s-like"></i></a> --}}
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="sub-title"><a href="single-product">{{"Avaliable: ".$pr['product_stock']}}</a></h4>
                                <h5 class="title"><a href="single-product/{{ $pr['id'] }}">{{$pr['product_name']}}</a></h5>
                                {{-- <span class="ratings">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                </span> --}}
                                {{-- <span class="rating-num">(4)</span> --}}
                                </span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                        <span class="new">{{'Rp. ' . $pr['product_price']}}</span>
                                {{-- <span class="old">$42.85</span> --}}
                                </span>
                                <div class="shop-list-btn">
                                    <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a>
                                  <a href="single-product/{{ $pr['id'] }}" > <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">See Details</button></a>
                                    <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{$products->links()}}
                </div>

            </div>
            <div class="col-lg-3 col-12 col-custom">
                <!-- Sidebar Widget Start -->
                <aside class="sidebar_widget mt-10 mt-lg-0">
                    <div class="widget_inner"  >
                        <div class="widget-list mb-10">
                            <h3 class="widget-title mb-4">Search</h3>
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search Products" wire:model="categories">
                                <button class="btn btn-dark btn-hover-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-list mb-10">
                            <h3 class="widget-title mb-4">Categories</h3>
                            <!-- Widget Menu Start -->
                            <nav>
                                <ul class="category-menu mb-n3">
                                    @foreach($categories as $ct)
                                    <li class="pb-4"><a wire:click="categorize({{$ct['id']}})" href="#">({{$ct['category_name']}})</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                            <!-- Widget Menu End -->
                        </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar Widget End -->
            </div>
        </div>

    </div>

</div>
