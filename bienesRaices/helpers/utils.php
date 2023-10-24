<?php
// Función para impresión de mensajes simples y complejos, puede imprimir una cadena o un conjunto de cadenas en un array
function printMsg($msg, $msg_type) {
	echo "<div class=\"$msg_type\">";
	
	if(is_array($msg)) {
		echo "<ul>";
		foreach($msg as $caca) {
			echo "<li>$caca</li>";
		}
		echo "</ul>";
	}
	else {
		echo $msg;
	}

	echo "</div>";
}

?>