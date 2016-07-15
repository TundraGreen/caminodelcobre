<?php
/*
©2015-2016 William H. Prescott. All Rights Reserved.
This file is part of Camino del Cobre.
*/

  include_once('includes/language.php');

  $length = 3.75;
  $maxElevation = 2483;
  $minElevation = 2237;
  $xmla = simplexml_load_file("kml/CaminoDelCobre/0082_Section_12a.gpx") or die("Error: Cannot create object");
  $xmlb = simplexml_load_file("kml/CaminoDelCobre/0081_Section_12b.gpx") or die("Error: Cannot create object");
  $xml_array_a = (array) $xmla[0]->trk->trkseg;
  $xml_array_b = (array) $xmlb[0]->trk->trkseg;
  $elev_array = array();
  for ($i=0; $i<count($xml_array_a[trkpt]); $i++) {
    $elev_array[] = (float) $xml_array_a[trkpt][$i]->ele;
  }
  for ($i=0; $i<count($xml_array_b[trkpt]); $i++) {
    $elev_array[] = (float) $xml_array_b[trkpt][$i]->ele;
  }
  $elev_json = json_encode($elev_array);
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
    <div class="vision_text_block">

      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_12.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>

      <p><?php print(i18n('segment_12.description.text_01', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_02', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-2-T-houses-view.jpg" width="250px" alt="Canyon Scene" /><br />
          House with canyons beyond 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-3-Upper-gate.jpg" width="250px" alt="Canyon Scene" /><br />
          Wood gate
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_03', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_12.description.text_04', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_05', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-4-Rock-dam.jpg" width="250px" alt="Canyon Scene" /><br />
          Rock dam off trail 
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_12.description.text_06', $lang)); ?></p>

     <div class="full_width_photo">
        <div>
          <img src="imagenes/12-5-Canyon-views.jpg" width="700px" alt="Canyon Scene" /><br />
          Canyon view from trail
        </div>
      </div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-6-Narrow-trail.jpg" width="250px" alt="Canyon Scene" /><br />
          Narrow rocky trail
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_07', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_12.description.text_08', $lang)); ?></p>

     <div class="full_width_photo">
        <div>
          <img src="imagenes/12-7-CA-houses.jpg" width="700px" alt="Canyon Scene" /><br />
          Cerro Alto houses from below
        </div>
      </div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_09', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-8-Overhanging.jpg" width="250px" alt="Canyon Scene" /><br />
          Overhanging rocks 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-9-T-house-saddle.jpg" width="250px" alt="Canyon Scene" /><br />
          Farmhouse on saddle
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_10', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_12.description.text_11', $lang)); ?></p>
      <p><?php print(i18n('segment_12.description.text_12', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_12.description.text_13', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/12-10-Div-dam.jpg" width="250px" alt="Canyon Scene" /><br />
          Divisadero dam 
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_12.description.text_14', $lang)); ?></p>
      <p><?php print(i18n('segment_12.description.text_15', $lang)); ?></p>
      <p><?php print(i18n('segment_12.description.text_16', $lang)); ?></p>
      <p><?php print(i18n('segment_12.description.text_17', $lang)); ?></p>

     <div class="full_width_photo">
        <div>
          <img src="imagenes/12-11-Station-marker.jpg" width="700px" alt="Canyon Scene" /><br />
          Divisadero station vendor stalls
        </div>
      </div>


      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-11.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>

    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
