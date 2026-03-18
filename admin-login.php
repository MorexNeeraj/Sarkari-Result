<?php
session_start();
if(isset($_SESSION['admin'])){
    header("Location: admin-dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div style="max-width:400px;margin:60px auto;padding:20px;background:#fff;border:1px solid #ccc">
<h2>Admin Login</h2>

<form action="login-check.php" method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button>Login</button>
</form>

</div>
</body>
</html>