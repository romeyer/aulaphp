<?php
	
	// IF e ELSE
	$qualASuaIdade = 30;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if($qualASuaIdade < $idadeCrianca){
		
		echo "Você é uma criança";

	} else {
		echo "Não é criança";
	}

?>

<?php
	
	// IF ELSE
	$suaIdade = 70;

	$idadeDeCrianca = 12;
	$idadeDeMaior = 18;
	$idadeDeMelhor = 65;

	echo "A sua idade é $suaIdade";
	echo "<br>";

	if($suaIdade < $idadeDeCrianca){
		
		echo "Você é uma Criança";

	} else if ($suaIdade < $idadeDeMaior) {

		echo "Você é um Adolescente";

	} else if ($suaIdade < $idadeDeMelhor) {

		echo "Você é um Adulto";

	} else {

		echo "Você é um Idoso";

	}

	// SEGUNDA SOLUCAO COM OPERADOR TERNARIO
	echo "<br>";

	echo ($suaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";

?>

