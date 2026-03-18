<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.html");
    exit;
}

include "db.php";

$id    = $_POST['id'];
$title = $_POST['title'];
$org   = $_POST['organization'];
$date  = $_POST['last_date'];
$link  = $_POST['link'];

$conn->query("UPDATE jobs SET
title='$title',
organization='$org',
last_date='$date',
link='$link'
WHERE id=$id");

header("Location: admin-dashboard.php");
exit;
?>