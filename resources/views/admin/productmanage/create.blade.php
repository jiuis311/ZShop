@extends('admin.layouts.master')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add new product</h3>
                <a href="{{ route('admin.product.index') }}"><button class="btn btn-success pull-right"><i class="fa fa-cubes"></i> Product list</button></a>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" class="form-control" id="" placeholder="Enter code" name="code" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="" placeholder="Enter name" name="name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control" name="brand_id">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" class="form-control" id="" placeholder="Enter description" rows="3" name="description"  autocomplete="off"  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" id="" placeholder="Enter price" name="price" autocomplete="off" onkeyup="splitInDots(this)" required>
                    </div>
                    <div class="form-group">
                        <label for="imgFile">Upload images</label><br>
                        <img class="hidden" id="uploadImg" src="#" alt="your image" />
                        <input class="hidden" type="file" id="imgFile" name="img">
                        <button type="button" id="uploadImgBtn" class="btn btn-success"><i class="fa fa-fw fa-upload"></i>Upload</button>
                        <p class="help-block">Upload profile picture</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

@endsection

@section('javascript')
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploadImg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $("#imgFile").change(function () {
                $('#uploadImg').removeClass('hidden');
                readURL(this);
            });
            $('#uploadImgBtn').on('click', function() {
                $("#imgFile").trigger('click');
            })
        });
        function reverseNumber(input) {
            return [].map.call(input, function(x) {
                return x;
            }).reverse().join('');
        }

        function plainNumber(number) {
            return number.split('.').join('');
        }

        function splitInDots(input) {

            var value = input.value,
                plain = plainNumber(value),
                reversed = reverseNumber(plain),
                reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
                normal = reverseNumber(reversedWithDots);

            console.log(plain,reversed, reversedWithDots, normal);
            input.value = normal;
        }


    </script>
@endsection
