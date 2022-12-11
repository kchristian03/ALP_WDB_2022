@extends("users.layouts.users-layout")

@section('pageTitle', 'Compare - Funcy Daisy')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Compare</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Compare</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Compare Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Compare Page Content Start -->
                    <div class="compare-page-content-wrap">
                        <div class="compare-table table-responsive">
                            <!-- Compare Table Start -->
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="product-details.html" class="image">
                                            <img class="img-fluid" src="assets/images/products/small-product/1.jpg" alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Men</a>
                                        <a href="product-details.html" class="title">Brother Hoddies in Grey</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="product-details.html" class="image">
                                            <img class="img-fluid" src="assets/images/products/small-product/2.jpg" alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Basic</a>
                                        <a href="product-details.html" class="title">Basic Jogging Shorts</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="product-details.htmll" class="image">
                                            <img class="img-fluid" src="assets/images/products/small-product/3.jpg" alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Women</a>
                                        <a href="product-details.html" class="title">Simple Woven Fashion</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nulla, explicabo iste a rerum pariatur.</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit commodi obcaecati cumque consectetur alias incidunt?</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius,facere. Fuga asperiores inventore iste tempora.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">$95</td>
                                    <td class="pro-price">$75</td>
                                    <td class="pro-price">$60</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Size</td>
                                    <td class="pro-color">Medium</td>
                                    <td class="pro-color">Small</td>
                                    <td class="pro-color">Large</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">Stock Out</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Add to cart</td>
                                    <td><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                    <td><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0 disabled">Add to Cart</a></td>
                                    <td><a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="product-rating">
                                            <span class="ratings mb-0">
                                                    <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                            </span>
                                    </td>
                                    <td class="product-rating">
                                            <span class="ratings mb-0">
                                                    <span class="rating-wrap">
                                                    <span class="star" style="width: 90%"></span>
                                            </span>
                                    </td>
                                    <td class="product-rating">
                                            <span class="ratings mb-0">
                                                    <span class="rating-wrap">
                                                    <span class="star" style="width: 80%"></span>
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Remove</td>
                                    <td class="pro-remove">
                                        <button><i class="pe-7s-trash"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="pe-7s-trash"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="pe-7s-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- Compare Table End -->
                        </div>
                    </div>
                    <!-- Compare Page Content End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Compare Section End -->
@endsection
