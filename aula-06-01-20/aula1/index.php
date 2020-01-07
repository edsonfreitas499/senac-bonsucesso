<?php
   $reg = NULL;
   
   $lista[] = "Produto 1";
   $lista[] = "Produto 2";
   $lista[] = "Produto 3";
   $lista[] = "Produto 4";

   if(isset($_GET["idx"])) {
        $reg = $lista[$_GET["idx"]];
   } else if(isset($_POST["texto"])) {
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
     <form method="post" action="index.php">
        <label>Texto</label>
        <input type="text" name="texto" />
        <input type="submit" name="enviar" />
       </form>
       <a href="index.php">Inicio</a> 
     

</body>
</html>