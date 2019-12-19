<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title></title>
</head>
<body>
	<h1>Olá mundo</h1>
	<p>
		<?php 
			// comentário
			/*
				comentário
			*/
			### comentário

			if(isset($_GET["btnCalcular"])) {
				$num1 = $_GET["numero1"];
				$num2 = $_GET["numero2"];
				$num3 = $_GET["numero3"];
				$num4 = $_GET["numero4"];
				
				$res = ($num1 + $num2 + $num3 + $num4) / 4 ;
				
			} else {
				$res = 0;
			}	
			
			echo "Olá mundo"; 
			
			define("TITULO", "Meu site!!!!");
			
			$valor = "<b>Oi Turma!<b>";
			$resultado = 2+3;
			
			$script = "<script>alert('Olá')</script>"
			
		?>
	</p>
	<p><?= $valor ?></p>
	<?php echo $resultado; ?>
	
	<h1><?php echo TITULO; ?></h1>	
	<a href="formulario.php">Formulário</a>
	<h2><?=$res?></h2>
</body>
</html>
<?php echo $script; ?>
