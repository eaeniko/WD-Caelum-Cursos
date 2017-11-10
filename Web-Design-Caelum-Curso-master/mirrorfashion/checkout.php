<?php include "include/header.php" ?>

	<dl>
	<dt>Cor:</dt>
	<dd><?php print $_GET["cor"] ?></dd>

	<dt>Tamanho :</dt> 
	<dd><?php print $_GET["tamanho"] ?></dd>

	<dt>Nome :</dt> 
	<dd><?php print $_GET["nome"] ?></dd>

	<dt>Preço :</dt> 
	<dd><?php print $_GET["preco"] ?></dd>

	<dt>Quantidade:</dt>

	<dd><input type="number" min="1" max="20" value="1"></dd>

	<dt>Total:</dt>
	<dd><?php print $_GET["preco"] ?></dd>


</dl>

<?php include "include/footer.php" ?>