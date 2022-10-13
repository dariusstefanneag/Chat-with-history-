<?php 

$host='localhost';
$user='root';
$password='';

$conn=mysqli_connect($host,$user,$password,"proiectweb");


//check conn
if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
}

?>

 