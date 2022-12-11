@extends("errors.layouts.error-layout")

@section('pageTitle', '500 - Server Error')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">500 Error</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> 500 Error</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- 404 Error Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1 class="title">500</h1>
                        <h2 class="sub-title">SERVER ERROR</h2>
                        {{--                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or is temporarily unavailable.</p>--}}
                        <form class="search-form-error mb-8" action="#">
                            <input class="input-text" placeholder="Search..." type="text">
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <a href="index.html" class="btn btn-primary btn-hover-dark rounded-0">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Error Section End -->
@endsection
