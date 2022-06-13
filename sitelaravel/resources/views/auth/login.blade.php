
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
    <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}"> 
    <link rel="stylesheet" href="{{asset ('css/stylelogin.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,500">
</head>

<body>
<nav class="header_menu">
                
                <a class="logosite" href="{{ url('welcome') }}">STALL</a> <img alt="Facebook" src="{{url ('/images/logos/site-logo.png') }}" width="50" height="50">

                <div class="links">
                        <a href=>NEWS</a>
                        <a class="shop" href=>SHOP</a>
                        <a href=>CART</a>
                </div>
        @if (Route::has('login')) 
                <div class="account">
                    @auth
                    <a href=>{{ Auth::user()->name }}</a>
                    
                </div>
                    <button class="buttonbg">
                        <form method="POST" class="disconnect" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </button>
        @else
            <div class="register">
                    <a href="{{url ('register')}}">REGISTER</a>
            </div>
        @endif        
        @endauth
        </nav>
    

<h1>LOGIN</h1>
<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container">

        <form method="POST" class="login" action="{{ route('login') }}">
            @csrf
            
                <p class="donthave">Don't have an account ?</p> <a class="coucou" href="{{ route('register') }}">
                        {{ __('Register here') }}
                    </a> 
                <br>

            <!-- Email Address -->
            <div class="email">
                <x-label for="email" :value="__('Email')" /> <br><br>

                <x-input id="email" placeholder="E-mail" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> <br><br>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" /> <br><br>

                <x-input id="password" placeholder="Password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" /> <br><br>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="span">{{ __('Remember me') }}</span>
                </label>
            </div>
            <br>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="coucou" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif 
                <br><br>

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>
    </x-auth-card>
</x-guest-layout>

<footer>
                    <a href="https://www.facebook.com/ecole.etna" title="Facebook">
                        <img alt="Facebook" src="{{url ('/images/logos/facebook-logo.jpg') }}" width="50" height="50" />
                    </a>
                    <a href="https://twitter.com/etna_io" title="Twitter">
                        <img alt="Twitter" src="{{url ('images/logos/twitter-logo.jpg') }}" width="50" height="50" />
                    </a>
            </footer>
</body>
</html>
