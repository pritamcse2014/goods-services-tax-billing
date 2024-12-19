@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>GST Bills</h1>
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
                            <h1 class="card-title">Search GST Bills</h1>
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
                                        <label for="">Enter Your Invoice Date</label>
                                        <input class="form-control" type="date" name="invoice_date" value="{{ Request()->invoice_date }}" id="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Invoice No</label>
                                        <input class="form-control" type="text" name="invoice_no" value="{{ Request()->invoice_no }}" id="" placeholder="Enter Your Invoice No">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Total Amount</label>
                                        <input class="form-control" type="number" name="total_amount" value="{{ Request()->total_amount }}" id="" placeholder="Enter Your Total Amount">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Tax Amount</label>
                                        <input class="form-control" type="number" name="tax_amount" value="{{ Request()->tax_amount }}" id="" placeholder="Enter Your Tax Amount">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Enter Your Net Amount</label>
                                        <input class="form-control" type="number" name="net_amount" value="{{ Request()->net_amount }}" id="" placeholder="Enter Your Net Amount">
                                    </div>
                                    <div style="clear: both;"></div>
                                    <br>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                        <a href="{{ url('admin/gstBills') }}" class="btn btn-success">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">GST Bills List</h3>
                            <a class="btn btn-primary float-right" href="{{ url('admin/gstBills/add') }}">Add GST Bills</a>
                            <a class="btn btn-success float-right mr-2" href="{{ url('admin/gstBills/pdfGenerator') }}">PDF Generator</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Parties Type Name</th>
                                        <th>Invoice Date</th>
                                        <th>Invoice No</th>
                                        <th>Total Amount</th>
                                        <th>Tax Amount</th>
                                        <th>Net Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $totalAmount = 0; @endphp @forelse ($getRecord as $value) @php $totalAmount = $totalAmount + $value->total_amount @endphp
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->parties_type_name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->invoice_date)) }}</td>
                                        <td>{{ $value->invoice_no }}</td>
                                        <td>{{ $value->total_amount }}</td>
                                        <td>{{ $value->tax_amount }}</td>
                                        <td>{{ $value->net_amount }}</td>
                                        <td>
                                            <a href="{{ url('admin/gstBills/edit/' .$value->id) }}" class="btn btn-success btn-sm mr-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ url('admin/gstBills/view/' .$value->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i></a>
                                            <a href="{{ url('admin/gstBills/pdfSingleDownload/' .$value->id) }}" class="btn btn-primary btn-sm mr-1"><i class="fas fa-file-pdf"></i></a>
                                            <a href="{{ url('admin/gstBills/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="100%">No Record Found....</td>
                                    </tr>
                                    @endforelse @if (!empty($totalAmount))
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <td>{{ number_format($totalAmount, 2) }}</td>
                                        <th colspan="3"></th>
                                    </tr>
                                    @endif
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