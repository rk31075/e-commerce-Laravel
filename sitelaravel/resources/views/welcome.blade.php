

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
            <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}"> 
            <link rel="stylesheet" href="{{asset ('css/stylewelcome.css') }}">
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
                    <a href="{{ url('register') }}">REGISTER</a>
            </div>
        @endif       
        @endauth 
        </nav>
        <h1>Welcome ! </h1> 
        <footer class="footer_menu">
                    <a href="https://www.facebook.com/ecole.etna" title="Facebook">
                        <img alt="Facebook" src="{{url ('/images/logos/facebook-logo.jpg') }}" width="50" height="50" />
                    </a>
                    <a href="https://twitter.com/etna_io" title="Twitter">
                        <img alt="Twitter" class="img2" src="{{url ('images/logos/twitter-logo.jpg') }}" width="50" height="50" />
                    </a>
        </footer>


    </body>
        
    </html>