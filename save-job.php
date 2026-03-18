<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.html");
    exit;
}

include "db.php";

$title = $_POST['title'];
$org   = $_POST['organization'];
$date  = $_POST['last_date'];
$link  = $_POST['link'];

$conn->query("INSERT INTO jobs(title,organization,last_date,link)
VALUES('$title','$org','$date','$link')");

header("Location: admin-dashboard.php");
exit;
?>