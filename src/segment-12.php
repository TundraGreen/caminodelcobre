<?php
/*
©2015-2016 William H. Prescott. All Rights Reserved.
This file is part of Camino del Cobre.
*/

  include_once('includes/language.php');

  $length = 3.75;
  $maxElevation = 2483;
  $minElevation = 2237;
  $xml = simplexml_load_file("kml/CaminoDelCobre/0081_Section_12b.gpx") or die("Error: Cannot create object");
  $elev_json = json_encode((array) $xml[0]->trk->trkseg);
?>
<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
		<meta charset="utf-8">
		<title>
      <?php print(i18n('segment_12.title', $lang)); ?>
		</title>
		<link href="estilos/master.css" rel="stylesheet" type="text/css" />
		<link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs2Fim0SK8tW23TjUALTd1V_K8pHmcps4">
    </script>
		<script src="javascript/caminodelcobre.js"></script>
	</head>
  <body onload="draw()">
		<?php include_once('includes/header.php') ?>
		<?php include_once('includes/navbar.php') ?>
		<h2><?php print(i18n('segment_12.title', $lang)); ?></h2>
    <div class='float_left'>
      <canvas id="canvas" width="502" height="208"></canvas>
    </div>
    <div class='float_left'>
      <table class="segment_data_table">
        <tr>
          <td><?php print(i18n('segment_data.length', $lang)); ?></td>
          <td><span id='segment_length'><?php print($length); ?></span> km</td>
        </tr>
        <tr>
          <td><?php print(i18n('segment_data.max_elevation', $lang)); ?></td>
          <td><span id='max_elevation'><?php print($maxElevation); ?></span> m</td>
        </tr>
        <tr>
          <td><?php print(i18n('segment_data.min_elevation', $lang)); ?></td>
          <td><span id='min_elevation'><?php print($minElevation); ?></span> m</td>
        </tr>
      </table>
    </div>
    <div class='float_clear'></div>
    <div id='elev_data' hidden><?php print($elev_json); ?></div>
	  <div id='section_12a_map' class='section_map'></div>
	  <div id='section_12b_map' class='section_map'></div>
    <div class="vision_text_block">
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
