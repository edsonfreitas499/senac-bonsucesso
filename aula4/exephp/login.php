<?php
	define("USER", "carro@gmail.com");
	define("SENHA", "123456");

	if(isset($_POST["btnLogin"])) {
		$login = $_POST["txtLogin"];
		$senha = base64_encode($_POST["txtSenha"]);
		if($login == USER && base64_decode($senha) == SENHA) {
			$login = base64_encode($login);
			header("location:inicio.php?user=$login");
		} else {
			echo "<script>alert('Login e senha incorretos');</script>";
		}
	}	
			


?>




<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template de login, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min1.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="img/carro.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="txtLogin" class="sr-only">Endereço de email</label>
      <input type="email"  name="txtLogin" id="txtLogin" class="form-control" placeholder="Seu email" required autofocus>
      <label for="txtSenha" class="sr-only">Senha</label>
      <input type="password" name="txtSenha" id="txtSenha" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>