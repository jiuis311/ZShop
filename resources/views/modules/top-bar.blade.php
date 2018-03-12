{{--<div id="top-bar" class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="span4">--}}
            {{--<form method="POST" class="search_form">--}}
                {{--<input type="text" class="input-block-level search-query" Placeholder="Search...">--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<div class="span8">--}}
            {{--<div class="account pull-right">--}}
                {{--<ul class="user-menu">--}}
                    {{--<li><a href="{{ route('checkout') }}">Checkout</a></li>--}}
                    {{--<li><a href="{{ route('cart') }}">Your Cart</a></li>--}}
                    {{--@if (!\Illuminate\Support\Facades\Auth::guard()->check())--}}
                        {{--<li><a href="{{ url('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li><a href="#">My Account</a></li>--}}
                        {{--<li><a id="logout" href="#">Logout</a></li>--}}
                        {{--<form action="{{ route('logout') }}" method="post" class="hidden">--}}
                            {{--@csrf--}}
                            {{--<button id="logout-btn" type="submit"></button>--}}
                        {{--</form>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div id="wrapper" class="container">--}}
    {{--<section class="navbar main-menu">--}}
        {{--<div class="navbar-inner main-menu">--}}
            {{--<a href="{{ route('home') }}" class="logo pull-left"><img src="{{ asset('img/themes/logo.png') }}" class="site_logo" alt=""></a>--}}
            {{--<nav id="menu" class="pull-right">--}}
                {{--<ul>--}}
                    {{--<li><a href="{{ route('products') }}">Woman</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{ route('products') }}">Lacinia nibh</a></li>--}}
                            {{--<li><a href="{{ route('products') }}">Eget molestie</a></li>--}}
                            {{--<li><a href="{{ route('products') }}">Varius purus</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="{{ route('products') }}">Man</a></li>--}}
                    {{--<li><a href="{{ route('products') }}">Sport</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="{{ route('products') }}">Gifts and Tech</a></li>--}}
                            {{--<li><a href="{{ route('products') }}">Ties and Hats</a></li>--}}
                            {{--<li><a href="{{ route('products') }}">Cold Weather</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="{{ route('products') }}">Hangbag</a></li>--}}
                    {{--<li><a href="{{ route('products') }}">Best Seller</a></li>--}}
                    {{--<li><a href="{{ route('products') }}">Top Seller</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
        {{--</div>--}}
    {{--</section>--}}


<div class="header" id="home">
    <div class="container">
        <ul>
            @if (!Auth::guard()->check())
                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
            @else
                <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i> My account </a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="hidden">
                        @csrf
                        <button class="hidden" id="logout-btn-hidden" type="submit"></button>
                    </form>
                    <a href="#" id="logout-btn"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Log out </a>
                </li>
            @endif
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="{{ route('home') }}"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>



        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class=" {{ (Route::currentRouteName() == 'home') ? "active menu__item--current" : "" }} menu__item"><a class="menu__link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" {{ (Route::currentRouteName() == 'about') ? "active menu__item--current" : "" }} menu__item"><a class="menu__link" href="{{ route('about') }}">About</a></li>
                            <li class=" {{ (Route::currentRouteName() == 'products') ? "active menu__item--current" : "" }} menu__item"><a class="menu__link" href="{{ route('products') }}">Men's wear</a></li>
                            <li class=" {{ (Route::currentRouteName() == 'products') ? "active menu__item--current" : "" }} dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{ route('products') }}">Clothing</a></li>
                                                <li><a href="{{ route('products') }}">Wallets</a></li>
                                                <li><a href="{{ route('products') }}">Footwear</a></li>
                                                <li><a href="{{ route('products') }}">Watches</a></li>
                                                <li><a href="{{ route('products') }}">Accessories</a></li>
                                                <li><a href="{{ route('products') }}">Bags</a></li>
                                                <li><a href="{{ route('products') }}">Caps & Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="{{ route('products') }}">Jewellery</a></li>
                                                <li><a href="{{ route('products') }}">Sunglasses</a></li>
                                                <li><a href="{{ route('products') }}">Perfumes</a></li>
                                                <li><a href="{{ route('products') }}">Beauty</a></li>
                                                <li><a href="{{ route('products') }}">Shirts</a></li>
                                                <li><a href="{{ route('products') }}">Sunglasses</a></li>
                                                <li><a href="{{ route('products') }}">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="{{ route('products') }}"><img src="img/elite-shop/top1.jpg" alt=" "/></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class=" {{ (Route::currentRouteName() == 'contact') ? "active menu__item--current" : "" }} menu__item"><a class="menu__link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="styled-input">
                            <input type="email" name="email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="img/elite-shop/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="col-md-8 modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="name" required="">
                            <label>Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="password" required="">
                            <label>Password</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="password" name="confirm Password" required="">
                            <label>Confirm Password</label>
                            <span></span>
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                        <li><a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                        <li><a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p><a href="#">By clicking register, I agree to your terms</a></p>

                </div>
                <div class="col-md-4 modal_body_right modal_body_right1">
                    <img src="img/elite-shop/log_pic.jpg" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
