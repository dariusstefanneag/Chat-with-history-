<?php
session_start();
unset($_SESSION["loginEmailInput"]);
header("Location:login.php");
?>