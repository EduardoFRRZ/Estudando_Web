<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form 2</title>
	</head>
	<body>
		<?php
			$nome = isset($_GET["nome"])?$_GET["nome"]:"[nome nao informado]";
			$anoNasc = isset($_GET["anoNasc"])?$_GET["anoNasc"]:"[ano nao informado]";
			$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sexo nao informado]";
			$idade = date("Y") - $anoNasc;
			echo "$nome eh $sexo e tem $idade anos.";
		?>
		<br><a href="../form_2.html">Voltar</a>
	</body>
</html>