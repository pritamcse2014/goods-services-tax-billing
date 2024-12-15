@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Account</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('_message')
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">My Account Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/myAccount/update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" id="" placeholder="Enter Your Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Email <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="{{ $getRecord->email }}" class="form-control" id="" placeholder="Enter Your Email" required />
                                        <span style="color: red;">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Profile Image </label>
                                    <div class="col-sm-10">
                                        <input type="file" name="profile_image" class="form-control" id="" /> @if (!empty($getRecord->profile_image)) @if (file_exists('upload/'.$getRecord->profile_image))
                                        <img style="width: 100px; height: 100px;" class="mt-1" src="{{ url('upload/'.$getRecord->profile_image) }}" alt="" srcset=""> @endif @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Password </label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="" placeholder="Enter Your Password" /> (Leave blank if you are not changing the password)
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url('admin/myAccount') }}" class="btn btn-secondary float-right">Reset</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

</div>

@endsection