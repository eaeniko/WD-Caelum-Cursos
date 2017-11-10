<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Home - Mirror Fashion</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/produto-checkout.css">
	</head>
	<body>
		
	
		<?php include "include/header.php" ?>

		<form action="checkout.php">
				

			<div class="produto">
				<h1>Camiseta Bad To the Bone</h1>
				<p>por apenas R$59,90</p>
				
			</div>

			<fieldset class="cores">
				<legend>Escolha a cor:</legend>
				
				<input id="rosa" name="cor" value="rosa" checked="rosa" type="radio">
				<label for="rosa">
					<img src="img/produtos/foto2-rosa.png" alt="Camisa Bad to the Bone Rosa">

				</label>

				
				<input id="azul" name="cor" value="azul" type="radio">
				<label for="azul">
					<img src="img/produtos/foto2-azul.png" alt="Camisa Bad to the Bone Azul">

				</label>

				<input id="verde" name="cor" value="verde" type="radio">
				<label for="verde">
					<img src="img/produtos/foto2-verde.png" alt="Camisa Bad to the Bone Verde">

				</label>

			
			</fieldset>	
			
				<input type="hidden" name="nome" value="Camiseta Bad To the Bone">

			<fieldset>
				<legend>Escolha o tamanho:</legend>
				<input name="tamanho" type="range" min="20" max="60"
					oninput="document.querySelector('output').textContent = this.value">
				<output>40</output>

			</fieldset>

			<button>Comprar</button>
			<input type="hidden" name="preco" value="R$59,90">
			<input type="hidden" name="nome" value="Camiseta Bad To the Bone">


		</form> 	
	</body>

	<?php include "include/footer.php" ?>