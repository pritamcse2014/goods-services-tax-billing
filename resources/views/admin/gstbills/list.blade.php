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
                            <h3 class="card-title">GST Bills List</h3>
                            <a class="btn btn-primary float-right" href="{{ url('admin/gstBills/add') }}">Add GST Bills</a>
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
                                    @php $totalAmount = 0; @endphp @foreach ($getRecord as $value) @php $totalAmount = $totalAmount + $value->total_amount @endphp
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->parties_type_name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->invoice_date)) }}</td>
                                        <td>{{ $value->invoice_no }}</td>
                                        <td>{{ $value->total_amount }}</td>
                                        <td>{{ $value->tax_amount }}</td>
                                        <td>{{ $value->net_amount }}</td>
                                        <td>
                                            <a href="{{ url('admin/gstBills/view/' .$value->id) }}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-eye"></i></a>

                                            <a href="{{ url('admin/gstBills/edit/' .$value->id) }}" class="btn btn-success btn-sm mr-1"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ url('admin/gstBills/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach @if (!empty($totalAmount))
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