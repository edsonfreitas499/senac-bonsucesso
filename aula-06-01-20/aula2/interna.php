<?php
   session_start();
   if(isset($_SESSION["email"]) == false) {
       header("lacation:acesso.php");
   }
?>


<html >

<body>
    
     <a href="logout.php"><?=$_SESSION["email"]?></a>

     <h1>Interna</h1>
     <a href="index2.php">Home</a>
</body>
</html>