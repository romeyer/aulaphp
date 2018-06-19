<?php

	$condicao = true;

	while($condicao) {

		$numero = rand(1, 100);

		if ($numero === 3) {
			
			echo "TRES!!";

			$condicao = false;

		}

		echo $numero . " ";

	}

?>