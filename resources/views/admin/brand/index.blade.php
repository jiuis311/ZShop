@extends('admin.layouts.master')

@section('content')

    <section class="content-header">
        <h1>
            Brand List
        </h1>

    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory"><i class="fa fa-fw fa-plus"></i>Add new</button>
                <br/>
                <br/>
                <div class="box">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover display" id="">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" data-id="{{ $brand->id }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $brands->links() }}
                </div>
                <!-- /.box-body -->
                {{--Trigger add new modal--}}
                {{--Add new modal--}}
            </div>
            <!-- /.box -->
        </div>

        <!-- Modal -->
        <div id="addCategory" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Brand</h4>
                    </div>
                    <form action="{{ route('admin.brand.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" class="form-control" placeholder="Enter brand" name="name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        {{--End modal--}}
    </section>
@endsection

@section('javascript')
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploadImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
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
                                    url: 'brand/' + id,
                                    success: function (response) {
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
