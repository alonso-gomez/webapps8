<?php
// Inicializamos la sesión o la retomamos
if(!isset($_SESSION)) {
  session_start();
}

// Incluimos la conexión y las utilerías
include("connections/conn_localhost.php");
include("helpers/utils.php");

// Validamos si el formulario de login ha sido enviado
if(isset($_POST["user_login_sent"])) {
  // Validamos por cajas vacias
  foreach($_POST as $calzon => $caca) {
    if($caca == "") $error[] = "The $calzon field is required";
  }

  // Si no hay error, continuamos con el login del usuario
  // preparamos el query para buscar al usuario
  $queryUserLogin = sprintf(
    "SELECT id, firstname, lastname, email, role FROM users WHERE email = '%s' AND password = '%s'",
    mysqli_real_escape_string($connLocalhost, trim($_POST["email"])),
    mysqli_real_escape_string($connLocalhost, trim($_POST["password"]))
  );

  // Ejecutamos el query
  $resQueryUserLogin = mysqli_query($connLocalhost, $queryUserLogin) or trigger_error("The user login query failed.");

  // Determinamos si el usuario se encontró en la BD, para eso contamos el número de registros encontrados
  if(mysqli_num_rows($resQueryUserLogin)) {
    // Hacemos fetch de los datos del usuario encontrado
    $userData = mysqli_fetch_assoc($resQueryUserLogin);

    // Inicializamos varios indices de SESSION que nos serán útiles
    $_SESSION["userId"] = $userData["id"];
    $_SESSION["userFullname"] = $userData["firstname"]." ".$userData["lastname"];
    $_SESSION["userEmail"] = $userData["email"];
    $_SESSION["userRole"] = $userData["role"];

    // Redirigimos al usuario al cpanel y definimos un flag
    header("Location: cpanel.php?login=true");
  }
  else {
    $error[] = "Login failed";
  }


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - My San Carlos Vacation</title>

<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

<link href="css_main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
//-->
</script>
</head>

<body>
<div id="main">

<?php include("views/layout_header.php"); ?>
<!-- HEADER END -->


<div class="txt_navbar" id="navbar"><strong>You are here:</strong> <a href="index.php">Home</a> &raquo; Login
</div>

<div id="content" class="txt_content">
  <h2>Login</h2>
  <?php 
  if(isset($error)) printMsg($error, "error");
  if(isset($queryUserLogin)) printMsg($queryUserLogin, "anuncio");
  if(isset($userData)) var_dump($userData);
  echo "<br />";
  if(isset($_SESSION)) var_dump($_SESSION);
  ?>
  &nbsp;
  <form action="login.php" method="post">
    <table>
      <tr>
        <td><label for="email">Email:*</label></td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td><label for="password">Password:*</label></td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="user_login_sent" value="Login"></td>
      </tr>
    </table>
  </form>
  
</div>

<!--CONTENT END -->

<?php include("views/layout_sidebar.php"); ?>
<!-- SIDEBAR END -->
<div style="clear: both;"></div>

<?php include("views/layout_footer.php"); ?>
</div>

</body>
</html>
