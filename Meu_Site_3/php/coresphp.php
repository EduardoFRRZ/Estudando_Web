<!DOCTYPE html>
<html>
<head>
	<?php
		$texto = $_GET["texto"];
		$tam = $_GET["tam"];
		$cor = $_GET["cor"];
	?>
	<meta charset="utf-8">
	<title>CORES</title>
	<style>
		span.texto{
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
	<?php
		echo "<span class='texto'>$texto</span>";
	?>
</body>
</html>