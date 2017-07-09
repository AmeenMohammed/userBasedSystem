<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>  
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>You entered a private area. u are screwed !</p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>