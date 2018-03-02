@extends('admin.layouts.master')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add new user</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        @if ($errors->has('name'))
                            <p class="input-warning">{{ $errors->first('name') }}</p>
                        @endif
                        <input type="text" class="form-control" id="" placeholder="Enter name" name="name" autocomplete="off" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        @if ($errors->has('email'))
                            <p class="input-warning">{{ $errors->first('email') }}</p>
                        @endif
                        <input type="email" class="form-control" id="" placeholder="Enter email" name="email" autocomplete="off" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        @if ($errors->has('password'))
                            <p class="input-warning">{{ $errors->first('password') }}</p>
                        @endif
                        <input type="password" class="form-control" id="" placeholder="Enter password" name="password" autocomplete="off" value="{{ old('password') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="optionsRadios1" value="1" checked >
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="optionsRadios2" value="0" >
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Phone number</label>
                        @if ($errors->has('phone'))
                            <p class="input-warning">{{ $errors->first('phone') }}</p>
                        @endif
                        <input type="text" class="form-control" id="" placeholder="Enter phone number" name="phone"  autocomplete="off" value="{{ old('phone_number') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        @if ($errors->has('address'))
                            <p class="input-warning">{{ $errors->first('address') }}</p>
                        @endif
                        <input type="text" class="form-control" id="" placeholder="Enter address" name="address" autocomplete="off" value="{{ old('address') }}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <a href="{{ route('admin.user.index') }}"><button class="btn btn-success pull-right"><i class="fa fa-users"></i> User list</button></a>
    </section>

@endsection
