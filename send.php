<?php 

session_start();
include 'db.php';

$message=$_POST['message'];
$name=$_SESSION['loginEmailInput'];

$sql="INSERT INTO messages (message,email) VALUES ('$message','$name')";
$result=$conn->query($sql);

header("Location: chat.php");
exit();



?>