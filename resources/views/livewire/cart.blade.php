<div>
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-12">
    <!-- Cart Update Option Start -->
    <div class="cart-update-option d-block d-md-flex justify-content-between">

        <!-- Apply Coupon Wrapper Start -->
        <div class="apply-coupon-wrapper">
            <form action="#" method="post" class=" d-block ">
                <a href="/products" class="btn btn-light btn-hover-primary rounded-5 ">Continue Shopping</a>
            </form>
        </div>
        <!-- Apply Coupon Wrapper End -->

        <!-- Cart Update Start -->
        {{-- <div class="cart-update mt-sm-16">
            <a href="#" class="btn btn-dark btn-hover-primary rounded-0 ">Update Cart</a>
        </div> --}}
        <!-- Cart Update End -->

    </div>
    <!-- Cart Update Option End -->
                    <!-- Cart Table Start -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">

                            <!-- Table Head Start -->
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                @foreach ($cart_details as $cds)
                            <tr>
                              
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src=  "{{ asset('storage/productphoto/' .$products[$cds->product_id]['product_image']) }}" alt="Product" /></a></td>
                                <td class="pro-title"><a href="#">{{$products[$cds->product_id]['product_name']}}<br> {{"Stock: ".$products[$cds->product_id]['product_stock']}}</a></td>
                                <td class="pro-price"><span>{{"Rp. ".$products[$cds->product_id]['product_price']}}</span></td>
                                <td>
                                    <div class="col-md-2 col-4 my-auto">
                    
                                        <div class="input-group">        
                                            <button type="button" class="btn" wire.loading.attr="disabled" wire:click="decrementQuantity({{$cds->id}})"><i class="fa fa-minus"></i></button>
                                            <input class="" value="{{$cds->total_items}}" type="text" disabled>
                                            <button type="button" class="btn " wire.loading.attr="disabled" wire:click="incrementQuantity({{$cds->id}})"><i class="fa fa-plus"></i></button>
                                        </div>
                                        </div>
                              


                                            {{-- <div class="cart-plus-minus">
                              
                                                <input class="cart-plus-minus-box" name="product_qty" value="1" type="number" min="1">
                                                <div class="dec qtybutton" wire.loading.attr="disabled" wire:click="decrementQuantity({{$cds->id}})"></div>
                                                <div class="inc qtybutton wire.loading.attr="disabled" wire:click="incrementQuantity({{$cds->id}})""></div>
                                            </div> --}}
                                    
                                </td>
                                <td class="pro-subtotal"><span>{{"Rp. ".$cds->total_price}}</span></td>
                                <td class="pro-remove"><a href="#"><i wire:click="deletecartitem({{$cds->id}})" class="pe-7s-trash"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->

                

                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 ms-auto col-custom">

                    <!-- Cart Calculation Area Start -->
                    <div class="cart-calculator-wrapper">

                        <!-- Cart Calculate Items Start -->
                        <div class="cart-calculate-items">

                            <!-- Cart Calculate Items Title Start -->
                            <h3 class="title">Cart Totals</h3>
                            <!-- Cart Calculate Items Title End -->

                            <!-- Responsive Table Start -->
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>{{"Rp. ".$cart->total_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Discount</td>
                                        <td>-</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">{{"Rp. ".$cart->total_price}}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->

                        <!-- Cart Checktout Button Start -->
                        <form action="{{route('transactions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div >
                            {{-- <input type="hidden" name="cart_id" value={{$cart->id}}> --}}
                        <button class="btn btn-dark btn-hover-primary rounded-0 w-100" type="submit">Proceed To Checkout</button>
                       
                        </form>
                    </div>
                    <!-- Cart Calculation Area End -->

                </div>
            </div>

        </div>
    </div>
</div>