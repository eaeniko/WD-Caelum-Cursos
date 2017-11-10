<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Home - Mirror Fashion</title>
		<link rel="stylesheet" href="css./bootstrap.css">

	</head>
	
	<body>

		<div class="jumbotron">
			<H2>Ótima escolha!</H2>
		</div>


		<div class="container">
			<div class="col-3">
				<div class="panel panel-default">
				<div class="panel-heading">
					Sua Compra
				</div>
				<div class="panel-body">
					<img class="img-thumbnail img-responsive" src="img/produtos/foto1-azul.png" alt="">
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

				</div>
				</dl>
			</div>
			</div>
			
		</div>

		<form action="">

			<div class="form-group">
				
				<fieldset>
					<legend>Dados Pessoais</legend>

					<label for="nome">Nome Completo</label>
					<input class="form-control" id="nome" type="text" >
				</fieldset>
			</div>

			<div class="form-group">
				<fieldset>
					<legend>E-mail</legend>

					<label for="email">Nome Completo</label>
					<input class="form-control" id="email" type="text" >
				</fieldset>
			</div>			
			
			<div class="form-group">
				<fieldset>
					<legend>CPF</legend>

					<label for="cpf">Nome Completo</label>
					<input class="form-control" id="cpf" type="text" >
				</fieldset>
			</div>


			<div class="form-group">
				<fieldset>
					<legend>Numero do Cartão</legend>

					<label for="cartao">Nome Completo</label>
					<input class="form-control" id="cartao" type="text">
				</fieldset>
			</div>
			
			<div class="form-group">
				<field>
					<legend>Dados do Cartão</legend>
				</field>
			</div>

			<div class="form-group">
				<field>
					<input type="checkbox" value="checked" name="spam" checked=>
					<label for="spam">Quero receber spam da Mirror Fashion</label>
				</field>
			</div>
			<button class="btn btn-lg btn-primary">COMPRAR</button>


		</form>
	<script src="js/carrinho.js"></script>
</body>