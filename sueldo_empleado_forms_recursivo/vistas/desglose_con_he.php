<p>El empleado <?php echo "$nombre $apellidos"; ?> trabajó <?php echo $ht; ?> horas por lo que obtuvo un sueldo de <strong>$<?php echo $total; ?></strong></p>
<p>A continuación se presenta el desglose:</p>

<ul>
	<li>Horas normales: 40</li>
	<li>Sueldo por horas normales: $<?php echo $sueldo_hn; ?></li>
	<li>Horas extras: <?php echo $he; ?></li>
	<li>Sueldo por horas extras: $<?php echo $sueldo_he; ?></li>
	<li>TOTAL: $<?php echo $total; ?></li>
</ul>