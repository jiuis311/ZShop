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
                    <li><a href="#">My Account</a></li>
                    <li><a href="cart.html">Your Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    @if (!\Illuminate\Support\Facades\Auth::guard()->check())
                        <li><a href="{{ url('login') }}">Login</a></li>
                    @else
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
                    <li><a href="./products.html">Woman</a>
                        <ul>
                            <li><a href="./products.html">Lacinia nibh</a></li>
                            <li><a href="./products.html">Eget molestie</a></li>
                            <li><a href="./products.html">Varius purus</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Man</a></li>
                    <li><a href="./products.html">Sport</a>
                        <ul>
                            <li><a href="./products.html">Gifts and Tech</a></li>
                            <li><a href="./products.html">Ties and Hats</a></li>
                            <li><a href="./products.html">Cold Weather</a></li>
                        </ul>
                    </li>
                    <li><a href="./products.html">Hangbag</a></li>
                    <li><a href="./products.html">Best Seller</a></li>
                    <li><a href="./products.html">Top Seller</a></li>
                </ul>
            </nav>
        </div>
    </section>