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
	</body>
</html>