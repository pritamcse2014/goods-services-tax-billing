@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add GST Bills</h1>
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
                            <h3 class="card-title">Add GST Bills</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ url('admin/gstBills/add') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Parties Type Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="parties_type_id" id="" required>
                                            <option value="">Select Parties Type Name</option>
                                            @foreach ($getPartiesType as $partiesType)
                                            <option value="{{ $partiesType->id }}">{{ $partiesType->parties_type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Invoice Date <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="date" name="invoice_date" class="form-control" id="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Invoice No <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="invoice_no" class="form-control" id="" placeholder="Enter Invoice No" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Description <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="item_description" id="" placeholder="Enter Item Description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Total Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="total_amount" class="form-control" id="" placeholder="Enter Total Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter CGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="cgst_rate" class="form-control" id="" placeholder="Enter CGST Rate" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter SGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="sgst_rate" class="form-control" id="" placeholder="Enter SGST Rate" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter IGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="igst_rate" class="form-control" id="" placeholder="Enter IGST Rate" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter CGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="cgst_amount" class="form-control" id="" placeholder="Enter CGST Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter SGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="sgst_amount" class="form-control" id="" placeholder="Enter SGST Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter IGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="igst_amount" class="form-control" id="" placeholder="Enter IGST Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Tax Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="tax_amount" class="form-control" id="" placeholder="Enter Tax Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Net Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" name="net_amount" class="form-control" id="" placeholder="Enter Net Amount" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Declaration <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="declaration" id="" placeholder="Enter Item Declaration" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="{{ url('admin/gstBills') }}" class="btn btn-secondary float-right">Cancel</a>
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