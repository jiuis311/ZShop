
@extends('layouts.master')

@section('header-content')
    <section class="header_text sub">
        <img class="pageBanner" src="{{ asset('img/shopper/pageBanner.png') }}" alt="New products">
        <h4><span>Login</span></h4>
    </section>
@endsection

@section('main-content')
    <section class="main-content">
        <div class="row">
            <div class="span4"></div>
            <div class="span4">
                <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="hidden" name="next" value="/">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="controls">
                                <input type="email" placeholder="Enter your email" name="email" id="email"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <div class="controls">
                                <input type="password" placeholder="Enter your password" id="password" name="password"
                                       class="input-xlarge">
                            </div>
                        </div>
                        <div class="control-group">
                            <button tabindex="3" class="btn btn-inverse large" type="submit">Sign into your account
                            </button>
                            <hr>
                            <p class="reset">Recover your
                                <a tabindex="4" href="#" title="Recover your username or password">
                                    username or password
                                </a>
                            </p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
@endsection