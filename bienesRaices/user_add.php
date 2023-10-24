<?php
// Incluimos las utilerias
include("helpers/utils.php");

// Verificamos si el formulario ha sido enviado evaluando si el indice del boton existe
if(isset($_POST['user_add_sent'])) {
  // Validamos si no hay cajas vacias
  foreach($_POST as $calzon => $caca) {
    if($caca == "" && $calzon != "phone") $error[] = "The $calzon field is required";
  }

  // Validamos si los password son coincidentes
  if($_POST['password'] != $_POST['password2']) $error[] = "The passwords didn't match";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User add - My San Carlos Vacation</title>

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


<div class="txt_navbar" id="navbar"><strong>You are here:</strong> <a href="index.php">Home</a> &raquo; <a href="cpanel.php">Control Panel</a> &raquo; User Add
</div>

<div id="content" class="txt_content">
  <h2>User add</h2>
  <p>Use the form below to add a new user.</p>
  <?php if(isset($error)) printMsg($error, "error"); ?>

  <form action="user_add.php" method="post">
    <table>
      <tr>
        <td><label for="firstname">First Name:*</label></td>
        <td><input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></td>
      </tr>
      <tr>
        <td><label for="lastname"></label>Last Name:*</td>
        <td><input type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></td>
      </tr>
      <tr>
        <td><label for="email"></label>Email:*</td>
        <td><input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
      </tr>
      <tr>
        <td><label for="password"></label>Password:*</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><label for="password2"></label>Confirm password:*</td>
        <td><input type="password" name="password2"></td>
      </tr>
      <tr>
        <td><label for="phone"></label>Phone:</td>
        <td><input type="text" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"></td>
      </tr>
      <tr>
        <td><label for="role"></label>Role:*</td>
        <td>
          <select name="role">
            <option value="agent" selected>Agent</option>
            <option value="admin">Administrator</option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="user_add_sent" value="Add User"></td>
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
