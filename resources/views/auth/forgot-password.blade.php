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
                Remember Password
            </h1>
                <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

{{-- forme register --}}
<form method="POST" action="{{ route('password.email') }}" class="Pgregister text-white ">
    @csrf

    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="d-flex align-items-center  mt-4 ">
        <x-primary-button class="bg-warning ">
            {{ __('Email Password Reset Link') }}
        </x-primary-button>
    </div>
</form>

        </div>
    </div>


</section>


@include('home.components.footer')
@endsection




{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
