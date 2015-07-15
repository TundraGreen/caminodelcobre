<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<div class="floatLeft">
  <img src="imagenes/header-photo.jpeg">
</div>
<div class="floatLeft">
  <h1>Camino del Cobre<br />The Copper Canyon Trail</h1>
</div>
<div class="language_selection floatRight">
  <?php
  if ($lang == 'en') {
    print ("English<br />\n");
    print ("<a href=\"".basename($_SERVER['PHP_SELF'])."?lang=es\">Español</a>\n");
  }
  elseif ($lang == 'es') {
    print ("<a href=\"".basename($_SERVER['PHP_SELF'])."?lang=en\">English</a><br />\n");
    print ("Español\n");
  }
  else {
    print("Language not set\n");
  } 
  ?>

</div>
<div class="clear"></div>
