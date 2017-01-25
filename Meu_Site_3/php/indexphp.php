<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>LOGIN</title>
	</head>
	<body background="../img/fundo_cinza_claro.jpg">
		<?php
			$email = $_GET["email"];
			$senha = $_GET["senha"];
			echo "EMAIL: ".$email."<br>";
			echo "SENHA: ".$senha;
		?>
		<br><a href="../index.html">Voltar</a>

		<?php 
			$n = array(0 => 100, 1 => 2.1);
			$n[2] = 3;
			$n[3] = 4;
			print_r($n);
		?>



	</body>
</html>