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
            <th>Full Name</th>
            <th>Phone No</th>
            <th>Address</th>
        </tr>
        @foreach ($parties as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->parties_type_name }}</td>
            <td>{{ $value->full_name }}</td>
            <td>{{ $value->phone_no }}</td>
            <td>{{ $value->address }}</td>
        </tr>
        @endforeach
    </table>

    <table>
        <tr>
            <th>Account Holder Name</th>
            <th>Account No</th>
            <th>Bank Name</th>
            <th>IFSC Code</th>
            <th>Branch Address</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach ($parties as $value)
        <tr>
            <td>{{ $value->account_holder_name }}</td>
            <td>{{ $value->account_no }}</td>
            <td>{{ $value->bank_name }}</td>
            <td>{{ $value->ifsc_code }}</td>
            <td>{{ $value->branch_address }}</td>
            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>