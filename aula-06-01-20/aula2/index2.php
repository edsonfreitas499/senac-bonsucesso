<?php
   session_start();
   if(isset($_SESSION["email"]) == false) {
       header("lacation:acesso.php");
   }
?>


<html>
<body>
    
     <a href="logout.php"><?=$_SESSION["email"]?></a>

     <h1>INTERNA</h1>
     <a href="interna.php">Internal</a>
</body>
</html>