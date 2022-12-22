@extends("users.layouts.users-layout")

@section('pageTitle', 'Funcy Daisy')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">
   
     
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Single Product</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Single Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Single Product Section Start -->

    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">

                    <!-- Product Details Image Start -->
                    <div class="product-details-img">

                        <!-- Single Product Image Start -->
                        <div class="single-product-img swiper-container gallery-top">
                            <div class="swiper-wrapper popup-gallery">
                                <a class=" w-100" href="{{url("storage/" . $product->product_image)}}">
                                    <img class="w-100" src="{{url("storage/" . $product->product_image)}}" alt="Product" />
                                </a>
                            
                            </div>
                        </div>
                        <!-- Single Product Image End -->

                        <!-- Single Product Thumb Start -->
                        <div class="single-product-thumb swiper-container gallery-thumbs">
                            {{-- <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/1.jpg" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/2.jpg" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/3.jpg" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/4.jpg" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/5.jpg" alt="Product">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/images/products/small-product/6.jpg" alt="Product">
                                </div>
                            </div> --}}

                            <!-- Next Previous Button Start -->
                            <div class="swiper-button-horizental-next  swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            <div class="swiper-button-horizental-prev swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <!-- Next Previous Button End -->

                        </div>
                        <!-- Single Product Thumb End -->

                    </div>
                    <!-- Product Details Image End -->

                </div>
                <div class="col-lg-7 col-custom">

                    <!-- Product Summery Start -->
                    <div class="product-summery position-relative">

                        <!-- Product Head Start -->
                        <div class="product-head mb-3">
                            <h2 class="product-title">{{$product['product_name']}}</h2>
                        </div>
                        <!-- Product Head End -->

                        <!-- Price Box Start -->
                        <div class="price-box mb-2">
                            <span class="regular-price">{{"Rp. ".$product['product_price']}}</span>
                            {{-- <span class="old-price"><del>$90.00</del></span> --}}
                        </div>
                        <!-- Price Box End -->

                        <!-- Rating Start -->
                        {{-- <span class="ratings justify-content-start">
                                <span class="rating-wrap">
                                    <span class="star" style="width: 100%"></span>
                        </span> --}}
                        <span class="rating-num">{{"Stok: ".$product['product_stock']}}</span>
                        </span>
                        <!-- Rating End -->

                        <!-- SKU Start -->
                        <div class="sku mb-3">
                            <span>Description:</span>
                        </div>
                        <!-- SKU End -->

                        <!-- Description Start -->
                        <p class="desc-content mb-5">{{$product['product_description']}}</p>
                 
                        <!-- Product Meta Start -->
                        <div class="product-meta mb-5">
                       
                        <div class="quantity mb-5">
                            @if (Auth::check())
                              
                            <form action="{{route('cartdetail.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value={{$product->id}}>
                            <div class="cart-plus-minus">
                              
                                <input class="cart-plus-minus-box" name="product_qty" value="1" type="number" min="1" max="{{$product['product_stock']}}">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                            @endif
                        </div>
                        <!-- Quantity End -->

                        <!-- Cart & Wishlist Button Start -->
                        <div class="cart-wishlist-btn mb-4">
                            <div class="add-to_cart">
                                @if (Auth::check())
                              
                                 
                                            <button class="btn btn-sm btn-outline-dark btn-hover-primary" type="submit">Add To Cart</button>
                                        </form>
                                            @endif
                            </div>
                        </form>
                            {{-- <div class="add-to-wishlist">
                                <a class="btn btn-outline-dark btn-hover-primary" href="wishlist.html">Add to Wishlist</a>
                            </div> --}}
                        </div>
                        <!-- Cart & Wishlist Button End -->

                        <!-- Social Shear Start -->
                        {{-- <div class="social-share">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div> --}}
                        <!-- Social Shear End -->

                        <!-- Product Delivery Policy Start -->
                        <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                            <li> <i class="fa fa-check-square"></i> <span>Security Policy: Setiap data pembeli tidak akan dibagi oleh penjual</span></li>
                            <li><i class="fa fa-truck"></i><span>Delivery Policy: Pengiriman akan dolakukan sesuai dengan kurir yang tersedia sesuai dengan ketentuan penjual </span></li>
                            <li><i class="fa fa-refresh"></i><span>Return Policy: Pengembalian barang dilakukan dengan ketentuan maksimal 3 hari setelah penerimaan barang</span></li>
                        </ul>
                        <!-- Product Delivery Policy End -->

                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>

            <div class="row section-margin">
                <!-- Single Product Tab Start -->
                <div class="col-lg-12 col-custom single-product-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Shipping Policy</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false">Size Chart</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content border p-3">
                                <p class="mb-3">{{$product['product_description']}}</p></div>
                        </div>
                    
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                         
                            <!-- Start Single Content -->
                            <div class="product_tab_content  border p-3">
                                <!-- Start Single Review -->
                                @foreach ($review as $rv)
                                @if($rv->status=='shown')
                                    
                           
                                <div class="single-review d-flex mb-4">
                                
                                    <!-- Review Thumb Start -->
                                  
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                      
                                        <div class="review_info mb-2">

                                            <!-- Rating Start -->
                                            {{-- <span class="ratings justify-content-start mb-3">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                            </span> --}}
                                        
                                            <!-- Rating End -->

                                            <!-- Review Title & Date Start -->
                                         
                                                
                                           
                                            <div class="review-title-date d-flex">
                                                <h5 class="title">{{$rv->user->name}} </h5><span class="ml-3"> {{"  -  ".$rv->created_at}}</span>
                                            </div>
                                            <!-- Review Title & Date End -->
                                            <span class="rating-num">Rating: {{$rv->rating}}</span>
                                        </span>
                                        </div>
                                        <p>{{$rv->review}}</p>
                                    </div>
                                  
                                    <!-- Review Details End -->

                                </div>
                                @endif
                                @endforeach
                                <!-- End Single Review -->
                                @if(Auth::check())
                                    
                            
                                <!-- Rating Wrap Start -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title mb-2">Add a review </h5>

                                </div>
                                <!-- Rating Wrap End -->

                                <!-- Comments ans Replay Start -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">

                                            <!-- Comment form Start -->
                                          
                                            <form action=" {{ route('productreview.store') }}" method="POST" class="comment-form-area">
                                                @csrf
                                                <input type="hidden" name="productid" value={{$product->id}}>
                                                <!-- Comment Texarea Start -->
                                                <div class="comment-form-comment mb-3">
                                               
                                                        <label for="slider">Give This Product Rating:</label><br>
                                                        <input type="range" id="slider" name="rating" min="0" max="10" value="10" step="0.5">
                                                        <p id="value">10</p>
                                              
                                                      
                                                    <textarea name="review" class="comment-notes" required="required"></textarea>
                                                </div>
                                                <!-- Comment Texarea End -->

                                                <!-- Comment Submit Button Start -->
                                                <div class="comment-form-submit">
                                                    <button class="btn btn-dark btn-hover-primary" type="submit">Submit</button>
                                                </div>
                                                <!-- Comment Submit Button End -->

                                            </form>
                                            <!-- Comment form End -->

                                        </div>
                                    </div>
                                </div>
                                @else
                                <h5 class="rating-title mb-2">Log In to give Product Review </h5>

                                @endif
                                <!-- Comments ans Replay End -->
                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Shipping Policy Start -->
                            <div class="shipping-policy mb-n2">
                                <h4 class="title-3 mb-4">Shipping policy for our store</h4>
                                {{-- <p class="desc-content mb-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p> --}}
                                <ul class="policy-list mb-2">
                                    <li>Pengembalian dapat diterima maksimal 3 hari setelah barang diterima.</li>
                                    <li>WAJIB upload bukti video unboxing paket agar dapat melakukan pengembalian.</li>
                                    <li>Pengembalian berupa produk yang salah, cacat pada produk, warna I ukuran
                                        produk yang salah.</li>
                                    <li>Produk yang dikembalikan harus dalam keadaan utuh dimana label masih terpasang,
                                        belum terpakai, dan belum dicuci.</li>
                                    <li>Mohon untuk tidak menyelesaikan pesanan atau memberi nilai terlebih dahulu
                                        sebelum proses pengembalian selesai.</li>
                                    <li>te feugait nulla facilisi.</li>
                                </ul>
                                <p class="desc-content mb-2">
                                    
                                    
                                   
                                    </p>
                            </div>
                            <!-- Shipping Policy End -->
                        </div>
                        {{-- <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <h4 class="title-3 mb-4">Size Chart</h4>
                                <table class="table border mb-0">
                                    <tbody>
                                    <tr>
                                        <td class="cun-name"><span>UK</span></td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>26</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>European</span></td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                        <td>52</td>
                                        <td>54</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>usa</span></td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        <td>20</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Australia</span></td>
                                        <td>28</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td class="cun-name"><span>Canada</span></td>
                                        <td>24</td>
                                        <td>18</td>
                                        <td>14</td>
                                        <td>42</td>
                                        <td>36</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Single Product Tab End -->
            </div>

            <!-- Products Start -->
            <div class="row">

                <div class="col-12">
                    <!-- Section Title Start -->
                    <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="title pb-3">You Might Also Like</h2>
                        <span></span>
                        <div class="title-border-bottom"></div>
                    </div>
                    <!-- Section Title End -->
                </div>

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
                                <h5 class="title"><a href="../single-product/{{ $pr['id'] }}">{{$pr['product_name']}}</a></h5>
                                {{-- <span class="ratings">
                                        <span class="rating-wrap">
                                            <span class="star" style="width: 100%"></span>
                                </span> --}}
                                {{-- <span class="rating-num">(4)</span> --}}
{{--                                </span>--}}
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                <span class="price">
                                        <span class="new">{{'Rp. ' . $pr['product_price']}}</span>
                                {{-- <span class="old">$42.85</span> --}}
                                </span>
                                <div class="shop-list-btn">
                                    {{-- <a title="Wishlist" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"><i class="fa fa-heart"></i></a> --}}
                                  <a href="single-product/{{ $pr['id'] }}" > <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">See Details</button></a>
                                    {{-- <a title="Compare" href="#" class="btn btn-sm btn-outline-dark btn-hover-primary compare"><i class="fa fa-random"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <!-- Products End -->

        </div>
    </form>
    </div>
    <!-- Single Product Section End -->

@endsection
