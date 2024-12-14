@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View GST Bills</h1>
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
                            <h3 class="card-title">View GST Bills</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="" method="">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">ID <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->id }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Parties Type Name <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ !empty($gstBills->getGSTBillsView->parties_type_name) ? $gstBills->getGSTBillsView->parties_type_name : '' }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Invoice Date <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ date('d-m-Y', strtotime($gstBills->invoice_date)) }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Invoice No <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->invoice_no }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Description <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->item_description }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Total Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->total_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter CGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->cgst_rate }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter SGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->sgst_rate }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter IGST Rate <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->igst_rate }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter CGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->cgst_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter SGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->sgst_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter IGST Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->igst_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Tax Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->tax_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Net Amount <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->net_amount }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Declaration <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ $gstBills->declaration }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Created At <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ date('d-m-Y H:i A', strtotime($gstBills->created_at)) }}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Enter Item Updated At <span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        {{ date('d-m-Y H:i A', strtotime($gstBills->updated_at)) }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ url('admin/gstBills') }}" class="btn btn-secondary float-right">Back</a>
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