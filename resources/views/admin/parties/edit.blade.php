@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Parties</h1>
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
                            <h3 class="card-title">Edit Parties</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/parties/edit/' .$getParties->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Parties Type Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="parties_type_id" id="" required>
                                            @foreach ($getPartiesType as $partiesType)
                                            <option {{ ($getParties->parties_type_id == $partiesType->id) ? 'selected' : '' }} value="{{ $partiesType->id }}">{{ $partiesType->parties_type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Full Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="full_name" value="{{ $getParties->full_name }}" class="form-control" id="" placeholder="Enter Your Full Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Phone No <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="phone" name="phone_no" value="{{ $getParties->phone_no }}" class="form-control" id="" placeholder="Enter Your Phone No" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Address <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address" value="{{ $getParties->address }}" class="form-control" id="" placeholder="Enter Your Address" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Account Holder Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="account_holder_name" value="{{ $getParties->account_holder_name }}" class="form-control" id="" placeholder="Enter Your Account Holder Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Account No <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="account_no" value="{{ $getParties->account_no }}" class="form-control" id="" placeholder="Enter Your Account No" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Bank Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bank_name" value="{{ $getParties->bank_name }}" class="form-control" id="" placeholder="Enter Your Bank Name" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your IFSC Code <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="ifsc_code" value="{{ $getParties->ifsc_code }}" class="form-control" id="" placeholder="Enter Your IFSC Code" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Your Branch Address <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="branch_address" value="{{ $getParties->branch_address }}" class="form-control" id="" placeholder="Enter Your Branch Address" required />
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update</button>
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