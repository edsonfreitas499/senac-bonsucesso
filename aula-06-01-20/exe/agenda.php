<?php
    session_start();
    if(isset($_SESSION["nome"])) {
        $nome = $_SESSION["nome"];
        $telefone = $_SESSION["telefone"];
    } else {
        $nome = NULL;
        $telefone = NULL;
    }

    $regNome = NULL;
    $regTelefone = NULL;
    
    if(isset($_GET["idx"])) {
        $regNome = $nome[$_GET["idx"]];
        $regTelefone = $telefone[$_GET["idx"]];
    } else if(isset($_POST["nome"])) {
        $nome[] = $_POST["nome"];
        $telefone[] = $_POST["telefone"];
        $_SESSION["nome"] = $nome;
        $_SESSION["telefone"] = $telefone;
        $reg = $_POST["nome"];
    }
?>
<html>
<body>
    <?php
        if(is_null($regNome) == false) {
            echo "<p>" . $regNome . " - <strong>" . $regTelefone . "</strong>";
        }
        if(!is_null($nome)) {
    ?>
    <ul>
    <?php 
        for($i = 0; $i < count($nome); $i++) {
    ?>
        <li>
            <a href="agenda.php?idx=<?=$i?>"><?=$nome[$i]?></a>
        </li>
    <?php
        }
    ?>
    </ul>
    <?php
        }
    ?>
    <form method="post" action="agenda.php">
        <label>Nome</label>
        <input type="text" name="nome" />
        <label>Telefone</label>
        <input type="text" name="telefone" />
        <input type="submit" name="enviar" />
    </form>
    <a href="agenda.php">Início</a>
</body>
</html>