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
                Become a member
            </h1>
{{-- forme register --}}
<form method="POST" action="{{ route('register') }}" class="Pgregister text-white ">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-warning " href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4 bg-warning">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>

        </div>
    </div>


</section>


@include('home.components.footer')
@endsection
