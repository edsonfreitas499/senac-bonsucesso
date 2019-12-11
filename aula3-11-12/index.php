<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Exemplo</title>
</head>
<body>
	<h1>
		<?php 
		if(isset($_GET["user"])) {
			echo base64_decode($_GET["user"]);
		} else {
			header("location:formulario.php");
		}
	?>
	</h1>

	
	<ul>
		<?php
			$i = 0;
			while($i <= 10) {
		?>
			<li>
				<?=$i?> X 2 = <?=($i*2)?>
			</li>
		<?php
			$i++;
		}
		?>
	</ul>

	<table border="1">
		<?php
			for($i = 0; $i<=10; $i++) {
		?>
			<tr>
				<td>
					<?=$i?>
				</td>
				<td>
					X
				</td>
				<td>
					2
				</td>
				<td>
					=
				</td>
				<td>
					<?=($i*2)?>
				</td>	
			</tr>
		<?php
			}
		?>
	
	</table>
	
	<?php
		$arr = NULL;
			
		for($i = 10; $i>0; $i--){
			$arr[] = ($i*100);
		}	
	?>
	<p>Tamanho do Array (<?=count($arr) ?>)</p>
	<ol>
		<?php foreach($arr as $x) { ?>
			<li><?=$x?></li>
		<?php }	?>
	</ol>
	
</body>
</html>	