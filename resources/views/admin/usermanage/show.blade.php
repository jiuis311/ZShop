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
                    <h3 class="box-title">{{ $user->name }}</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    Name: {{ $user->name }}
                    <br>
                    Gender: {{ ($user->gender)?"Male":"Female" }}
                    <br>
                    Email: {{ $user->email }}
                    <br>
                    Phone number: {{ $user->phone_number }}
                    <br>
                    Address: {{ $user->address }}
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.user.edit', ['id'=>$product->id]) }}">
                        <button class="btn btn-warning">Edit information</button>
                    </a>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            <a href="{{ route('admin.user.index') }}"><button class="btn btn-success pull-left"><i class="fa fa-users"></i> User list</button></a>

            {{--Upload image modal--}}
            <!-- Modal -->
        </section>
    </section>
@endsection

