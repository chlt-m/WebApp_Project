<?php
    include 'session.php';
        $_SESSION["loggedin"] = false;
        echo "<script>alert('logout.');</script>";
        echo "<script>window.location.href = 'login_page.php';</script>";
        exit;

?>
