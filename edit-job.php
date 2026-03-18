<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.html");
    exit;
}

include "db.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM jobs WHERE id=$id");
$row = $result->fetch_assoc();
?>