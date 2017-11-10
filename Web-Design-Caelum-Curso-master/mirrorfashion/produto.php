<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Produto</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php include "include/header.php" ?>

	<form action="checkout.php" method="POST">
			
		<label for="rosa">
			<img src="img/" alt="">
		</label>
		<input id="rosa" name="cor" value="rosa" type="radio">
		
		<label for="azul"></label>
		<input id="azul" name="cor" value="azul" type="radio">

		<label for="verde"></label>
		<input id="verde" name="cor" value="verde" type="radio">

		<input name="tamanho" type="range">

		<button>Comprar</button>
	</form>

 	


	<?php include "include/footer.php" ?>
	
</body>
</html>