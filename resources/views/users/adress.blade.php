@extends("users.layouts.users-layout")

@section('pageTitle', 'Checkout - Funcy Daisy')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Adress</h1>
                    <ul>
                        <li>
                            <a href="/index">Home </a>
                        </li>
                        <li class="active"> Adress</li>
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
      
                </div>
            </div>
            <div class="row mb-n4">
                <div class="col-lg-12 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <form action="{{ route('adress.store') }}" method="POST" >
                        @csrf
                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Adress</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">

                                <!-- Select Country Name Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Adress Name <span class="required"></span></label>
                                        <input name="adressname"  placeholder="Address Name" type="text" required>
                                    </div>
                                </div>
                                <!-- Select Country Name End -->

                                <!-- First Name Input Start -->
                                {{-- <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required"></span></label>
                                        <input placeholder="" type="text" >
                                    </div>
                                </div> --}}
                                <!-- First Name Input End -->

                                <!-- Last Name Input Start -->
                                {{-- <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required"></span></label>
                                        <input placeholder="" type="text" >
                                    </div>
                                </div> --}}
                               
                                <!-- Last Name Input End -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Full Address <span class="required"></span></label>
                                        <input name="fulladress" placeholder="Street address" type="text" required>
                                    </div>
                                </div>
                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Description</label>
                                        <input name="adressdesc" placeholder="Description" type="text" required>
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
                                        <input name="adresscity" placeholder="City" type="text" required>
                                    </div>
                                </div>
                                <!-- Town or City Name Input End -->

                                <!-- State or Country Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Province <span class="required"></span></label>
                                        <input name="adressprovince" placeholder="Province" type="text" required>
                                    </div>
                                </div>
                                <!-- State or Country Input End -->

                                <!-- Postcode or Zip Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required"></span></label>
                                        <input name="adresszip" placeholder="ZIP Code" type="text" required>
                                    </div>
                                </div>
                         
                            </div>

                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-dark btn-hover-primary rounded-0 w-100 mx-auto">Submit</button>
                        </div>
                    </form>
                    <!-- Checkbox Form End -->

                </div>

                <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                   
                    <!-- Your Order Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection
