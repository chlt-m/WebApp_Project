<?php
    include 'connection.php';
    include 'session.php';
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo "<script>alert('You must to login first.');</script>";
        echo "<script>window.location.href = 'login_page.php';</script>";
        exit;
    }

?>


<?php
$product_array = $conn->query("SELECT * FROM order_list");
$count = $product_array->num_rows;
?>

<?php

if (isset($_POST['cq'])) {
    $c = 0;
    $product_array = $conn->query("SELECT * FROM order_list");
    while ($row = $product_array->fetch_assoc()) {
        if($c>0){
            break;
        }
        if ($row['serve_status'] == 0) {
            $c++;
        }
    }
    if($c>0){
        echo "<script>alert('You must to serve all queue.');</script>";
    }
    else{
        $query = "DELETE FROM queue ";
        mysqli_query($conn, $query);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="admincss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
</head>

<body>
    <nav>
        <div class="namenav">
            <h2>Burger</h2>
        </div>
        <div class="namenav2">
            <h4>__</h4>
            <h4>admin</h4>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="admin.php">ALL</a></li>
                <li><a href="admin_order.php">ORDER</a></li>
                <li><a href="admin_ingredient.php">ITEM</a></li>
                <li><a href="admin_products.php">PRODUCTS</a></li>
                <li><a href="logout.php" id="logout-bot">LOGOUT</a></li>
            </ul>
        </nav>
    </nav>
    <h1>All Order List</h1>
    <table id="myTable">
        <thead>
            <th>order id</th>
            <th>price</th>
            <th>discount</th>
            <th>total</th>
            <th>pay status</th>
            <th>serve status</th>

        </thead>
        <?php
        $product_array = $conn->query("SELECT * FROM order_list");
        while ($row = $product_array->fetch_assoc()) {

        ?>
            <tr>
                <td> <?php echo $row['order_id'] ?> </td>
                <td> <?php echo $row['price'] ?> </td>
                <td> <?php echo $row['discount'] ?> </td>
                <td> <?php echo $row['total'] ?> </td>
                <td>
                    <?php
                    if ($row['pay_status'] == 0) {
                        echo "no";
                    } else {
                        echo "yes";
                    } ?>
                </td>
                <td>
                    <?php
                    if ($row['serve_status'] == 0) {
                        echo "no";
                    } else {
                        echo "yes";
                    } ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
    <h1>QUEUE</h1>
    <table id="myTable2">
        <thead>
            <th>order id</th>
            <th>queue</th>
        </thead>
        <?php
        $product_array = $conn->query("SELECT * FROM queue");
        while ($row = $product_array->fetch_assoc()) {

        ?>
            <tr>
                <td> <?php echo $row['id'] ?> </td>
                <td> <?php echo $row['queue'] ?> </td>
            </tr>

        <?php
        }
        ?>
    </table>
    <div id="clrq">
        <form action="#" method="post">
            <button type="submit" name="cq" class="cq">clear queue</button>
        </form>
    </div>
    <br>
    <h1>ORDER DETAILS</h1>
    <table id="myTable3">
        <thead>
            <th>order id</th>
            <th>detail id</th>
            <th>name</th>
            <th>custom_ingredient</th>
        </thead>
        <?php
        $product_array = $conn->query("SELECT * FROM order_details");
        while ($row = $product_array->fetch_assoc()) {

        ?>
            <tr>
                <td> <?php echo $row['order_id'] ?> </td>
                <td> <?php echo $row['detail_id'] ?> </td>
                <td> <?php echo $row['name'] ?> </td>
                <td> <?php echo $row['custom_ingredient'] ?> </td>
            </tr>

        <?php
        }
        ?>
    </table>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
        let table2 = new DataTable('#myTable2');
        let table3 = new DataTable('#myTable3');
    </script>
</body>

</html>