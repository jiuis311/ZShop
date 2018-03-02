@extends('layouts.master')

@section('header-content')
    <section class="header_text sub">
        <img class="pageBanner" src="{{ asset('img/shopper/pageBanner.png') }}" alt="New products">
        <h4><span>Regsiter</span></h4>
    </section>
@endsection

@section('main-content')
    <section class="main-content">
        <div class="row">
            <div class="span4"></div>
            <div class="span4">
                <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="control-group">
                        <label class="control-label">Name</label>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                        <div class="controls">
                            <input type="text" placeholder="Enter your name" name="name" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email address:</label>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <div class="controls">
                            <input type="email" placeholder="Enter your email" name="email" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password:</label>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <div class="controls">
                            <input type="password" placeholder="Enter your password" name="password"
                                   class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Confirm password:</label>
                        <div class="controls">
                            <input type="password" placeholder="Confirm your password" name="password_confirmation"
                                   class="input-xlarge">
                        </div>
                    </div>
                    <button tabindex="9" class="btn btn-inverse large" type="submit">Create your account</button>
                </form>
            </div>
        </div>
    </section>
@endsection