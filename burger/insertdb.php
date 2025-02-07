
<?php include 'session.php'; ?>
<?php

if (isset($_POST['confirm'])) {
    if ($_POST["check"] == 0) {
        echo "<script>alert('pls order before');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "<script>alert('The order has been successfully sent');</script>";
        echo "<script>window.location.href = 'show_order.php';</script>";
        exit;
    }
}

?>