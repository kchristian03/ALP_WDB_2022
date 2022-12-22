@extends("users.layouts.users-layout")

@section('pageTitle', 'My Account')

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">My Account</h1>
                    <ul>
                        <li>
                            <a href="/">Home </a>
                        </li>
                        <li class="active"> My Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- My Account Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboard" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    @if(Auth::check() && Auth::user()->status == 'admin')
                                        <a href="#admin" data-bs-toggle="tab"><i class="fa fa-lock"></i>
                                            Admin Panel</a>
                                    @endif
                                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                    @if (Auth::check() && Auth::user()->status == 'admin')
                                        {{-- <a href="#download" data-bs-toggle="tab"><i class="fa fa-cloud-download"></i> Users</a> --}}
                                    @endif
                                    @if (Auth::check() && Auth::user()->status == 'admin')
                                        {{-- <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment Method</a> --}}
                                    @else
                                    @endif
                                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                    {{-- <a href="#feedbacks" data-bs-toggle="tab"><i class="fa fa-chat"></i> Feedbacks</a> --}}
                                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                    {{--                                    <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>--}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            <i class="fa fa-sign-out"></i>
                                            {{ __('LogOut') }}
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Dashboard</h3>
                                            <div class="welcome">
                                                <p>Hello, <strong> {{Auth::user()->name}} </strong></p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="admin" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Admin Panel</h3>
                                            <a href="/admin">Go to Admin Panel</a>

                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        @livewire('order')
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="feedbacks" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Feedback</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Feedback</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Pending</td>
                                                        <td>$3000</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>July 22, 2018</td>
                                                        <td>Approved</td>
                                                        <td>$200</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>June 12, 2019</td>
                                                        <td>On Hold</td>
                                                        <td>$990</td>
                                                        <td><a href="cart.html" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">View</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Downloads</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Haven - Free Real Estate PSD Template</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HasTech - Profolio Business Template</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-cloud-download me-1"></i> Download File</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title"> Address</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Adress</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Postal Code</th>
                                                        <th>Description</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($adress as $ad)

                                                        <tr>
                                                            <td>{{$ad['adress_name']}}</td>
                                                            <td>{{$ad['full_street_adress']}}</td>
                                                            <td>{{$ad['state']}}</td>
                                                            <td>{{$ad['city']}}</td>
                                                            <td>{{$ad['postal_code']}}</td>
                                                            <td>{{$ad['description']}}</td>
                                                            <td><a href="/adress" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Edit</a></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a href="/adress" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-edit me-2"></i>New Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Account Details</h3>
                                            <div class="account-details-form">
                                                <div class="my-3">
                                                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                        {{ __('Profile Information') }}
                                                    </h2>

                                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                        {{ __("Update your account's profile information and email address.") }}
                                                    </p>
                                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                                        @csrf
                                                    </form>
                                                    <form method="post" action="{{ route('profile.update') }}">
                                                        @csrf
                                                        @method('patch')
                                                        <div class="single-input-item mb-3">
                                                            <x-input-label for="name" :value="__('Name')"/>
                                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', Auth::user()->name)" required autofocus autocomplete="name"/>
                                                            <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                                                        </div>
                                                        <div class="single-input-item mb-3">
                                                            <x-input-label for="username" :value="__('Username')"/>
                                                            <x-text-input id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', Auth::user()->username)" required autofocus autocomplete="username"/>
                                                            <x-input-error class="mt-2" :messages="$errors->get('username')"/>
                                                        </div>
                                                        <div class="single-input-item mb-3">
                                                            <x-input-label for="email" :value="__('Email')"/>
                                                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', Auth::user()->email)" required autocomplete="email"/>
                                                            <x-input-error class="mt-2" :messages="$errors->get('email')"/>

                                                            @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                                <div>
                                                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                                                        {{ __('Your email address is unverified.') }}

                                                                        <button form="send-verification"
                                                                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                                                            {{ __('Click here to re-send the verification email.') }}
                                                                        </button>
                                                                    </p>

                                                                    @if (session('status') === 'verification-link-sent')
                                                                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="single-input-item single-item-button">
                                                            <button class="btn btn btn-dark btn-hover-primary rounded-0">{{ __('Save Change') }}</button>

                                                            @if (session('status') === 'profile-updated')
                                                                <p
                                                                    x-data="{ show: true }"
                                                                    x-show="show"
                                                                    x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600 dark:text-gray-400"
                                                                >{{ __('Saved.') }}</p>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="my-12">
                                                    <form method="post" action="{{ route('password.update') }}">
                                                        @csrf
                                                        @method('put')
                                                        <fieldset>
{{--                                                            <legend>Password change</legend>--}}
                                                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                                {{ __('Update Password') }}
                                                            </h2>

                                                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                                                            </p>
                                                            <div class="single-input-item mb-3">
                                                                <x-input-label for="current_password" :value="__('Current Password')"/>
                                                                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password"/>
                                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2"/>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item mb-3">
                                                                        <x-input-label for="password" :value="__('New Password')"/>
                                                                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password"/>
                                                                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="single-input-item mb-3">
                                                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                                                                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password"/>
                                                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="single-input-item single-item-button">
                                                            <button class="btn btn btn-dark btn-hover-primary rounded-0">{{ __('Save Changes') }}</button>
                                                            @if (session('status') === 'password-updated')
                                                                <p
                                                                    x-data="{ show: true }"
                                                                    x-show="show"
                                                                    x-transition
                                                                    x-init="setTimeout(() => show = false, 2000)"
                                                                    class="text-sm text-gray-600 dark:text-gray-400"
                                                                >{{ __('Saved.') }}</p>
                                                            @endif
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

{{--                                            <div class="">--}}
{{--                                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">--}}
{{--                                                    {{ __('Delete Account') }}--}}
{{--                                                </h2>--}}

{{--                                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}--}}
{{--                                                </p>--}}

{{--                                                <button class="btn btn btn-dark btn-danger btn-hover-primary rounded-0" data-toggle="modal" data-target="#confirm-user-deletion" >{{ __('Delete Account') }}</button>--}}

{{--                                                <x-danger-button--}}
{{--                                                    x-data=""--}}
{{--                                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"--}}
{{--                                                >{{ __('Delete Account') }}--}}
{{--                                                </x-danger-button>--}}

{{--                                                <div class="modal fade" id="confirm-user-deletion" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--                                                    <div class="modal-body">--}}
{{--                                                        <h1>aaa</h1>--}}
{{--                                                    </div>--}}
{{--                                                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('delete')--}}

{{--                                                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Are you sure your want to delete your account?</h2>--}}

{{--                                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                                                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}--}}
{{--                                                        </p>--}}

{{--                                                        <div class="mt-6">--}}
{{--                                                            <x-input-label for="password" value="Password" class="sr-only" />--}}

{{--                                                            <x-text-input--}}
{{--                                                                id="password"--}}
{{--                                                                name="password"--}}
{{--                                                                type="password"--}}
{{--                                                                class="mt-1 block w-3/4"--}}
{{--                                                                placeholder="Password"--}}
{{--                                                            />--}}

{{--                                                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />--}}
{{--                                                        </div>--}}

{{--                                                        <div class="mt-6 flex justify-end">--}}
{{--                                                            <x-secondary-button x-on:click="$dispatch('close')">--}}
{{--                                                                {{ __('Cancel') }}--}}
{{--                                                            </x-secondary-button>--}}

{{--                                                            <x-danger-button class="ml-3">--}}
{{--                                                                {{ __('Delete Account') }}--}}
{{--                                                            </x-danger-button>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Page End -->

                </div>
            </div>

        </div>
    </div>
    <!-- My Account Section End -->
@endsection
