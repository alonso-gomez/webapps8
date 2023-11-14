<?php
// Inicializamos la sesión o la retomamos
if(!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home - My San Carlos Vacation</title>

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


<div class="txt_navbar" id="navbar"><strong>You are here:</strong> Home
</div>

<div id="content" class="txt_content">
  <h2>My San Carlos Vacation listings</h2>
  <p><strong>San Carlos Mexico</strong>, nestled between the Sea of Cortez and the mountains, offers numerous activities both on shore and in the water. Awaiting you are soft sand beaches, two world class marinas, and an 18 hole, par 72 championship golf course. Whether you're looking for a lazy day on a secluded beach or want to hike, scuba dive and listen to live music all in one day — we have it all! You can even try your luck in one of the many fishing tournaments.</p>

  <p>The <strong>Guaymas / San Carlos</strong> destiny is placed 75 miles away from Hermosillo, the Capital of Sonora, and 242 miles from the United States' border; by his characteristics is considered the principal tourist center of the State. It has privileged natural attractions, impressive landscapes formed by an exceptional combination of desert, sea and mountain.</p>
  <h3>How to get here</h3>
  <p><a href="http://www.whatsupsancarlos.com/planning-your-trip/driving/" target="_blank">Driving to San Carlos</a> by <a href="http://www.whatsupsancarlos.com" target="_blank">What's Up San Carlos</a><br />
    <a href="http://www.whatsupsancarlos.com/planning-your-trip/driving-map/" target="_blank">Driving map</a> by <a href="http://www.whatsupsancarlos.com" target="_blank">What's Up San Carlos</a></p>
  <p>More information on <a href="http://www.whatsupsancarlos.com" target="_blank">whatsupsancarlos.com</a> under <strong>&quot;Plan Your Trip&quot;</strong> menu option</p>
  
  <h3>Featured Properties</h3>
  
  <div class="featured_property">
    <h4>106 Bahia Delfin</h4>
    <span class="txt_subtitle">Pez Espada, Colonia Miramar, Guaymas</span>
    <div class="feat_property_info rounded_corners">
      <div class="feat_property_foto"><img src="images/feat_property_foto.jpg" alt="Bahia Delfin" width="240" height="180" /></div>
      <div class="feat_property_data">
        <p class="txt_property_info" style="margin-top: 0;">Condominio ubicado en el corazon de San Carlos a media cuadra del boulevard principal y a media cuadra de la playa</p>
        
        <table width="280" border="0" align="center" cellpadding="0" cellspacing="0" class="txt_property_summary">
          <tr>
            <td align="left" valign="top"><strong>Type: </strong>Home<br />
            <strong>Bedrooms:</strong> 3<br />
                <strong>Baths:</strong> 2<br />
              <strong>Capacity:</strong> 6 people              </td>
            <td align="left" valign="top"><strong>Pool:</strong> Yes<br />
            <strong>Air Conditioning:</strong> Yes<br />
                <strong>Garage:</strong> Yes<br />
          </tr>
        </table>
        <p class="price"><strong>Price per night:</strong> $60 USD<br />
            <span class="txt_subtitle"><a href="#"><img src="images/more_info.gif" alt="More info" width="16" height="16" border="0" align="absmiddle" />more info</a></span></p>
      </div>
    </div>
  </div>
  

  <!--FEATURED_PROPERTY END -->
  <div id="more_featured_holder">
    <div class="rounded_corners" id="more_fp1">
      <h4 class="more_fp_title">Casa Numero 1</h4>
      <span class="txt_subtitle_smaller">Pez Roncacho, Colonia Delicias, 
        Guaymas</span> <img src="images/more_fp_foto1.jpg" alt="Pez Roncacho" width="170" height="128" />
      <p class="txt_property_summary">Hacienda, a la orilla del mar con alberca privada dentro de la casa. Cuenta con 5 recamaras, mesa de billar, 3 cocinas....</p>
      <ul class="feat_prop_list txt_property_summary">
        <li><strong>Type:</strong> Home</li>
        <li><strong>Bedrooms:</strong> 3</li>
        <li><strong>Baths:</strong> 2</li>
        <li><strong>Capacity:</strong> 6 people</li>
        <li><strong>Pool:</strong> Yes</li>
        <li><strong>Air Conditioning:</strong> Yes</li>
        <li><strong>Garage:</strong> Yes</li>
      </ul>
      <p class="txt_property_summary price" style="margin-bottom: 0;"><strong>Price per night:</strong> $50 USD<br />
          <span class="txt_subtitle2"><a href="property_details.php?property_id=<?php echo $row_rsFeatProp['id']; ?>"><img src="images/more_info.gif" alt="More info" width="16" height="16" border="0" align="absmiddle" />more info</a></span></p>
    </div> <!--PROPERTY 1 END -->
    
    <div class="rounded_corners" id="more_fp2">
      <h4 class="more_fp_title">Casa Numero 2</h4>
      <span class="txt_subtitle_smaller">Pez Roncacho, Colonia Delicias, 
        Guaymas</span> <img src="images/more_fp_foto1.jpg" alt="Pez Roncacho" width="170" height="128" />
      <p class="txt_property_summary">Hacienda, a la orilla del mar con alberca privada dentro de la casa. Cuenta con 5 recamaras, mesa de billar, 3 cocinas....</p>
      <ul class="feat_prop_list txt_property_summary">
        <li><strong>Type:</strong> Home</li>
        <li><strong>Bedrooms:</strong> 3</li>
        <li><strong>Baths:</strong> 2</li>
        <li><strong>Capacity:</strong> 6 people</li>
        <li><strong>Pool:</strong> Yes</li>
        <li><strong>Air Conditioning:</strong> Yes</li>
        <li><strong>Garage:</strong> Yes</li>
      </ul>
      <p class="txt_property_summary price" style="margin-bottom: 0;"><strong>Price per night:</strong> $50 USD<br />
          <span class="txt_subtitle2"><a href="property_details.php?property_id=<?php echo $row_rsFeatProp['id']; ?>"><img src="images/more_info.gif" alt="More info" width="16" height="16" border="0" align="absmiddle" />more info</a></span></p>
    </div> <!--PROPERTY 2 END -->

    <div class="rounded_corners" id="more_fp3">
<h4 class="more_fp_title">Casa Numero 1</h4>
      <span class="txt_subtitle_smaller">Pez Roncacho, Colonia Delicias, 
        Guaymas</span> <img src="images/more_fp_foto1.jpg" alt="Pez Roncacho" width="170" height="128" />
      <p class="txt_property_summary">Hacienda, a la orilla del mar con alberca privada dentro de la casa. Cuenta con 5 recamaras, mesa de billar, 3 cocinas....</p>
      <ul class="feat_prop_list txt_property_summary">
        <li><strong>Type:</strong> Home</li>
        <li><strong>Bedrooms:</strong> 3</li>
        <li><strong>Baths:</strong> 2</li>
        <li><strong>Capacity:</strong> 6 people</li>
        <li><strong>Pool:</strong> Yes</li>
        <li><strong>Air Conditioning:</strong> Yes</li>
        <li><strong>Garage:</strong> Yes</li>
      </ul>
      <p class="txt_property_summary price" style="margin-bottom: 0;"><strong>Price per night:</strong> $50 USD<br />
          <span class="txt_subtitle2"><a href="property_details.php?property_id=<?php echo $row_rsFeatProp['id']; ?>"><img src="images/more_info.gif" alt="More info" width="16" height="16" border="0" align="absmiddle" />more info</a></span></p>
    </div> <!--PROPERTY 3 END -->
  </div>
</div>

<!--CONTENT END -->

<?php include("views/layout_sidebar.php"); ?>
<!-- SIDEBAR END -->
<div style="clear: both;"></div>

<?php include("views/layout_footer.php"); ?>
</div>

</body>
</html>
