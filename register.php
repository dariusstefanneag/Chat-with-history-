<?php
    include 'register_a.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="styleLogReg.css">
</head>
<body>
	
<div class="register">
	<form class="lg" action="register.php" method="POST">
		<br>
		<label>Name</label>
		<input class="texts" type="text" name="registerNameInput" placeholder="Your name" required="required">
		<br>
		<br>
		<label>Email</label>
		<input class="texts" type="email" name="registerEmailInput" placeholder="Your email" required="required">
		<br>
		<br>
		<label>Password</label>
		<input class="texts" type="password" name="registerPasswordInput" placeholder="Your password" required="required">
		<br>
		<br>
		<label>Confirm Password</label>
		<input class="texts" type="password" name="registerConfPasswordInput" placeholder="Confirm your password" required="required">
		<br>
		<br>
		<input type="submit" name="register" value="REGISTER" class="registerSubmit">
	</form>
	<br>
</div>
<a href="login.php">
	<button class="button">I have already an account</button>
	</a>
    <br>
    <br>
    <a href="index.php">
        <button class="button">Home</button>
        </a>
</body>
</html>