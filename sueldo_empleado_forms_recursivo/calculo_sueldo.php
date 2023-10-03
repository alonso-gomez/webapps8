<?php
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
	}
	else {
		// Calculo de sueldo sin horas extras
		$total = $ht * CUOTA_HORA_NORMAL;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora de sueldo</title>
</head>
<body>
	<h1>Sueldo de un empleado</h1>
	<?php
	if(!isset($error)) { ?>
	<p>El empleado <?php echo "$nombre $apellidos"; ?> trabajó <?php echo $ht; ?> horas por lo que obtuvo un sueldo de <strong>$<?php echo $total; ?></strong></p>
	<p>A continuación se presenta el desglose:</p>

	<?php
		if($ht > 40) {
			include('vistas/desglose_con_he.php');
		}
		else {
			include('vistas/desglose_sin_he.php');
		}

		//include ($ht > 40) ? 'vistas/desglose_con_he.php' : 'vistas/desglose_sin_he.php';
	}
	else {
		printMsg($error);
		printMsg("mensaje de error");
	}
	?>
</body>
</html>





