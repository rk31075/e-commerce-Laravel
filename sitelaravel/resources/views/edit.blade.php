<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
<link rel="stylesheet" href="{{asset ('css/styleheader.css') }}"> 
<link rel="stylesheet" href="{{asset ('css/styleadmin.css') }}">
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
                    <a href="{{ url('register') }}">REGISTER</a>
            </div>
        @endif       
        @endauth 
        </nav>

    




<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="formulaire">
<form action= "{{ route ('product.store') }}" method="POST">
@csrf
@method('PUT')
<div class="choose_console">
<label for="console">Choose a console</label>

<select name="console" id="console">
<option value="ps5">PS4</option>
<option value="ps5">PS5</option>
<option value="xbox">XBOX</option>
<option value="nintendo_switch">Nintendo Switch</option>
<option value="pc">PC</option>
</select>

</div>

<div class="game_name">

<label for="name">Type the game's name :</label>
<input type="text" id="name" name="name">

<br>
</div>

<div class="game_image">
<label for="image">Put the game's image.</label>
<input type="file" id="image" name="image">
</div>

<div class="game_price">
<label for="price">Type the game's price :</label>
<input type="text" id="price" name="price">

<br>
</div>

<div class="game_stock">
<label for="quantity">Stock of this game : </label>
<input type="number" id="quantity" name="quantity" min="1" max="99">
</div>
<div class="game_description">
<label for="price">Type the game's Description :</label>
<input type="text" id="description" class="description" name="description" maxlength="300" size="100">
</div>
<br><br>
<div class="submit_button">
<input type="submit" value="Submit">
</div>
</form>


</div>
</body>

<footer>
                    <a href="https://www.facebook.com/ecole.etna" title="Facebook">
                        <img alt="Facebook" src="{{url ('/images/logos/facebook-logo.jpg') }}" width="50" height="50" />
                    </a>
                    <a href="https://twitter.com/etna_io" title="Twitter">
                        <img alt="Twitter" src="{{url ('images/logos/twitter-logo.jpg') }}" width="50" height="50" />
                    </a>
            </footer>
</html>