@extends("users.layouts.users-layout")

@section('pageTitle', 'Checkout - Funcy Daisy')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section section-margin">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Order Detail</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> order</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->
    
    <!-- Cart Table End -->
    <!-- Checkout Section Start -->
    {{-- <div class="section section-margin"> --}}
        <div class="container">
            <h3 class="title mb-2">Order Details</h3>
            <div class="row mt-3">
                <div class="col-12">
                    
            <table class="table table-bordered mt-2">
             
                <!-- Table Head Start -->
                <thead>
                <tr>
                    <th class="">Image</th>
                    <th class="">Product</th>
                    <th class="">Price</th>
                    <th class="">Quantity</th>
                    <th class="">Total</th>
                    {{-- <th class="pro-remove">Remove</th> --}}
                </tr>
                </thead>
                <!-- Table Head End -->
    
                <!-- Table Body Start -->
                <tbody>
                    @foreach ($orderdetails as $cds)
                <tr>
                  
                    <td class="text-center"><img class="img-fluid" style="width:100px" src=  "{{ asset('storage/productphoto/' .$cds->product->product_image) }}" alt="Product" /></td>
                    <td class=""><a href="#">{{$cds->product->product_name}}<br></a></td>
                    <td class=""><span>{{"Rp. ".$cds->product->product_price}}</span></td>
                    <td>
                        <div class="col-md-2 col-4 my-auto">
        
                            <div class="input-group">        
                                <span>{{$cds->total_items}}</span>
                              
                            </div>
                            </div>
                  
    
    
                                {{-- <div class="cart-plus-minus">
                  
                                    <input class="cart-plus-minus-box" name="product_qty" value="1" type="number" min="1">
                                    <div class="dec qtybutton" wire.loading.attr="disabled" wire:click="decrementQuantity({{$cds->id}})"></div>
                                    <div class="inc qtybutton wire.loading.attr="disabled" wire:click="incrementQuantity({{$cds->id}})""></div>
                                </div> --}}
                        
                    </td>
                    <td class="pro-subtotal"><span>{{"Rp. ".$cds->total_harga}}</span></td>
                    {{-- <td class="pro-remove"><a href="#"><i wire:click="deletecartitem({{$cds->id}})" class="pe-7s-trash"></i></a></td> --}}
                </tr>
                @endforeach
                </tbody>
                <!-- Table Body End -->
    
            </table>
        {{-- </div> --}}
            </div>
            </div>
            </div>

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
                            
                                <!-- Select Country Name End -->

                                <!-- First Name Input Start -->
                             
                                <!-- First Name Input End -->

                                <!-- Last Name Input Start -->
                             
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
                                        <label>Provinsi <span class="required"></span></label>
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
                                    <th class="cart-product-name text-start">Produk</th>
                                    <th class="cart-product-total text-end">Total</th>
                                </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    @foreach ($orderdetails as $cds)
                                      
                                 
                                <tr class="cart_item">
                                    <td class="cart-product-name text-start ps-0"> {{$cds->product->product_name}}<strong class="product-quantity"> × {{$cds->total_items}}</strong></td>
                                    <td class="cart-product-total text-end pe-0"><span class="amount">{{"Rp. ".$cds->total_harga}}</span></td>
                                </tr>
                                @php$cdss= $cds @endphp
                                @endforeach
                                </tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th class="text-start ps-0">Subtotal Barang</th>
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
                                            <img class="image" src="{{url("storage/" . $order->bukti_pembayaran)}}" alt="Product" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="order-button-payment">
                                <button class="btn btn-dark btn-hover-primary rounded-0 w-100">Place Order</button>
                            </div> --}}
                        </div>
                    </form>
                        <!-- Payment Accordion Order Button End -->
                        <h5 class="m-5">  Status Pesanan: {{$order->transaction_status}} </h5>
                        @if($order->transaction_status == "Dikirim")
                        <h5 class="m-5">  No Resi: {{$order->no_resi}} </h5>
                        @endif
                    </div>
                    <!-- Your Order Area End -->
                    <h5 class="m-5">  </h5>
                    @if($order->transaction_status == "Proses Pengiriman")
                    <form action="{{ route('transactions.update',$order->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="orderid" value="{{$order->id}}">
               <button type="submit" class="btn btn-danger btn-hover-primary rounded-4 w-100"> Konfirmasi Penerimaan</button>
                    </form>
                  @elseif($order->transaction_status == "Selesai")
               <a href="../single-product/{{ $cdss->product_id }}">   <button class="btn btn-danger btn-hover-primary rounded-4 w-100"> Review Product</button></a>
                  @endif
                </div>
            </div>
        </div>
    </div>

    
   
    <!-- Checkout Section End -->
    {{-- <script>
$('#adressname').on('change', function(){
    const selectedPackage = $('#adressname').val();
    $('#adressdescription').text(adressname);
  });

    </script> --}}
@endsection
