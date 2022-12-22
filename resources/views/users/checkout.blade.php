@extends("users.layouts.users-layout")

@section('pageTitle', 'Checkout - Funcy Daisy')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Checkout</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">

                        <!-- Title Start -->
                        {{-- <h3 class="title">Returning customer? <span id="showlogin">Click here to login</span></h3> --}}
                        <!-- Title End -->

                        <!-- Checkout Login Start -->
                     
                        <!-- Checkout Login End -->

                        <!-- Title Start -->
                        {{-- <h3 class="title">Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3> --}}
                        <!-- Title End -->

                        <!-- Checkout Coupon Start -->
                    
                        <!-- Checkout Coupon End -->

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    
                        <div class="checkbox-form">
                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Adress</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">
                                <form action="/checkout" method="GET" enctype="multipart/form-data">
                                    
                                <!-- Select Country Name Start -->
                                <div class="col-md-12 mb-6">
                                    <div class="country-select">
                                        <label>Adresses <span class="required"></span></label>
                                        <select onchange="this.form.submit()" name="adressname" id="adressname" class="myniceselect nice-select wide rounded-0">
                                            @foreach ($adresses as $ad)
                                                 <option value="{{$ad->id}}">{{$ad->adress_name}}</option>  
                                            @endforeach
                                         
                                        </select>
                                    </div>
                                    <br>    
                                    <a style="color:red" href="my-account">  See my Adress</a>
                                </div>
                                </form>
                                <!-- Select Country Name End -->
                                <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input placeholder="{{$selectedadress->adress_name}}" value="{{$selectedadress->adress_name}}" type="hidden"  name="adressnamee">
                                <!-- First Name Input Start -->
                            
                                <!-- First Name Input End -->

                                <!-- Last Name Input Start -->
                            
                                <!-- Last Name Input End -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Address <span class="required"></span></label>
                                        <input placeholder="{{$selectedadress->full_street_adress}}" value="{{$selectedadress->full_street_adress}}" type="text"  name="full_street_adress">
                                    </div>
                                </div>
                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Description</label>
                                        <input name="description" id="adressdescription" placeholder="{{$selectedadress->description}}" value="{{$selectedadress->description}}" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->

                                <!-- Address Input Start -->
                              
                                <!-- Address Input End -->

                                <!-- Optional Text Input Start -->
                                {{-- <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div> --}}
                                <!-- Optional Text Input End -->

                                <!-- Town or City Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required"></span></label>
                                        <input type="text" name="city" value="{{$selectedadress->city}}" placeholder="{{$selectedadress->city}}">
                                    </div>
                                </div>
                                <!-- Town or City Name Input End -->

                                <!-- State or Country Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Province <span class="required"></span></label>
                                        <input placeholder="{{$selectedadress->state}}" value="{{$selectedadress->state}}" type="text"  name="state">
                                    </div>
                                </div>
                                <!-- State or Country Input End -->

                                <!-- Postcode or Zip Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required"></span></label>
                                        <input placeholder="{{$selectedadress->postal_code}}" value="{{$selectedadress->postal_code}}" type="text"  name="postal_code">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Bukti Pembayaran <span class="required"></span></label>
                                        <input type="file" name="bukti_pembayaran" class="form-control">
                                        @if ($errors->has('bukti_pembayaran'))
                                            <p class="text-danger">{{ $errors->first('bukti_pembayaran') }}</p>
                                        @endif
                                    </div>
                                </div>
                             
                                <!-- Postcode or Zip Input End -->

                                <!-- Email Address Input Start -->
                              
                                <!-- Phone Number Input End -->

                                <!-- Checkout Form List checkbox Start -->
                            
                                <!-- Checkout Form List checkbox End -->

                            </div>

                           
                            <!-- Different Address End -->
                        </div>
                  
          

                    </div>

                 <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Your order</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table">

                                <!-- Table Head Start -->
                                <thead>
                                <tr class="cart-product-head">
                                    <th class="cart-product-name text-start">Product</th>
                                    <th class="cart-product-total text-end">Total</th>
                                </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    @foreach ($cartdetails as $cds)
                                        
                                 
                                <tr class="cart_item">
                                    <td class="cart-product-name text-start ps-0"> {{$cds->product->product_name}}<strong class="product-quantity"> × {{$cds->total_items}}</strong></td>
                                    <td class="cart-product-total text-end pe-0"><span class="amount">{{"Rp. ".$cds->total_price}}</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th class="text-start ps-0">Cart Subtotal</th>
                                    <td class="text-end pe-0"><span class="amount">{{"Rp. ".$cart->total_price}}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th class="text-start ps-0">Order Total</th>
                                    <td class="text-end pe-0"><strong><span class="amount">{{"Rp. ".$cart->total_price}}</span></strong></td>
                                </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <h5>Metode Pembayaran: </h5>
                            <div class="payment-accordion">
                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-1" aria-expanded="false" aria-controls="collapseExample-1">
                                           BCA
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-1">
                                        <div class="card card-body rounded-0">
                                            <p>BCA 0181415311 A.N. Felecia Gunawan</p>
                                            <a href="../storage/productphoto/Jiwon Top.jpg" class="btn btn-hover-primary">QR Code</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-2" aria-expanded="false" aria-controls="collapseExample-2">
                                           OVO
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-2">
                                        <div class="card card-body rounded-0">
                                            <p>081235652209 Nama: Felecia Gunawan</p>
                                            <a href="../storage/productphoto/Jiwon Top.jpg" class="btn btn-hover-primary">QR Code</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-3" aria-expanded="false" aria-controls="collapseExample-3">
                                           Bank Mandiri
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-3">
                                        <div class="card card-body rounded-0">
                                            <p>0182151821 A.N Felecia Gunawan</p>
                                            <a href="../storage/productphoto/Jiwon Top.jpg"class="btn btn-hover-primary">QR Code</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <button class="btn btn-dark btn-hover-primary rounded-0 w-100">Place Order</button>
                            </div>
                        </div>
                    </form>
                        <!-- Payment Accordion Order Button End -->
                        
                    </div>
                    <!-- Your Order Area End -->
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    <script>

    </script>
@endsection
