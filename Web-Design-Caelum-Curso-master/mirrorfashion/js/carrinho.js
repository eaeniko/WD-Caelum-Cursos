function calculaTotal() {
	var $preco = document.querySelector('#preco');
	var preco = $preco.textContent.replace(",", ".").replace("R$", " ");
	
	var quantidade = $input.value;


	document.querySelector("#total").textContent =  (quantidade * preco ).toFixed(2).replace(".",",").replace("R$"," ");


}

var $input= document.querySelector('#quantidade') 
$input.oninput = calculaTotal;
