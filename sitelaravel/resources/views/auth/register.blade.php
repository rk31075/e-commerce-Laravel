<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{asset ('css/styleregister.css') }}">
    <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
    <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}">
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
            <div class="account">
                    <a href="{{ url('login') }}">LOGIN</a>
            </div>
        @endif       
        @endauth 
        </nav>
<h1>SIGN IN</h1>


<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="container">

    

        <form method="POST" class="register"  action="{{ route('register') }}">
            @csrf

            <!-- Name -->

            <p class="already">Already got an account ?</p> <a class="coucou" href="{{ route('login') }}">
                    {{ __('Login here') }}
                </a> 
                <br>
            <div class="name">
                <x-label  for="name" :value="__('Name')" /> <br> <br>


                <x-input id="name" placeholder="Nom" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> <br> <br>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" /> <br> <br>

                <x-input id="email" placeholder="E-mail" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required /> <br> <br>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" /> <br> <br>

                <x-input id="password" placeholder="Mot de passe" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" /> <br> <br>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" /> <br> <br>

                <x-input id="password_confirmation" placeholder="Confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required /> <br><br><br>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>  
    </x-auth-card>
</x-guest-layout>

<footer>
        <a href="https://www.facebook.com/ecole.etna" title="Facebook">
            <img alt="Facebook" src="images/logos/facebook-logo.jpg" width="50" height="50" />
        </a>
        <a href="https://twitter.com/etna_io" title="Twitter">
            <img alt="Twitter" src="images/logos/twitter-logo.jpg" width="50" height="50" />
        </a>
    
</footer>

</body>
