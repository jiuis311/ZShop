@extends('admin.layouts.master')

@section('content')

    <section class="content-header">
        <h1>
            {{ $brand->product }}'s product List
        </h1>

    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <a href="{{ route('admin.product.create') }}"><button type="button" class="btn btn-success" ><i class="fa fa-fw fa-plus"></i>Add new</button></a>
                <br/>
                <br/>
                <div class="box">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover display" id="">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Show</th>
                            <th>Edit</th>
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
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $products = $brand->products()->orderBy('updated_at', 'desc')->paginate(10);
                        @endphp
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ route('admin.product.show', $product->id) }}">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-th-list"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}">
                                        <button class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" data-id="{{ $product->id }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
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
                                    url: 'product/' + id,
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
