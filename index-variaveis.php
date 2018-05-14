<?php

	$nome = "Rodrigo Meyer";
	echo $nome;

	// TODAS AS LETRAS MAIUSCULAS
	echo "<br>";
	$nome = strtoupper($nome);
	echo $nome;

	// TODAS AS LETRAS MINUSCULAS
	echo "<br>";
	$nome = strtolower($nome);
	echo $nome;	

	// PRIMEIRA LETRA DE CADA PALAVRA MAIUSCULA
	echo "<br>";
	$nome = ucwords($nome);
	echo $nome;	

	// TODAS AS PRIMEIRAS LETRAS MAIUSCULAS
	echo "<br>";
	$nome = ucfirst($nome);
	echo $nome;	

	// SUBSTITUIR ALGUMAS LETRAS
	$empresa = "Agencia Digital Cartola";
	echo "<br>";
	echo $empresa;
	$empresa = str_replace("e", "3", $empresa);
	$empresa = str_replace("i", "1", $empresa);
	$empresa = str_replace("o", "0", $empresa);
	str_replace(search, replace, subject)
	echo "<br>";
	echo $empresa;
	echo "<br>";

	// PROCURAR POR ALGO NO TEXTO 
	$txt = "A repetição é a mãe da retenção.";

	$q = strpos($txt, "mãe");

	var_dump($q);

	// PROCURAR E SUBSTITUIR ALGO NO TEXTO 
	$txt = "A repetição é a mãe da retenção.";

	$q = strpos($txt, "mãe");
	$paragrafo = substr($txt, 0, $q);
	
	echo "<br>";
	var_dump($paragrafo);

	$paragrafo2 = substr($txt, $q);
	var_dump($q);

	// EXEMPLO DE UM CENARIO
	$txt = "A repetição é a mãe da retenção.";

	$palavra = "mãe";

	$q = strpos($txt, $palavra);
	$paragrafo = substr($txt, 0, $q);
	
	echo "<br>";
	var_dump($paragrafo);

	$paragrafo2 = substr($txt, $q + strlen($palavra), strlen($txt));
	echo "<br>";
	echo $paragrafo2;

?>
