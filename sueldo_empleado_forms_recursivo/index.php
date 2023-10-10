<?php
// Primeramente evaluamos si el formulario ha sido enviado o no, para eso evaluamos si el indice en GET del botón está definido
if(isset($_GET["sent"])) {
	// Definimos una funcion para imprimir mensajes
	function printMsg($msg){
		if(is_array($msg)){
			echo '<ul>';
			foreach($msg as $caca){
				echo '<li>'.$caca.'</li>';
			}
			echo '</ul>';
		}
		else {
			echo $msg;
		}
	}

	// Definimos variables
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$ht = $_GET['ht'];

	// Definimos constantes
	define("CUOTA_HORA_NORMAL", 20);
	define("CUOTA_HORA_EXTRA", 40);

	// VALIDACIONES
	// las realizamos antes para que en caso de que exista un error no se ejecute el calculo del sueldo ni se presente el desglose

	// validamos que no existan cajas vacias
	foreach($_GET as $calzon => $caca) {
		if($caca == "") $error[] = "La caja $calzon es requerida";
	}

	// validamos si las horas trabajadas es un numero positivo
	if($ht < 0 || !is_numeric($ht)) $error[] = "Las horas trabajadas deben de ser un número positivo";

	// si estamos libres de errores, continuamos con el programa
	if(!isset($error)) {
		// Evaluamos las horas trabajadas para determinar si hay horas extras o no
		if($ht > 40) {
			// Calculo de sueldo con horas extras
			$he = $ht - 40;
			$sueldo_he = $he * CUOTA_HORA_EXTRA;
			$sueldo_hn = 40 * CUOTA_HORA_NORMAL;
			$total = $sueldo_hn + $sueldo_he;
			$rutaVista = "vistas/desglose_con_he.php";
		}
		else {
			// Calculo de sueldo sin horas extras
			$total = $ht * CUOTA_HORA_NORMAL;
			$rutaVista = "vistas/desglose_sin_he.php";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario para calcular el sueldo de un empleado</title>
</head>
<body>
	<h1>Formulario para calcular el sueldo de un empleado</h1>
	<?php
	// Definimos dos criterios para que se muestre el formulario, el primero es que lleguemos al documento por primera vez y no existen valores en GET, el segundo es cuando exista algún error
	if(!isset($_GET["sent"]) || isset($error)) {
		// incluimos la vista de formulario
		include('vistas/formulario.php');
		if(isset($error)) printMsg($error);
	}
	else {
		// incluimos la vista de resultado adecuada
		include($rutaVista);
	}
	?>
</body>
</html>