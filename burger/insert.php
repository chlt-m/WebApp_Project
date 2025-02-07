<?php
include 'session.php';
include 'connection.php';
?>

<?php
if(isset($_POST['clear'])){
    $_SESSION['options-bread'] = array();
    $_SESSION['price'] = array();
    $_SESSION['options-meat'] = array();
    $_SESSION['options-vegetable'] = array();
    $_SESSION['options-topping'] = array();
    $_SESSION['options-sauce'] = array();
    $_SESSION['product-img'] = array();
    $_SESSION['product-name'] = array();
    header("Location: index.php");
}
?>


<?php
if(isset($_POST['del'])){
    $index = $_POST['index'];
    unset($_SESSION['product-img'][$index]);
    $_SESSION['product-img'] = array_values($_SESSION['product-img']);
    unset($_SESSION['product-name'][$index]);
    $_SESSION['product-name'] = array_values($_SESSION['product-name']);
    unset($_SESSION['options-bread'][$index]);
    $_SESSION['options-bread'] = array_values($_SESSION['options-bread']);
    unset($_SESSION['options-meat'][$index]);
    $_SESSION['options-meat'] = array_values($_SESSION['options-meat']);
    unset($_SESSION['options-vegetable'][$index]);
    $_SESSION['options-vegetable'] = array_values($_SESSION['options-vegetable']);
    unset($_SESSION['options-topping'][$index]);
    $_SESSION['options-topping'] = array_values($_SESSION['options-topping']);
    unset($_SESSION['options-sauce'][$index]);
    $_SESSION['options-sauce'] = array_values($_SESSION['options-sauce']);
    unset($_SESSION['price'][$index]);
    $_SESSION['price'] = array_values($_SESSION['price']);
    header("Location: index.php");
}
?>

<?php
if(isset($_POST['submit'])){

    if (empty($_POST["options-bread"])) {
        echo "<script>alert('You have to select bun type.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    }

    else{
    // Fetch product details from the database
    $product_array = $conn->query("SELECT * FROM ingredient");
    $prices = 0;
    
    // Process selected bun
    $bun = $_POST["options-bread"];
    while ($row = $product_array->fetch_assoc()){
        if($row['name'] == $bun){
            $prices += $row['price'];
        }
    }
    $_SESSION['options-bread'][] = $bun;
    
    // Process selected meat
    $meat = $_POST["options-meat"];
    $product_array->data_seek(0); // Reset pointer to the beginning
    while ($row = $product_array->fetch_assoc()){
        if($row['name'] == $meat){
            $prices += $row['price'];
        }
    }
    $_SESSION['options-meat'][] = $meat;
    
    // Process selected vegetables
    $veg = $_POST["options-vegetable"];
    $vegs = "";
    foreach($veg as $row){
        $product_array->data_seek(0); 
        if($row == end($veg)){
            $vegs .= $row;
        } else {
            $vegs .= $row . ",";
        }
        while ($rows = $product_array->fetch_assoc()){
            if($rows['name'] == $row){
                $prices += $rows['price'];
            }
        }
    }
    $_SESSION['options-vegetable'][] = $vegs;
    
    // Process selected addons
    $adds = $_POST["options-topping"];
    $add = "";
    foreach($adds as $row){
        $product_array->data_seek(0); 
        if($row == end($adds)){
            $add .= $row;
        } else {
            $add .= $row . ",";
        }
        while ($rows = $product_array->fetch_assoc()){
            if($rows['name'] == $row){
                $prices += $rows['price'];
            }
        }
    }
    $_SESSION['options-topping'][] = $add;
    
    // Process selected sauce
    $product_array->data_seek(0); 
    $sauces = $_POST["options-sauce"];
    $sauce = "";
    foreach($sauces as $row){
        $product_array->data_seek(0); 
        if($row == end($sauces)){
            $sauce .= $row;
        } else {
            $sauce .= $row . ",";
        }
        while ($rows = $product_array->fetch_assoc()){
            if($rows['name'] == $row){
                $prices += $rows['price'];
            }
        }
    }

    while ($row = $product_array->fetch_assoc()){
        if($row['name'] == $sauce){
            $prices += $row['price'];
        }
    }
    $_SESSION['options-sauce'][] = $sauce;

    $name = $_POST["product-name"];
    $img = $_POST["product-img"];
    $_SESSION['product-img'][] = $img;
    $_SESSION['product-name'][] = $name;
    if(isset($_POST['pric'])){
            $prices = $_POST['pric'];
    }
    $_SESSION['price'][] = $prices;

    header("Location: index.php");
    }
}

?>

