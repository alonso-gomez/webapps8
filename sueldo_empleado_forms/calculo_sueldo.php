<?php
// Definimos variables
$nombre = "Fulano";
$apellidos = "de Tal";
$ht = 60;

// Definimos constantes
define("CUOTA_HORA_NORMAL", 20);
define("CUOTA_HORA_EXTRA", 40);

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
	<p>El empleado <?php echo "$nombre $apellidos"; ?> trabajó <?php echo $ht; ?> horas por lo que obtuvo un sueldo de <strong>$<?php echo $total; ?></strong></p>
	<p>A continuación se presenta el desglose:</p>

	<?php
		if($ht > 40) {
			include('vistas/desglose_con_he.php');
		}
		else {
			include('vistas/prueba/prueba.php');
		}

		//include ($ht > 40) ? 'vistas/desglose_con_he.php' : 'vistas/desglose_sin_he.php';
	?>
</body>
</html>





