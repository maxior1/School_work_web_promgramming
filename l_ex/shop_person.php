<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaksa Yi-Table database</title>
    <!-- ================== Link dataTables ==============  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />
    <!-- ================== Link jQuery CDN ==============  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- ================== Link dataTables ==============  -->
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

</head>
<body>
    <div>
    <h1>Reaksa Yi</h1>
        <h3>Customers Information</h3>
    </div>
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Details</th>
                    <th>Price</th>
                    <th>Stock Amount</th>
                    <th>Category ID</th>
                    <th>Avatar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include ("connectdb.php");
                include ("selectall.php");
                ?>
            </tbody>
        </table>






        <script>
                $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
        </script>
</body>
</html>
