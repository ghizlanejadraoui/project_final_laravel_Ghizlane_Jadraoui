@extends('layouts.index')
@section('content')
@include('home.components.navbar')
{{-- section 1 --}}
<section class=" w-full h-full p-3 ">
    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row justify-content-center align-items-center  ">
        {{-- first div --}}
        <div class="w-full d-flex flex-column justify-content-center align-items-center ">
            <h1 class="blh1 ">
                Join Our Newsletter
            </h1>
            <h3 class="">
                Sign up to be the first to hear about exciting new updates from GHIZLANE Restaurant
            </h3>
        </div>
    </div>
</section>
{{--  --}}
<section class="sec2  w-full h-full p-3">

    <div class="d-flex w-full flex-row flex-column-reverse flex-lg-row  ">
        {{-- first div --}}
        <div class="story w-50 d-lg-flex ">
            <div class="d-flex flex-column align-items-center">
                <img class=" " src="{{ asset('build/assets/images/story3.jpg') }}" alt="">
                <img class=" " src="{{ asset('build/assets/images/story6.jpg') }}" alt="">
            </div>
            <div class="down d-flex flex-column align-items-center">
                <img class=" " src="{{ asset('build/assets/images/story2.jpg') }}" alt="">
                <img class=" " src="{{ asset('build/assets/images/story4.jpg') }}" alt="">
            </div>
        </div>
        {{-- second dev --}}
        <div class="rgsc2 w-50 d-flex flex-column h-auto justify-content-center align-items-center  ">
            <h1 class="text-warning">
                Welcome Home
            </h1>
{{-- forme register --}}
<form method="POST" action="{{ route('login') }}" class="Pgregister text-white ">
    @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-warning text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
</form>

        </div>
    </div>


</section>


@include('home.components.footer')
@endsection





{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
