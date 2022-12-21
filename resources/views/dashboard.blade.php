{{--@auth--}}
{{--    @if(Auth::user()->role == 'admin')--}}
{{--        <script type="text/javascript">--}}
{{--            window.location = "{{url('/admin')}}";//here double curly bracket--}}
{{--        </script>--}}

{{--        <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>--}}
{{--    @elseif(Auth::user()->role == 'user')--}}
{{--        Route::get('/');--}}
{{--        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Account</a>--}}
{{--    @endif--}}
{{--@else--}}
{{--    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--    @if (Route::has('register'))--}}
{{--        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--    @endif--}}
{{--@endauth--}}






<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
