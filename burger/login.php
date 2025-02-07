<?php
include 'session.php';

if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "admin") {
        $_SESSION["loggedin"] = true;
        echo "<script>alert('Success login.');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
        exit;
    } else {
        echo "<script>alert('Incorrect username or password.');</script>";
        echo "<script>window.location.href = 'login_page.php';</script>";
        exit;
    }

}


?>