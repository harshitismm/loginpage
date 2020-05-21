<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$errors = "";
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$gender=$_POST["gender"];

		if(empty($username) or empty($email) or !filter_var($email, FILTER_VALIDATE_EMAIL) or empty($password) or empty($gender)){
			$errors="Invalid Input!";
		} else{
			session_start();
			$_SESSION["username"]=$username;
			$_SESSION["email"]=$email;
			$_SESSION["password"]=$password;
			$_SESSION["gender"]=$gender;

			header("Location: fun2.php");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN PAGE</title>
	</head>
	<body>
		<h1>Login Page</h1>
		<p style="color: red;"><?php echo $errors; ?></p>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<input type="text" name="username" placeholder="Username"><br>
			<input type="text" name="email" placeholder="E-mail"><br>
			<input type="Password" name="password" placeholder="Password"><br>
			<p style="display: inline-block;">Gender</p><br>
			<input type="radio" name="gender" value="Male"> Male<br>
			<input type="radio" name="gender" value="Female"> Female<br><br>
			<input type="submit" value="Submit">
		</form>	
	</body>
</html>