<?php
	include 'loginprocces.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="styleLogReg.css">
</head>
<body>

<div class="login">
	<form class="lg" action="login.php" method="POST">
		<br>
		<label>Email</label>
		<input class="texts" type="email" name="loginEmailInput" placeholder="Your email" required="required">
		<br>
		<br>
		<label>Password</label>
		<input class="texts" type="password" name="loginPasswordInput" placeholder="Your password" required="required">
		<br>
		<br>
		<input type="submit" name="login" value="LOGIN" class="loginSubmit">
		</a>
	</form>
	
</div>
<a href="register.php">
	<button class="button">I don't have an account</button>
	</a>
    <br>
    <br>
    <a href="index.php">
        <button class="button">Home</button>
        </a>

</body>
</html>