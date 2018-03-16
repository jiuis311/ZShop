<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
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
                <form action="#" method="post" class="creditly-card-form agileinfo_form">
                    <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="credit-card-wrapper">
                            <div class="first-row form-group">
                                <div class="controls">
                                    <label class="control-label">Name</label>
                                    <input class="billing-address-name form-control" type="text" name="name"
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
                            </div>
                            <button type="submit" class="submit"><span>Make a payment <i class="fa fa-long-arrow-right"
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
        let data = paypal.minicart.cart.items();
        console.log(data);

        for(let i = 0; i < data.length; i++) {
            console.log(data[i]);
            let item = $("<ul></ul>");
            let productName = $("<li></li>").text(data[i]._data.item_name);
            let quantity = $("<span></span>").text("Amount: " + data[i]._data.quantity);
            let code = $("<span></span>").text("Product code: " + data[i]._data.code);
            let price = $("<li></li>").text(data[i]._total + "$");
            productName.append(code, quantity);
            item.append(productName, price);
            $("#item_list").append(item);
        }

        let totalPay = paypal.minicart.cart.total().toFixed(2);
        $("#total_pay").text(totalPay + "$");

    })
</script>

</body>
</html>