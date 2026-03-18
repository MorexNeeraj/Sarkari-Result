<?php
$conn = new mysqli("localhost","root","","jobportal");
if($conn->connect_error){
    die("Database Error: ".$conn->connect_error);
}
?>