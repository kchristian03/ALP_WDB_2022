@extends("users.layouts.users-layout")

@section('pageTitle', 'Shop')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Categories</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> categories</li>
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
                                <span>Showing categories</span>
                            </div>
                        </div>
                        <!-- Shop Top Bar Left end -->

                        <!-- Shopt Top Bar Right Start -->
                        <div class="shop-top-bar-right">
                        

                        
                        </div>
                        <!-- Shopt Top Bar Right End -->

                    </div>
                    <!--shop toolbar end-->

                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_list">

                        <!-- Single Product Start -->
                        @foreach ($category as $ct)
                            
                      
                        <div class="product aos-init aos-animate col-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="categorizedproducts/{{ $ct['id'] }}" class="image">
                                        {{-- <img src="{{ asset('storage/' .$book->coverphoto) }}" > --}}
                                        <img class="first-image" style="height: 100px;" src="{{ asset('../storage/' .$ct->category_image) }}" alt="Category">
                                        <img class="second-image" src="{{ asset('../storage/' .$ct->category_image) }}" alt="Category">
                                 
                                </div>
                                <div class="content">
                         
                                    <h5 class="title"><a href="categorizedproducts/{{ $ct['id'] }}">{{$ct['category_name']}}</a></h5>
                                  
                                    <p>{{$ct['category_name']}}</p>
                             
                                
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--shop toolbar end-->

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->
@endsection
