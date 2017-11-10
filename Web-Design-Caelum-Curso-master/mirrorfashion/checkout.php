<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Home - Mirror Fashion</title>

	</head>
	
	<body>

	<dl>
		<dt>Cor:</dt>
		<dd><?php print $_GET["cor"] ?></dd>

		<dt>Tamanho :</dt> 
		<dd><?php print $_GET["tamanho"] ?></dd>

		<dt>Nome :</dt> 
		<dd><?php print $_GET["nome"] ?></dd>

		<dt>Preço :</dt> 
		<dd id="preco"><?php print $_GET["preco"] ?></dd>

		<dt>Quantidade:</dt>

		<dd><input type="number" min="1" max="20" value="1" id="quantidade"></dd>

		<dt>Total:</dt>
		<dd id="total"><?php print $_GET["preco"] ?></dd>


	</dl>
	<script src="js/carrinho.js"></script>
</body>