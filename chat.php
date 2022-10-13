<?php 
session_start();

if ($_SESSION["loginEmailInput"] ==false ) {
    header("Location: ./error_chat_page.php");
    exit();
}

include 'db.php';
?>



<!DOCTYPE html>
<html lang="en">
 
<head>
<title>My Chat</title>
<link rel="stylesheet" type="text/css" href="styleChat.css">
</head>
<body>


<div id="main">
    
    <h1 class="wellcome">
    <?php  echo "Hello " .$_SESSION['loginEmailInput']; ?>
, welcome back! </h1>

    <div class="output">
        <?php
            $sql="SELECT * FROM messages";
            $result=$conn->query($sql);

            
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                            
                            echo "".$row["email"]." ".":".$row["message"]."  ".$row["date"]. "<br>";
                            echo "<br>";
                       
                    }
                }
                else{
                    echo "0 results";
                }
            
           
            $conn->close();
        ?>
    
    
    </div>

        <form action="send.php" method="POST">
            <textarea class="textarea" name="message" placeholder="type something" ></textarea>
            <br>
            <input class="input" type="submit" value="Send">
        </form>
    <br>
    <a href="index.php">
	<button class="button"><b>Home</b></button>
	</a>
    <br>
    <br>
    <a href="logout.php">
	<button class="button"><b>Leave the chat</b></button>
	</a>
</div>
</body>
</html>