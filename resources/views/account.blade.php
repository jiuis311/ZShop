<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include('admin.layouts.header')
    <title>Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Steppy Account Create Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/account/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
    <!-- //web font -->
</head>
<body>
{{--modal--}}
@foreach (Auth::user()->orders as $order)
    <!-- Modal -->
    <div id="myModal{{ $order->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Order {{$order->id}}</h4>
                </div>
                <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Qty</th>
                                <th>Product</th>
                                <th>Serial #</th>
                                <th>Price</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{--Items--}}
                            @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <td>{{ $orderDetail->quantity }}</td>
                                    <td>{{ $orderDetail->product->name }}</td>
                                    <td>{{ $orderDetail->product->code }}</td>
                                    <td>${{ $orderDetail->product->price }}</td>
                                    <td>${{ $orderDetail->total_price }}</td>
                                </tr>
                            @endforeach
                            {{--/Items--}}

                            </tbody>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    {{--/Modal--}}
@endforeach

<!-- main-->
<div class="main-agileits">
    <h1>{{ Auth::user()->name }}'s account</h1>
    <div class="main-row">
        <ul class="steps">
            <li class="is-active">Orders</li>
        </ul>
        <table class="table table-hover display" id="">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Total price</th>
                <th>Order date</th>
                <th>Status</th>
                <th>Show</th>
                <th>Cancel</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
            <tbody>
            @foreach (Auth::user()->orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->total_price }}$</td>
                    <td>{{ ($order->created_at)->format('d/m/Y') }}</td>
                    <td>{!! ($order->status == 0) ? "<span class='label label-warning'>pending</span>" :
                                       (($order->status == 1) ? "<span class='label label-primary'>confirmed</span>" :
                                       (($order->status == 2) ? "<span class='label label-success'>deliverd</span>" :
                                        "<span class='label label-danger'>canceled</span>")) !!}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal{{ $order->id }}">
                                <i class=" fa fa-th-list"></i>
                        </button>

                    </td>
                    <td>
                        <a href="{{ route('account.cancel', $order->id) }}">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a href="{{ route('home') }}" class="btn btn-success"><i class="fa fa-home"></i>
            Home</a>
    </div>
</div>




<!-- //main -->
<!-- copyright -->
<div class="w3copyright-agile">
    <p>© 2017 Steppy Account Create Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- //copyright -->
<!-- js -->
@include('admin.layouts.footer')
<!-- //js -->
</body>
</html>