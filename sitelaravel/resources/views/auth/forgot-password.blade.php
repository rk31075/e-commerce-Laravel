<head>
      <title>Forgot password</title>
      <link rel="stylesheet" href="{{asset ('css/styleforgot.css') }}">
      <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
      <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,500">
</head>
  
      <body>
      <nav class="header_menu">
          <div class="name">
                  <a href=>MICROUMANIA</a>
          </div>
          <div class="username">
              <a href="{{ route('register') }}">REGISTER</a>
          </div>
          <div class="links">
              <a href=>NEWS</a>
              <a class="shop" href=>SHOP</a>
              <a href=>CART</a>
          </div>
        </nav>






<x-guest-layout>
    <x-auth-card>

        <h1>Forgot your password? No problem.</h1>
        <h1>Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h1>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="container" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" /> <br> <br>

                <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <br><br>
            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </div>  
    </x-auth-card>
</x-guest-layout>
</body>