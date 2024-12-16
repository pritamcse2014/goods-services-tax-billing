@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Parties Type</h1>
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
                            <h1 class="card-title">Search Parties Type</h1>
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
                                        <a href="{{ url('admin/partiesType') }}" class="btn btn-success">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Parties Type List</h3>
                            <a class="btn btn-primary float-right" href="{{ url('admin/partiesType/add') }}">Add Parties Type</a>
                            <a class="btn btn-success float-right mr-2" href="{{ url('admin/partiesType/pdfGenerator') }}">PDF Generator</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">ID</th>
                                        <th style="width: 40px;">Parties Type Name</th>
                                        <th style="width: 40px;">Created At</th>
                                        <th style="width: 40px;">Updated At</th>
                                        <th style="width: 40px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($getRecord as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->parties_type_name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/partiesType/edit/' .$value->id) }}" class="btn btn-success btn-sm mr-1"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ url('admin/partiesType/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></a>
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