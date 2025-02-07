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
if(isset($_POST['pay'])){
    $id = $_POST['id'];
    $query = "UPDATE order_list SET pay_status = 1 WHERE order_id = $id;";
    mysqli_query($conn, $query); 
}
?>
<?php
if(isset($_POST['serve'])){
    $id = $_POST['id'];
    $query = "UPDATE order_list SET serve_status = 1, pay_status = 1 WHERE order_id = $id;";
    mysqli_query($conn, $query); 
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
<h1>ORDER</h1>
<table id="myTable">
        <thead>
            <th>order id</th>
            <th>price</th>
            <th>discount</th>
            <th>total</th>
            <th>pay status</th>
            <th>serve status</th>
            <th>queue</th>
            <th></th>
            <th></th>
        </thead>
<?php 
$product_array = $conn->query("SELECT * FROM order_list WHERE pay_status = 0 or serve_status = 0;");
while ($row = $product_array->fetch_assoc()){

?>
    <tr>
        <td> <?php echo $row['order_id'] ?> </td>
        <td> <?php echo $row['price'] ?> </td>
        <td> <?php echo $row['discount'] ?> </td>
        <td> <?php echo $row['total'] ?> </td>
        <td> 
            <?php 
            if($row['pay_status'] == 0){
                echo "no";
            }else{
                echo "yes";
            } ?> 
        </td>
        <td> 
            <?php 
            if($row['serve_status'] == 0){
                echo "no";
            }else{
                echo "yes";
            } ?>
        </td>
        <td>
            <?php 
                $id = $row['order_id'];
                $q = $conn->query("SELECT * FROM queue WHERE id = '$id'");
                $queue = $q->fetch_assoc();
                echo $queue['queue'][0];
            ?>
        </td>
        <td>
            <form action="#" method="post">
                <input type="hidden" name="id" id="" value="<?php echo $row['order_id'] ?>">
                <button type="submit" name="pay">paid</button>
            </form>
        </td>
        <td>
        <form action="#" method="post">
            <input type="hidden" name="id" id="" value="<?php echo $row['order_id'] ?>">
            <button type="submit" name="serve">served</button>
        </form>
        </td>
    </tr>

<?php 
}
?>
</table>

<h1>ORDER DETAIL</h1>
<table id="myTable2" >
        <thead>
            <th>order id</th>
            <th>detail id</th>
            <th>product name</th>
            <th>custom ingredient</th>
        </thead>
<?php 
$product_array = $conn->query("SELECT * FROM order_list WHERE pay_status = 0 or serve_status = 0;");
while ($row2 = $product_array->fetch_assoc()){
    $id = $row2['order_id'];
    $details_array = $conn->query("SELECT * FROM order_details WHERE order_id = '$id'");
    while($row = $details_array->fetch_assoc()){
?>
    <tr>
        <td> <?php echo $row['order_id'] ?> </td>
        <td> <?php echo $row['detail_id'] ?> </td>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['custom_ingredient'] ?> </td>
    </tr>

<?php 
}}
?>
</table>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
        let table2 = new DataTable('#myTable2');
    </script>
</body>
</html>

