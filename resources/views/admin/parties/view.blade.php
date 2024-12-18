@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Parties</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">View Parties</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">ID </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->id }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Parties Type Name </label>
                                    <div class="col-sm-10">
                                        {{ !empty($getParties->partiesPdfSingle->parties_type_name) ? $getParties->partiesPdfSingle->parties_type_name : '' }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Full Name </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->full_name }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Phone No </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->phone_no }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Address </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->address }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Account Holder Name </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->account_holder_name }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Account No </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->account_no }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Bank Name </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->bank_name }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">IFSC Code </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->ifsc_code }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Branch Address </label>
                                    <div class="col-sm-10">
                                        {{ $getParties->branch_address }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Created At </label>
                                    <div class="col-sm-10">
                                        {{ date('d-m-Y H:i A', strtotime($getParties->created_at)) }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Updated At </label>
                                    <div class="col-sm-10">
                                        {{ date('d-m-Y H:i A', strtotime($getParties->updated_at)) }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ url('admin/parties') }}" class="btn btn-secondary float-right">Cancel</a>
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