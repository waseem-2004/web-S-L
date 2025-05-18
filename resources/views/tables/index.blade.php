<!DOCTYPE html>
<html>
<head>
    <title>Tables List</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Tables List</h2>

    <table>
        <thead>
            <tr>
                <th>Table Number</th>
                <th>Status</th>
                <th>Size</th>
                <th>Restaurant ID</th>
                <th>Admin ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $table)
                <tr>
                    <td>{{ $table->Table_naumber }}</td>
                    <td>{{ $table->status }}</td>
                    <td>{{ $table->Size }}</td>
                    <td>{{ $table->resturant_id }}</td>
                    <td>{{ $table->admin_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
