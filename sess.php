<?php 


session_start();
if(isset($_SESSION['loginEmailInput'])){

    echo $_SESSION['loginEmailInput'];
}

?>