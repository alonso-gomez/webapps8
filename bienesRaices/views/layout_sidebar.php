<div id="sidebar">
<div class="txt_search" id="search">
<h3 class="txt_search_title">Search for a property</h3>

<form id="form_search" name="form_search" method="get" action="search_results.php">
<span class="txt_search_fields">City</span>
<label>
<select name="city" id="city" class="txt_search_list txt_search_fullwidth">
  <option value="None">Please select a city</option>
  <option value="San Carlos">San Carlos</option>
  <option value="Guaymas">Guaymas</option>
</select>
</label>

<span class="txt_search_fields">Price</span>
<label>
<select name="price1" class="txt_search_list" id="price1">
  <option value="50" selected="selected">$50</option>
  <option value="100">$100</option>
  <option value="150">$150</option>
  <option value="200">$200</option>
  <option value="250">$250</option>
  <option value="300">$300</option>
  <option value="350">$350</option>
  <option value="400">$400</option>
  <option value="450">$450</option>
</select>
</label>

to 
<label>
<select name="price2" class="txt_search_list" id="price2">
  <option value="50">$50</option>
  <option value="100">$100</option>
  <option value="150">$150</option>
  <option value="200" selected="selected">$200</option>
  <option value="250">$250</option>
  <option value="300">$300</option>
  <option value="350">$350</option>
  <option value="400">$400</option>
  <option value="450">$450</option>
  <option value="10000">$450+</option>
</select>
</label>

<span class="txt_search_fields">Type</span>
<label>
<select name="type" id="type" class="txt_search_list txt_search_fullwidth">
  <option value="None">Please select a type</option>
  <option value="Apartment">Apartment</option>
  <option value="Condo">Condo</option>
  <option value="Home">Home</option>
</select><br /><br />

<a href="javascript:document.form_search.submit();" class="search_button">SEARCH</a>
</label>

</form>
<br /><br />

<h3 class="txt_search_title">Browse by type</h3>


<form name="form" id="form">
  <select name="jumpMenu" id="jumpMenu">
    <option value="listings.php?type=All">All</option>
    <option value="listings.php?type=Apartment">Apartment</option>
    <option value="listings.php?type=Condo">Condo</option>
    <option value="listings.php?type=Home">Home</option>
  </select>
  <input type="button" name="go_button" id= "go_button" value="Go" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
</form><br />

<h3 class="txt_search_title">Contact us</h3>

<p class="txt_contactus"><img src="images/contactus_phone.png" alt="Call Us!" width="37" height="30" align="left" />(622) 226 2081<br />
(520) 908 7209 US Toll Free</p>

<p class="txt_contactus"><img src="images/contactus_mail.png" alt="Mail Us!" width="37" height="30" align="absmiddle" /><a href="contact_us.php" class="fancy_mailus">Your opinion is important to us!</a></p>

</div>
</div>