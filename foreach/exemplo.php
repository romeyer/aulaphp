<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="enviar">
</form>




<?php
	
	foreach ($_GET as $key => $value) {
		
		echo "Nome do Campo: " . $key . "<br>";

		echo "Valor do Campo: " . $value;

		echo "<hr>";
	}
?>

