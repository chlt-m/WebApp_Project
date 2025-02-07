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
if(isset($_POST['price'])){
    if($_POST['prices'] == null){}
    else{
        $price = $_POST['prices'];
        $name =  $_POST['name'];
        $query = "UPDATE ingredient SET price = $price WHERE name = '$name'";
        mysqli_query($conn, $query); 
    }
}
?>
<?php
if(isset($_POST['edit'])){
    if($_POST['stock'] == null){}
    else{
        $stock = $_POST['stock'];
        $name =  $_POST['name'];
        $query = "UPDATE ingredient SET stock = $stock WHERE name = '$name'";
        mysqli_query($conn, $query); 
    }
}
?>
<?php
if(isset($_POST['add'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $img = "image/".$_POST['imgfile'];
    $query = "INSERT INTO ingredient VALUES ('$id', '$name', '$type', '$stock', '$price', '$img')";
    mysqli_query($conn, $query); 
}
?>
<?php
if(isset($_POST['del'])){
    $id = $_POST['id'];
    $query = "DELETE FROM `ingredient` WHERE id = '$id'";
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
<h1>INGREDIENT LIST</h1>
<table id="myTable">
        <thead>
            <th></th>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>stock</th>
            <th>price</th>
            <th>edit stock</th>
            <th></th>
            <th>edit price</th>
            <th></th>
            <th>delete</th>
        </thead>
<?php 
$product_array = $conn->query("SELECT * FROM ingredient");
while ($row = $product_array->fetch_assoc()){

?>
    <tr>
        <td><img src="<?php echo $row['imgfile'] ?>" alt="" ></td>
        <td> <?php echo $row['id'] ?> </td>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['type'] ?> </td>
        <td> <?php echo $row['stock'] ?> </td>
        <td> <?php echo $row['price'] ?> </td>
        
        <form action="#" method="post">
        <td><input type="number" name="stock" id="" min="0"></td>
        <input type="hidden" name="name" id="" value="<?php echo $row['name'] ?>">
        <td><button type="submit" name="edit">edit</button></td>
        </form>

        <form action="#" method="post">
        <td><input type="number" name="prices" id="" min="0"></td>
        <input type="hidden" name="name" id="" value="<?php echo $row['name'] ?>">
        <td>
            <button type="submit" name="price">edit</button>
        </td>
        </form>

        <form action="#" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">
        <td><button type="submit" name="del" style="background-color: red;">del</button></td>
        </form>
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

