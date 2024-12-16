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
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        <tr>
            <td>{{ $getPartiesType->id }}</td>
            <td>{{ $getPartiesType->parties_type_name }}</td>
            <td>{{ date('d-m-Y', strtotime($getPartiesType->created_at)) }}</td>
            <td>{{ date('d-m-Y', strtotime($getPartiesType->updated_at)) }}</td>
        </tr>
    </table>
</body>

</html>