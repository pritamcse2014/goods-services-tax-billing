@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Parties</h1>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title">Search Parties</h1>
                        </div>
                        <form action="" method="get">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your ID</label>
                                        <input class="form-control" type="text" name="id" value="{{ Request()->id }}" id="" placeholder="Enter Your ID">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Parties Type Name</label>
                                        <input class="form-control" type="text" name="parties_type_name" value="{{ Request()->parties_type_name }}" id="" placeholder="Enter Your Parties Type Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Full Name</label>
                                        <input class="form-control" type="text" name="full_name" value="{{ Request()->full_name }}" id="" placeholder="Enter Your Full Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Phone Number</label>
                                        <input class="form-control" type="phone" name="phone_no" value="{{ Request()->phone_no }}" id="" placeholder="Enter Your Phone Number">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Address</label>
                                        <input class="form-control" type="text" name="address" value="{{ Request()->address }}" id="" placeholder="Enter Your Address">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Account Holder Name</label>
                                        <input class="form-control" type="text" name="account_holder_name" value="{{ Request()->account_holder_name }}" id="" placeholder="Enter Your Account Holder Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Account No</label>
                                        <input class="form-control" type="text" name="account_no" value="{{ Request()->account_no }}" id="" placeholder="Enter Your Account No">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Bank Name</label>
                                        <input class="form-control" type="text" name="bank_name" value="{{ Request()->bank_name }}" id="" placeholder="Enter Your Bank Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your IFSC Code</label>
                                        <input class="form-control" type="text" name="ifsc_code" value="{{ Request()->ifsc_code }}" id="" placeholder="Enter Your IFSC Code">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Branch Address</label>
                                        <input class="form-control" type="text" name="branch_address" value="{{ Request()->branch_address }}" id="" placeholder="Enter Your Branch Address">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Created At</label>
                                        <input class="form-control" type="date" name="created_at" value="{{ Request()->created_at }}" id="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Updated At</label>
                                        <input class="form-control" type="date" name="updated_at" value="{{ Request()->updated_at }}" id="">
                                    </div>
                                    <div style="clear: both;"></div>
                                    <br>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                        <a href="{{ url('admin/parties') }}" class="btn btn-success">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Parties List</h3>
                            <a class="btn btn-primary float-right" href="{{ url('admin/parties/add') }}">Add Parties</a>
                            <a class="btn btn-success float-right mr-2" href="{{ url('admin/parties/pdfGenerator') }}">PDF Generator</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Parties Type Name</th>
                                        <th>Full Name</th>
                                        <th>Phone No</th>
                                        <th>Address</th>
                                        <th>Account Holder Name</th>
                                        <th>Account No</th>
                                        <th>Bank Name</th>
                                        <th>IFSC Code</th>
                                        <th>Branch Address</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($getRecord as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->parties_type_name }}</td>
                                        <td>{{ $value->full_name }}</td>
                                        <td>{{ $value->phone_no }}</td>
                                        <td>{{ $value->address }}</td>
                                        <td>{{ $value->account_holder_name }}</td>
                                        <td>{{ $value->account_no }}</td>
                                        <td>{{ $value->bank_name }}</td>
                                        <td>{{ $value->ifsc_code }}</td>
                                        <td>{{ $value->branch_address }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/parties/edit/' .$value->id) }}" class="btn btn-success btn-sm mb-1"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ url('admin/parties/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="100%">No Record Found....</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {!! $getRecord->appends(Request::except('page'))->links() !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
    </section>
</div>
@endsection