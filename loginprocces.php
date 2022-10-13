<?php


session_start();
include 'db.php';
if(isset($_POST['login']))
{
    $loginEmailInput=$_POST['loginEmailInput'];
    $loginPasswordInput=$_POST['loginPasswordInput'];

    $loginPasswordInput= hash('sha256',$loginPasswordInput);

    $sql="SELECT * FROM register WHERE
     Email='$loginEmailInput' and Password='$loginPasswordInput'";

    $result  = mysqli_query($conn,$sql);
    

    if($result->num_rows>0)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION['loginEmailInput']=$row['Name'];
        
        header("Location: index.php"); 
        exit();
    }
    else
    {
        header("Location:login_error_page.php");
        exit();
    }
}
?>