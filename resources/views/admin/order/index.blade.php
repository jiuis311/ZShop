@extends('admin.layouts.master')

@section('content')

    <section class="content-header">
        <h1>
            Order List
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                </div>
                <!-- /.box-header -->
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
                        @foreach ($orders as $order)
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
                    {{ $orders->links() }}
                </div>
                <!-- /.box-body -->
                {{--Trigger add new modal--}}
                {{--Add new modal--}}
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#userTable').DataTable({
                paging: false,
                info: false,
                bSort : false,
            });
        });
    </script>
    <script>
        $(function () {
            // AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.btn-danger', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                console.log(id);
                var btn = $(this);

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                            if(willDelete) {
                                $.ajax({
                                    type: 'delete',
                                    url: 'order/' + id,
                                    success: function (response) {
                                        console.log('Here');
                                        btn.parent().parent().parent().fadeOut('slow');
                                    },
                                    error: function (xhr, status, error) {
                                        toastr.error('Unable to delete.', 'Error!');
                                    },
                                });
                            }
                        }
                    )
                ;
            });
            // END AJAX

        });

    </script>

@endsection
