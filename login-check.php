<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if($username === "admin" && $password === "admin123"){
    $_SESSION['admin'] = true;
    header("Location: admin-dashboard.php");
    exit;
}else{
    echo "Invalid Username or Password";
}
?>