<?php
    session_start();
    $_SESSION["email"] = NULL;
    session_destroy();
    header("location:acesso.php");

?>