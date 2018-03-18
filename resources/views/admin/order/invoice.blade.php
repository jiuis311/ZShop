@extends('admin.layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Invoice
            <small>#{{ $order->id }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.order.index') }}">Orders</a></li>
            <li class="active">Invoice</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> ZShop
                    <small class="pull-right">Date: {{ $order->updated_at->format('d/m/Y') }}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>ZShop</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    Phone: (804) 123-5432<br>
                    Email: zshop@gmail.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>{{ $order->name }}</strong><br>
                    {{ $order->address }}<br>
                    Phone: {{ $order->phone }}<br>
                    Email: {{ $order->email }}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #{{ $order->id }}</b><br>
                <br>
                <b>Order ID:</b> {{ $order->id }}<br>
                <b>Account:</b> {{ ($order->user_id != null) ? $order->user->name : "" }} ({{ $order->user_id }})
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
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
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-xs-6">
                <p class="lead">Amount Due {{ $order->updated_at->format('d/m/Y') }}</p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>${{ $order->total_price }}</td>
                        </tr>
                        <tr>
                            <th>Tax (10%)</th>
                            <td>${{ number_format($order->total_price*0.1, 2, '.', '') }}</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>${{ number_format($order->total_price*1.1, 2, '.', '') }}</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>{!! ($order->status == 0) ? "<span class='label label-warning'>pending</span>" :
                                       (($order->status == 1) ? "<span class='label label-primary'>confirmed</span>" :
                                       (($order->status == 2) ? "<span class='label label-success'>deliverd</span>" :
                                        "<span class='label label-danger'>canceled</span>")) !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{ route('admin.order.index') }}" class="btn btn-default"><i class="fa fa-list"></i>
                    Back</a>
                <a href="{{ ($order->user_id == null) ? "" : route('admin.user.show', $order->user_id) }}" class="btn btn-primary"
                {{ ($order->user_id == null) ? "disabled" : "" }} ><i class="fa fa-user"></i>
                    Show user</a>
                <a href="{{ route('admin.order.cancel', $order->id) }}"><button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-truck"></i> Cancel</button></a>
                <a href="{{ route('admin.order.deliver', $order->id) }}"><button type="button" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-truck"></i> Deliver</button></a>
                <a href="{{ route('admin.order.confirm', $order->id) }}"><button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-thumbs-o-up"></i> Confirm
                    </button></a>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
@endsection