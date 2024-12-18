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
            margin: 20px;
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

        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <!-- Title Section -->
    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>

    <!-- Image Section -->
    <div class="image-container">
        <img src="https://www.w3schools.com/images/picture.jpg" alt="Picture">
    </div>

    <!-- Parties Details Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Parties Type Name</th>
                <th>Full Name</th>
                <th>Phone No</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $getParties->id }}</td>
                <td>{{ !empty($getParties->partiesPdfSingle->parties_type_name) ? $getParties->partiesPdfSingle->parties_type_name : '' }}</td>
                <td>{{ $getParties->full_name }}</td>
                <td>{{ $getParties->phone_no }}</td>
                <td>{{ $getParties->address }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Bank Details Table -->
    <table>
        <thead>
            <tr>
                <th>Account Holder Name</th>
                <th>Account No</th>
                <th>Bank Name</th>
                <th>IFSC Code</th>
                <th>Branch Address</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $getParties->account_holder_name }}</td>
                <td>{{ $getParties->account_no }}</td>
                <td>{{ $getParties->bank_name }}</td>
                <td>{{ $getParties->ifsc_code }}</td>
                <td>{{ $getParties->branch_address }}</td>
                <td>{{ date('d-m-Y', strtotime($getParties->created_at)) }}</td>
                <td>{{ date('d-m-Y', strtotime($getParties->updated_at)) }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>