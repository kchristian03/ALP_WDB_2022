@extends("layouts.auth-layout")

@section('pageTitle', 'Login')

@section('content')
    <!-- Login | Register Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-lg-6 col-md-8 m-auto">
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="{{ route('register') }}" method="post">
                            @csrf

                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                {{--                                <input type="text" placeholder="First Name">--}}
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                {{--                                <input type="email" placeholder="Email or Username">--}}
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                {{--                                <input type="email" placeholder="Email or Username">--}}
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                              type="password"
                                              name="password"
                                              required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- Input Password End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                              type="password"
                                              name="password_confirmation" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <!-- Input Password End -->






                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">{{ __('Register') }}</button>
                            </div>
                            <!-- Register Button End -->
                            <div class="lost-password">
                                <a href="{{ route('login') }}" class="forget-pwd mb-3">{{ __('Already registered?') }}</a>
                            </div>

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Login | Register Section End -->
@endsection
