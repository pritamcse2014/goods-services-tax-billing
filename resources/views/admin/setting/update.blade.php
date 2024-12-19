@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Setting</h1>
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
                            <h3 class="card-title">Setting Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/setting/update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Website Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="website_name" value="{{ $getRecord->website_name }}" class="form-control" id="" placeholder="Enter Website Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Website Logo <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="website_logo" class="form-control" id="" /> @if (!empty($getRecord->website_logo)) @if (file_exists('upload/'.$getRecord->website_logo))
                                        <img style="width: 100px; height: 100px;" class="mt-1" src="{{ url('upload/'.$getRecord->website_logo) }}" alt="" srcset=""> @endif @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Website Favicon <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="website_favicon" class="form-control" id="" /> @if (!empty($getRecord->website_favicon)) @if (file_exists('upload/'.$getRecord->website_favicon))
                                        <img style="width: 100px; height: 100px;" class="mt-1" src="{{ url('upload/'.$getRecord->website_favicon) }}" alt="" srcset=""> @endif @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url('admin/setting') }}" class="btn btn-secondary float-right">Reset</a>
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