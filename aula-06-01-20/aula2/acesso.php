<?php
   if(isset($_POST["login"])) {
       if($_POST["email"] == "admin@rj.senac.br" && $_POST["senha"] == 123456) {
           session_start();
           $_SESSION["email"] = $_POST["email"];
           header("location:index2.php");
       } else {
           echo "<script>alert('login e senha incorreto.');</script>";
       }
    } 
   
?>


<html>

<body>
    
     <form method="post" action="#">
        <label>E-Mail:</label>
        <input type="text" name="email" />
        <label>Senha:</label>
        <input type="password" name="senha" />
        <input type="submit" name="login" />
       </form>
     
</body>
</html>