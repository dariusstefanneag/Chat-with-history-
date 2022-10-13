<?php
session_start();
include 'db.php';
if(isset($_POST['register'])){
$registerNameInput=$_POST['registerNameInput'];
$registerEmailInput=$_POST['registerEmailInput'];
$registerPasswordInput=$_POST['registerPasswordInput'];
$registerConfPasswordInput=$_POST['registerConfPasswordInput'];

$registerPasswordInput = hash('sha256', $registerPasswordInput);
$registerConfPasswordInput=hash('sha256',$registerConfPasswordInput);

if($registerPasswordInput==$registerConfPasswordInput){

$sql="INSERT INTO register(`Name`, `Email`, `Password`, `Confirm_Password` ) 
        VALUES ('$registerNameInput', '$registerEmailInput', '$registerPasswordInput', '$registerConfPasswordInput')";

        

        $result=mysqli_query($conn,$sql);

       
if($result)
{
    echo "Account created"; 
}
else
{
    echo "Something wrong";


}
}
}
?>