@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>GST</b>Billing</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
            @include('_message')
            <form action="{{ url('forgot-password') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{ url('/') }}">Login</a>
            </p>
            <p class="mb-0">
                <a href="{{ url('register') }}" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection