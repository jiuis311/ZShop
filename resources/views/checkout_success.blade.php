<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    @include('layouts.header')
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cool 404 Page Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/checkout-success/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
    <div class="nav_w3l">
    </div>
    <h1>SUCCESS</h1>
    <h2>You have successfully ordered. <br>
        We will contact you later</h2>
    <div class="more_w3ls">
        <a href="{{ route('home') }}">Back to home page</a>
    </div>
    <div class="copyright">
        <p>© 2016 Cool 404 Page Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>

@include('layouts.footer')
<script>
    $(function() {
        paypal.minicart.reset();
    })
</script>

</body>
</html>