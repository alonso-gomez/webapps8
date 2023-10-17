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

  <form action="user_add.php" method="post">
    <table>
      <tr>
        <td><label for="firstname">First Name:*</label></td>
        <td><input type="text" name="firstname"></td>
      </tr>
      <tr>
        <td><label for="lastname"></label>Last Name:*</td>
        <td><input type="text" name="lastname"></td>
      </tr>
      <tr>
        <td><label for="email"></label>Email:*</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td><label for="password"></label>Password:*</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><label for="phone"></label>Phone:</td>
        <td><input type="text" name="phone"></td>
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
