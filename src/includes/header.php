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
  <h1><?php print(i18n('index.title', $lang)); ?></h1>
</div>
<div class="language_selection floatRight">
  <?php
  if ($lang == 'en_US') {
    print ("English<br />\n");
    print ("<a href=\"".basename($_SERVER['PHP_SELF'])."?lang=es_MX\">Español</a>\n");
  }
  elseif ($lang == 'es_MX') {
    print ("<a href=\"".basename($_SERVER['PHP_SELF'])."?lang=en_US\">English</a><br />\n");
    print ("Español\n");
  }
  else {
    print("Language not set\n");
  } 
  ?>

</div>
<div class="clear"></div>
