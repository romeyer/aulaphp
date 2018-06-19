<?php 

	$valorProduto = 14500.00;

	$valorDesconto = 5;


	if ($valorProduto > 10000){

		echo $valorProduto *= $valorDesconto/100;

	}

?> 

<br><br>

<?php
	$status = true;
	$liberado = 1;

	if ($status){

		echo $liberado + 1;

	} else {

		echo $liberado;

	}

?>