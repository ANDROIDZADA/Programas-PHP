<?php

	$nome = "Andrey";
	$idade = 17;
	$nota = 8.5;
	$status = true;

		if (is_string($nome)) {
			echo "A variável é string"; 
			
		}
		else {
			echo "A variável não é string";

		}
		echo "</br>";
		var_dump(is_int($idade));
		echo "</br>";
		var_dump(is_float($nota));
		echo "</br>";
		var_dump(is_int($status))
?>