<section class="">

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid navbar1">
            <a class="navbar-brand text-warning" href="/">GHIZLANE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/reservation">Reservation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Online Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contact">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex gap-2 mx-lg-5" role="search">
                    @if (auth()->user())
                    <div class="dropdown us">
                        <button class="btn btnNav bg-warning   dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="font-medium ">{{ Auth::user()->name }}</p>
                        </button>
                        <ul class="dropdown-menu w-4">
                          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">profile</a></li>
                          <li><a class="dropdown-item" href="#">My Reservation</a></li>
                          <li> 
                            <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="border-none">
                {{ __('Log Out') }}
            </button>
        </form>
    </li>
                       
                        </ul>
                      </div>
                        {{-- <a href="{{ route('profile.edit') }}"></a>  --}}
                    @else
                        <button  class="btn btn-outline-dark" type="submit" ><a href="login" class="text-decoration-none text-white">Sign in</a></button>

                        <button id="clickMe" type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Sign Up
                        </button>
                    @endif

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog regis">
                            <div class="modal-content">
                                <div class="modal-header text-warning">
                                    <h1 class="modal-title  " id="exampleModalLabel">Become a member</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                        </div>
                    </div>
                    {{--  --}}
                </div>
                {{--  --}}

                {{--  --}}
            </div>
        </div>
    </nav>
</section>
