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
                            <h3 class="card-title">Parties List</h3>
                            <a class="btn btn-primary float-right" href="{{ url('admin/parties/add') }}">Add Parties</a>
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
                                            <a href="{{ url('admin/parties/edit/' .$value->id) }}" class="btn btn-success btn-sm mr-1"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ url('admin/parties/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></a>
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