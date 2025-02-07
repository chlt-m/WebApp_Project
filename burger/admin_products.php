<?php
    include 'connection.php';
    include 'session.php';
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo "<script>alert('You must to login first.');</script>";
        echo "<script>window.location.href = 'login_page.php';</script>";
        exit;
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
<h1>PRODUCT LIST</h1>
<table id="myTable">
        <thead>
            <th></th>
            <th>id</th>
            <th>name</th>
            <th>bread</th>
            <th>topping</th>
            <th>vegetable</th>
            <th>sauce</th>
            <th>price</th>
        </thead>
<?php 
$product_array = $conn->query("SELECT * FROM products");
while ($row = $product_array->fetch_assoc()){

?>
    <tr>
        <td><img src="<?php echo $row['fileimg'] ?>" alt=""></td>
        <td> <?php echo $row['id'] ?> </td>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['bread'] ?> </td>
        <td> <?php echo $row['vegetable'] ?> </td>
        <td> <?php echo $row['topping'] ?> </td>
        <td><?php echo $row['sauce'] ?></td>
        <td><?php echo $row['price'] ?></td>
    </tr>

<?php 
}
?>
</table>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>
</html>

