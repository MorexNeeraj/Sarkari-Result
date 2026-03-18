<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.html");
    exit;
}

include "db.php";

$id = $_GET['id'];
$conn->query("DELETE FROM jobs WHERE id=$id");

header("Location: admin-dashboard.php");
exit;
?>