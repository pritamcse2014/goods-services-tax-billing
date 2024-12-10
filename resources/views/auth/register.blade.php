@extends('layouts.app')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href=""><b>GST</b>Billing</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ url('register') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Name" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Your Email" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span style="color: red;">{{ $errors->first('email') }}</span>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span style="color: red;">{{ $errors->first('password') }}</span>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" />
                            <label for="agreeTerms">
                                I agree to the terms
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ url('/') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.card -->
</div>
<!-- /.register-box -->
@endsection