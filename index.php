<!DOCTYPE html>
<html>
<?php
	include ("pages/conectar.php");
	$iniciou = iniciar();
?>

<head>
	<meta charset="UTF-8">
	<title>Raça de Cães</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

</style>

<body>

	<header>
		<h1>Raça de Cães</h1>
	</header>
	<center>
		<table>
			<tr>
				<td width="30%" height="40%">
					<a href="pages/racacaes.php" class="btn blue">Começar<br><br>
						<img src="imgs/dog.png" height="70" width="70">
					</a>
				</td>
				<td width="30%" height="40%">
					<a href="pages/historico.php" class="btn blue">Histórico<br><br>
						<img src="imgs/hist.png" height="70" width="70">
					</a>
				</td>
				<td width="30%" height="40%">
					<a href="pages/regras.php" class="btn blue">Instruções<br><br>
						<img src="imgs/rules.png" height="70" width="70">
					</a>
				</td>
			</tr>
		</table>
	</center>

</body>
</html>