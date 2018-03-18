@extends('admin.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <br>
                        {{--End trigger--}}
                        <h3 class="profile-username text-center">{{ $user->name }}</h3>

                        <p class="text-muted text-center">ZShop</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Birthday</b> <a
                                        class="pull-right">{{ ($user->birthday != null) ? $user->birthday->format('d-m-Y') : "" }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right">{{ ($user->gender)?"Male":"Female" }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone number</b> <a class="pull-right">{{ $user->phone }}</a>
                            </li>
                        </ul>

                        <a href="{{ route('admin.user.edit', ['id'=>$user->id]) }}"
                           class="btn btn-primary btn-block"><b>Edit</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-home margin-r-5"></i> Address</strong>

                        <p class="text-muted">
                            {{ $user->address }}
                        </p>

                        <hr>

                        <strong><i class="fa fa fa-envelope margin-r-5"></i> Email</strong>

                        <p class="text-muted">
                            {{ $user->email }}
                        </p>
                        <hr>
                    </div>
                    <!-- /.box-body -->
                </div>

            <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#order" data-toggle="tab">Orders</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="order">

                            <!-- Post -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover display" id="">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Show</th>
                                        <th>Delete</th>
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
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($user->orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{!! ($order->status == 0) ? "<span class='label label-warning'>pending</span>" :
                                       (($order->status == 1) ? "<span class='label label-primary'>confirmed</span>" :
                                       (($order->status == 2) ? "<span class='label label-success'>deliverd</span>" :
                                        "<span class='label label-danger'>canceled</span>")) !!}</td>
                                            <td>
                                                <a href="{{ route('admin.order.show', $order->id) }}">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-th-list"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" data-id="{{ $order->id }}" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.post -->

                            <!-- Post -->

                            <!-- /.post -->

                            <!-- Post -->

                            <!-- /.post -->
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection()
