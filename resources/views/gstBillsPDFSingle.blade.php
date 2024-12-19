<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1, p {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Parties Type Name</th>
            <th>Invoice Date</th>
            <th>Invoice No</th>
            <th>Total Amount</th>
            <th>Tax Amount</th>
            <th>Net Amount</th>
        </tr>
        <tr>
            <td>{{ $getGstBills->id }}</td>
            <td>{{ $getGstBills->getGSTBillsView->parties_type_name }}</td>
            <td>{{ date('d-m-Y', strtotime($getGstBills->invoice_date)) }}</td>
            <td>{{ $getGstBills->invoice_no }}</td>
            <td>{{ $getGstBills->total_amount }}</td>
            <td>{{ $getGstBills->tax_amount }}</td>
            <td>{{ $getGstBills->net_amount }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>CGST Rate</th>
            <th>SGST Rate</th>
            <th>IGST Rate</th>
            <th>CGST Amount</th>
            <th>SGST Amount</th>
            <th>IGST Amount</th>
        </tr>
        <tr>
            <td>{{ $getGstBills->cgst_rate }}</td>
            <td>{{ $getGstBills->sgst_rate }}</td>
            <td>{{ $getGstBills->igst_rate }}</td>
            <td>{{ $getGstBills->cgst_amount }}</td>
            <td>{{ $getGstBills->sgst_amount }}</td>
            <td>{{ $getGstBills->igst_amount }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>Item Description</th>
            <th>Declaration</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        <tr>
            <td>{{ $getGstBills->item_description }}</td>
            <td>{{ $getGstBills->declaration }}</td>
            <td>{{ date('d-m-Y', strtotime($getGstBills->created_at)) }}</td>
            <td>{{ date('d-m-Y', strtotime($getGstBills->updated_at)) }}</td>
        </tr>
    </table>
</body>

</html>