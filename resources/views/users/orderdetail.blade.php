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

                        

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="checkbox-form">
                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Adress</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">

                                <!-- Select Country Name Start -->
                                <div class="col-md-12 mb-6">
                                    <div class="country-select">
                                        <label>Adresses <span class="required"></span></label>
                                        <select name="adressname" id="adressname" class="myniceselect nice-select wide rounded-0">
                                            {{-- @foreach ($adresses as $ad)
                                                 <option data-display="{{$ad->city}}" value="{{$ad->id}}">{{$ad->city}}</option>  
                                            @endforeach
                                          --}}
                                        </select>
                                    </div>
                                    <br>    
                                    <a href="#">  See my Adress</a>
                                </div>
                                <!-- Select Country Name End -->

                                <!-- First Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required"></span></label>
                                        <input placeholder="" type="text" disabled>
                                    </div>
                                </div>
                                <!-- First Name Input End -->

                                <!-- Last Name Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required"></span></label>
                                        <input placeholder="" type="text" disabled>
                                    </div>
                                </div>
                                <!-- Last Name Input End -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Address <span class="required"></span></label>
                                        <input placeholder="Street address" type="text" disabled>
                                    </div>
                                </div>
                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Description</label>
                                        <input name="adressdescription" id="adressdescription" placeholder="" type="text" disabled>
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
                                        <input type="text" disabled>
                                    </div>
                                </div>
                                <!-- Town or City Name Input End -->

                                <!-- State or Country Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Province <span class="required"></span></label>
                                        <input placeholder="" type="text" disabled>
                                    </div>
                                </div>
                                <!-- State or Country Input End -->

                                <!-- Postcode or Zip Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required"></span></label>
                                        <input placeholder="" type="text" disabled>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Bukti Pembayaran <span class="required"></span></label>
                                        <input type="file" name="bukti_pembayaran" class="form-control">
                                        @if ($errors->has('bukti_pembayaran'))
                                            <p class="text-danger">{{ $errors->first('coverphoto') }}</p>
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
                  
                    <!-- Checkbox Form End -->

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
                                    @foreach ($orderdetails as $cds)
                                        
                                 
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
                                    <td class="text-end pe-0"><span class="amount">{{"Rp. ".$order->total_price}}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th class="text-start ps-0">Order Total</th>
                                    <td class="text-end pe-0"><strong><span class="amount">{{"Rp. ".$order->total_price}}</span></strong></td>
                                </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                                <div class="single-payment">
                                    <h5 class="panel-title mb-3">
                                        <a class="collapse-off" data-bs-toggle="collapse" href="#collapseExample-3" aria-expanded="false" aria-controls="collapseExample-3">
                                            Bukti Pembayaran
                                        </a>
                                    </h5>
                                    <div class="collapse" id="collapseExample-3">
                                        <div class="card card-body rounded-0">
                                            <a class="btn btn-hover-primary">Gambar</a>
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
                  <h5 class="m-5">  Status Pesanan: {{$order->transaction_status}} </h2>
                  <button class="btn btn-danger btn-hover-primary rounded-0 w-100"> Selesaikan Pesanan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    <script>
$('#adressname').on('change', function(){
    const selectedPackage = $('#adressname').val();
    $('#adressdescription').text(adressname);
  });

    </script>
@endsection
