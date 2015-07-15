<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>

<?php
if (isset($_REQUEST['lang'])) {
  $lang = $_REQUEST['lang'];
}
else {
  $lang = 'en_US';
}


include_once "Spyc.php";
date_default_timezone_set('America/Mexico_City');

function i18n($prompt, $lang) {

  $fileName = 'locales/'.$lang.'.yml';

  // Retrieve complete list of translations as a single string
  $yaml = Spyc::YAMLLoad($fileName);
  $contents = $yaml[$lang];
  $promptArray = explode(".", $prompt);

  $result = $contents;
  for ($i=0; $i<count($promptArray); $i++) {
    if (is_array($result)) {
      $result = $result[$promptArray[$i]];
    }
    else if (isset($result)) {
      return $result;
    }
    else {
      return $prompt;
    }
  }
  if (isset($result)) {
    return $result;
  }
  else {
    return $prompt;
  }
}

?>
