<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

    @include('layouts.header')

    <title>Tabs Payment Form Flat Responsive Widget Template :: w3layouts</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tabs Payment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="{{ asset('css/payment/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/payment/creditly.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/payment/easy-responsive-tabs.css') }}">
    <script src="{{ asset('js/payment/jquery.min.js') }}"></script>
    <!-- font-awesome-icons -->
    <link href="{{ asset('css/payment/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Mirza:400,500,600,700&amp;subset=arabic,latin-ext" rel="stylesheet">

</head>
<body>

{{--header--}}
<div class="header" id="home">
    <div class="container">
        <ul>
            <li> <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
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
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567800</li>
        </ul>
    </div>
</div>
{{--/header--}}

<div class="main">

    <h1> Payment </h1>
    <div class="w3_agile_main_grids">
        <div class="w3layouts_main_grid_left">
            <div class="agileinfo_main_grid_left_grid" id="item_list">
                <h3>Payment Summary</h3>

                {{--Item list (Add by javascript)--}}

            </div>
            <div class="agile_amount">
                <h3>Total Price</h3>
                <h4 id="total_pay">523.63 GBP</h4>
                <p>Price includes all taxes</p>
            </div>
        </div>
        <div class="agileits_main_grid_right">
            <div class="wthree_payment_grid">
                <h2>Payment detail</h2>
                <form action="{{ route('order') }}" method="post" class="creditly-card-form agileinfo_form">
                    @csrf
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="credit-card-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Name</label>
                                        <input class="billing-address-name form-control" type="text"
                                               name="name"
                                               placeholder="Your name" required>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Ship to</label>
                                        <input class="form-control" type="text"
                                               name="address"
                                               placeholder="Enter shipping address" required>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Phone number</label>
                                        <input class="form-control" type="number"
                                               name="phone"
                                               placeholder="Enter phone number" required>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Email</label>
                                        <input class="form-control" type="email"
                                               name="email"
                                               placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div id="hidden-data">
                                    {{--Hidden data TODO--}}
                                </div>
                                <button type="submit" id="hidden-btn" class="hidden"></button>
                                <button type="button" class="submit"><span id="submit-btn">Make a payment <i class="fa fa-long-arrow-right"
                                                                                             aria-hidden="true"></i></span></button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="agileits_copyright">
        <p>© 2017 Tabs Payment Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
</div>


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
                    <img src="{{ asset('img/elite-shop/log_pic.jpg') }}" alt=" "/>
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
                    <img src="{{ asset('img/elite-shop/log_pic.jpg') }}" alt=" "/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->




<--script-->

    @include('layouts.footer')

<!-- credit-card -->
<script type="text/javascript" src="{{ asset('js/payment/creditly.js') }}"></script>
<script type="text/javascript">
    $(function() {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form .submit").click(function(e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
</script>
<!-- //credit-card -->
<!-- tabs -->
<script src="{{ asset('js/payment/easy-responsive-tabs.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

</script>
<!-- //tabs -->

<script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
<script>
    paypal.minicart.render();
</script>
<script>
    $(function() {
        // Load data to checkout page
        let data = paypal.minicart.cart.items();
        console.log(data);

        for(let i = 0; i < data.length; i++) {
            console.log(data[i]);
            let item = $("<ul></ul>");
            let productName = $("<li></li>").text(data[i]._data.item_name);
            let quantity = $("<span></span>").text("Amount: " + data[i]._data.quantity);
            let code = $("<span></span>").text("Product code: " + data[i]._data.code);
            let price = $("<li></li>").text(data[i]._total.toFixed(2) + "$");
            productName.append(code, quantity);
            item.append(productName, price);
            $("#item_list").append(item);

            // Append item to post
            let itemInput = $("<div></div>");

            // Append name
            let productId = document.createElement("INPUT");
            productId.setAttribute("type", "hidden");
            productId.setAttribute("name", "item[" + i + "][product_id]");
            productId.setAttribute("value", data[i]._data.id);
            itemInput.append(productId);

            // Append price
            price = $("<input>");
            price = price.attr({
                type: 'hidden',
                name: "item[" + i + "][price]",
                value: data[i]._data.amount
            });
            itemInput.append(price);

            // Append quantity
            quantity = $("<input>");
            quantity = quantity.attr({
                type: 'hidden',
                name: "item[" + i + "][quantity]",
                value: data[i]._data.quantity
            });
            itemInput.append(quantity);

            // Append total price
            let totalPrice = $("<input>");
            totalPrice = totalPrice.attr({
                type: 'hidden',
                name: "item[" + i + "][total_price]",
                value: data[i]._total.toFixed(2)
            });
            itemInput.append(totalPrice);

            $('#hidden-data').append(itemInput);
        }

        let totalPay = paypal.minicart.cart.total().toFixed(2);
        $("#total_pay").text(totalPay + "$");

        // Append total price order
        let totalPrice = $("<input>");
        totalPrice = totalPrice.attr({
            type: 'hidden',
            name: "total_price",
            value: totalPay
        });
        $('#hidden-data').append(totalPrice);

        // Submit btn
        $('#submit-btn').on('click', function() {
            console.log('Clicked');
            $('#hidden-btn').trigger('click');
        })
    })
</script>

</body>
</html>