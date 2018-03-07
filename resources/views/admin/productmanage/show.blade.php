@extends('admin.layouts.master')

@section('content')

    <section class="content-header">
        <h1>
            Profile
        </h1>
    </section>

    <section class="content">
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $product->name }}</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Code: {{ $product->code }}
                    <br>
                    Name: {{ $product->name }}
                    <br>
                    Brand: {{ $product->brand->name }}
                    <br>
                    Category: {{ $product->category->name }}
                    <br>
                    Description: {{ $product->description }}
                    <br>
                    Price: {{ $product->price }}
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.product.edit', ['id'=>$product->id]) }}">
                        <button class="btn btn-warning">Edit information</button>
                    </a>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            <a href="{{ route('admin.product.index') }}"><button class="btn btn-success pull-left"><i class="fa fa-cubes"></i> Product list</button></a>

            {{--Upload image modal--}}
            <!-- Modal -->
        </section>
    </section>
@endsection

