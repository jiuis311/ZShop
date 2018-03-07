@extends('admin.layouts.master')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add new employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.product.update', $product->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" class="form-control" id="" placeholder="Enter code" name="code" autocomplete="off" value="{{ $product->code }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Enter name" name="name" autocomplete="off" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" name="brand_id">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" {!! ($brand->id == $product->brand_id) ? "selected" : "" !!}>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {!! ($category->id == $product->category_id) ? "selected" : "" !!}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" id="" placeholder="Enter description" rows="3" name="description"  autocomplete="off" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" class="form-control" id="" placeholder="Enter price" name="price" autocomplete="off" value="{{ $product->price }}" required>
                    </div>
                </div>
                <!-- /.box-body -->
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <a href="{{ route('admin.product.show', ['id'=>$product->id]) }}">
            <button class="btn btn-success">Profile</button>
        </a>
    </section>

@endsection
