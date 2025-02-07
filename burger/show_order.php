<?php include 'session.php';
include 'connection.php' ?>


<?php
if(count($_SESSION['options-bread'])==0){
    echo "<script>alert('you must to be order first');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
    exit; 
}
$dc = 1;
if (array_sum($_SESSION['price']) >= 500) {
    $dc = 0.8;
} elseif (array_sum($_SESSION['price']) >= 200) {
    $dc = 0.85;
} elseif (array_sum($_SESSION['price']) >= 100) {
    $dc = 0.9;
}
$product = $conn->query("SELECT max(order_id) AS max_id FROM order_list");
$row = $product->fetch_assoc();
$max_id = $row['max_id'];
$id = $max_id + 1;
$sum = array_sum($_SESSION['price']);
$total = array_sum($_SESSION['price']) * $dc;
$dis = array_sum($_SESSION['price']) - (array_sum($_SESSION['price']) * $dc);
$query = "INSERT INTO order_list VALUES($id, $sum , $dis , $total , 0, 0)";
mysqli_query($conn, $query);

for ($i = 0; $i < count($_SESSION['price']); $i++) {
    $name = $_SESSION['product-name'][$i];
    $igd = $_SESSION['options-bread'][$i] . "/" . $_SESSION['options-meat'][$i] . "/" . $_SESSION['options-vegetable'][$i] . "/" . $_SESSION['options-topping'][$i] . "/" . $_SESSION['options-sauce'][$i];
    if($name == 'Custom Burger'){
        $query2 = "INSERT INTO order_details VALUES( $id, $i+1 , '$name' , '$igd')";
    } else{
        $query2 = "INSERT INTO order_details VALUES( $id, $i+1 , '$name' , '-')";
    }
    mysqli_query($conn, $query2);
}
$q = $conn->query("SELECT max(queue) AS max_queue FROM queue");
$row = $q->fetch_assoc();
$queue = $row['max_queue']+1;
$query3 = "INSERT INTO queue VALUES($queue, $id)";
mysqli_query($conn, $query3);   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's your are your order</title>
    <link rel="stylesheet" href="s2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <img src="image/crt.png" alt="">
    </div>
    <br>
    <h1 class="your_q_lang">Your Queue</h1>
    <h1 style="text-decoration: underline;"><?php echo $queue; ?></h1>



    <h1 id="tt" class="tiyao">This is your all order</h1>
    <div class="box">
        <div id="sub-order">
            <?php
            if (count($_SESSION['options-bread']) != 0) {
                for ($i = 0; $i < count($_SESSION['price']); $i++) {
            ?>
                    <div class="order-sub">
                        <img src="<?php echo $_SESSION['product-img'][$i] ?>" alt="" class="img-sub">

                        <table id="tbs">
                            <tr>
                                <th class="name_prod_name">Name</th>
                                <th class="bread_lang">Bread</th>
                                <th class="meat_lang">Meat</th>
                                <th class="veg_lang">Vegetable</th>
                                <th class="topping_lang">Topping</th>
                                <th class="sauce_lang">Sauce</th>
                            </tr>
                            <tr>
                                <td><?php echo $_SESSION['product-name'][$i] ?></td>
                                <td><?php echo $_SESSION['options-bread'][$i] ?></td>
                                <td><?php echo $_SESSION['options-meat'][$i] ?></td>

                                <td>
                                    <?php
                                    if ($_SESSION['options-vegetable'][$i] == "") {
                                        echo "-";
                                    } else {
                                        echo $_SESSION['options-vegetable'][$i];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($_SESSION['options-topping'][$i] == "") {
                                        echo "-";
                                    } else {
                                        echo $_SESSION['options-topping'][$i];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($_SESSION['options-sauce'][$i] == "") {
                                        echo "-";
                                    } else {
                                        echo $_SESSION['options-sauce'][$i];
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <br>
                    <hr>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <a href="index.php">
        <h1 class="back_home">back to homepage</h1>
    </a>
    
    <script src="lang.js"></script>
</body>

</html>

<?php


// $query = "INSERT INTO order_detail VALUES('', '" . $ing . "', " . $_SESSION['price'][$i] . ")";
// mysqli_query($conn, $query);




$_SESSION['options-bread'] = array();
$_SESSION['price'] = array();
$_SESSION['options-meat'] = array();
$_SESSION['options-vegetable'] = array();
$_SESSION['options-topping'] = array();
$_SESSION['options-sauce'] = array();
$_SESSION['product-img'] = array();
$_SESSION['product-name'] = array();
?>