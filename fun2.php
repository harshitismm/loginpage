<?php 
	session_start();

?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p> Welcome <?php echo htmlspecialchars($_SESSION["username"])?></p>
<p> Your email is: <?php echo htmlspecialchars($_SESSION["email"])?></p>
<p> Your password is: <?php echo htmlspecialchars($_SESSION["password"])?></p>
<p> Your gender is: <?php echo htmlspecialchars($_SESSION["gender"])?></p>
</body>
</html>