<?php
 session_start();
 if(isset($_SESSION["lista"])) {
     $lista = $_SESSION["lista"];
 } else {
     $lista = NULL;
 }
  
  $reg = NULL;
   
  

   if(isset($_GET["idx"])) {
        $reg = $lista[$_GET["idx"]];
   } else if(isset($_POST["texto"])) {
       $lista[] = $_POST["texto"];
       $_SESSION["lista"] = $lista;
       $reg = $_POST["texto"];
       
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Aula dia 06/01/2020</title>
</head>
<body>
    <?php
       if(is_null($reg) == false) {
           echo "<p>O produto selecionado foi <strong>" . $reg . "</strong>";
       }
       if(!is_null($lista)) {
    ?>

    <ul>
    <?php
        for($i = 0; $i < count($lista); $i++) {
    ?>
     <li>
        <a href="index.php?idx=<?=$i?>"><?=$lista[$i]?></a>       
     </li>

     <?php
        }
     ?>
     </ul>
    <?php
       }
    ?>

     <form method="post" action="index.php">
        <label>Texto</label>
        <input type="text" name="texto" />
        <input type="submit" name="enviar" />
       </form>
       <a href="index.php">Inicio</a> 
     

</body>
</html>