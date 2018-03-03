<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="POST" class="search_form">
                <input type="text" class="input-block-level search-query" Placeholder="Search...">
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                    <li><a href="{{ route('cart') }}">Your Cart</a></li>
                    @if (!\Illuminate\Support\Facades\Auth::guard()->check())
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}">Register</a></li>
                    @else
                        <li><a href="#">My Account</a></li>
                        <li><a id="logout" href="#">Logout</a></li>
                        <form action="{{ route('logout') }}" method="post" class="hidden">
                            @csrf
                            <button id="logout-btn" type="submit"></button>
                        </form>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="{{ route('home') }}" class="logo pull-left"><img src="{{ asset('img/themes/logo.png') }}" class="site_logo" alt=""></a>
            <nav id="menu" class="pull-right">
                <ul>
                    <li><a href="{{ route('products') }}">Woman</a>
                        <ul>
                            <li><a href="{{ route('products') }}">Lacinia nibh</a></li>
                            <li><a href="{{ route('products') }}">Eget molestie</a></li>
                            <li><a href="{{ route('products') }}">Varius purus</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('products') }}">Man</a></li>
                    <li><a href="{{ route('products') }}">Sport</a>
                        <ul>
                            <li><a href="{{ route('products') }}">Gifts and Tech</a></li>
                            <li><a href="{{ route('products') }}">Ties and Hats</a></li>
                            <li><a href="{{ route('products') }}">Cold Weather</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('products') }}">Hangbag</a></li>
                    <li><a href="{{ route('products') }}">Best Seller</a></li>
                    <li><a href="{{ route('products') }}">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>