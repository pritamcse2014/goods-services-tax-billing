<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Generate</title>
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
    <p>{{ $date }}</p>
    <p>I am Professional Web Application Developer.</p>
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
        @foreach ($gstBills as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->parties_type_name }}</td>
            <td>{{ $value->invoice_date }}</td>
            <td>{{ $value->invoice_no }}</td>
            <td>{{ $value->total_amount }}</td>
            <td>{{ $value->tax_amount }}</td>
            <td>{{ $value->net_amount }}</td>
        </tr>
        @endforeach
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
        @foreach ($gstBills as $value)
        <tr>
            <td>{{ $value->cgst_rate }}</td>
            <td>{{ $value->sgst_rate }}</td>
            <td>{{ $value->igst_rate }}</td>
            <td>{{ $value->cgst_amount }}</td>
            <td>{{ $value->sgst_amount }}</td>
            <td>{{ $value->igst_amount }}</td>
        </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>Item Description</th>
            <th>Declaration</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($gstBills as $value)
        <tr>
            <td>{{ $value->item_description }}</td>
            <td>{{ $value->declaration }}</td>
            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>