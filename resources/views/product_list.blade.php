<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List Page</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <table id="users-table" class=" display" style="width: 90%">
        <thead>
            <tr>
                <th>ID </th>
                <th>Category Name </th>
                <th>Product Name </th>
            </tr>
        </thead>
        <tbody id="table_body"></tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/insert_product.js') }}"></script>
</body>
</html>
