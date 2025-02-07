<?php
include 'connection.php';
$_SESSION['img'] = array();
$_SESSION['name'] = array();
$_SESSION['type'] = array();
$_SESSION['stock'] = array();
$product = $conn->query("SELECT * FROM ingredient");
while ($row = $product->fetch_assoc()) {
        $_SESSION['img'][] = $row['imgfile'];
        $_SESSION['type'][] = $row['type'];
        $_SESSION['name'][] = $row['name'];
        $_SESSION['stock'][] = $row['stock'];
}

?>




