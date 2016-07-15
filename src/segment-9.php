<?php
/*
©2015-2016 William H. Prescott. All Rights Reserved.
This file is part of Camino del Cobre.
*/

  include_once('includes/language.php');

  $length = 6.94;
  $maxElevation = 2387;
  $minElevation = 2281;
  $xml = simplexml_load_file("kml/CaminoDelCobre/0077_Section_09.gpx") or die("Error: Cannot create object");
  $xml_array = (array) $xml[0]->trk->trkseg;
  $elev_array = array();
  for ($i=0; $i<count($xml_array[trkpt]); $i++) {
    $elev_array[] = (float) $xml_array[trkpt][$i]->ele;
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
      <?php print(i18n('segment_9.title', $lang)); ?>
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
    <h2><?php print(i18n('segment_9.title', $lang)); ?></h2>
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
    <div id='section_09_map' class='section_map'></div>
    <div class="vision_text_block">

      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_9.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>

      <p><?php print(i18n('segment_9.description.text_01', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_02', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-1-Y-marker.jpg" width="250px" alt="Canyon Scene" /><br />
          Camino marker in Pitorreal
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-2-Sandy-wash.jpg" width="250px" alt="Canyon Scene" /><br />
          Sandy wash leaving Pitorreal
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_03', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_04', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_05', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-3-T-cemetery.jpg" width="250px" alt="Canyon Scene" /><br />
          Tarahumara cemetery
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_06', $lang)); ?></p>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-4-Quebredoras-track.jpg" width="250px" alt="Canyon Scene" /><br />
          Las Quebredoras tracks
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_07', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_08', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_09', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-5-Tunnel-marker.jpg" width="250px" alt="Canyon Scene" /><br />
          Trail to left of tunnel
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_10', $lang)); ?></p>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-6-Chepe-view.jpg" width="250px" alt="Canyon Scene" /><br />
          View of El Chepe below
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_11', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_12', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_13', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-7-Majimachi-path.jpg" width="250px" alt="Canyon Scene" /><br />
          Forest path on the mesa
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_14', $lang)); ?></p>
      <p><?php print(i18n('segment_9.description.text_15', $lang)); ?></p>
      <p><?php print(i18n('segment_9.description.text_16', $lang)); ?></p>
      <p><?php print(i18n('segment_9.description.text_17', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_18', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-8-F-Rock-crossing.jpg" width="250px" alt="Canyon Scene" /><br />
          Bus shelter at crossing
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_19', $lang)); ?></p>

      <div class="full_width_photo">
        <div>
          <img src="imagenes/9-9-F-Rock.jpg" width="700px" alt="Canyon Scene" /><br />
          Fertility Rock
        </div>
      </div>

      <p><?php print(i18n('segment_9.description.text_20', $lang)); ?></p>
      <p><?php print(i18n('segment_9.description.text_21', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/9-10-F-Rock-tunnel.jpg" width="300px" alt="Canyon Scene" /><br />
          Fertility Rock tunnel
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/9-11-F-Rock-turn.jpg" width="300px" alt="Canyon Scene" /><br />
          Markers on large rocks
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_22', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_23', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-12-Nacayvo-shrine.jpg" width="250px" alt="Canyon Scene" /><br />
          Nacayvo shrine
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/9-13-Nacayvo-shelter.jpg" width="250px" alt="Canyon Scene" /><br />
          Nacaybo bus shelter
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_9.description.text_24', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_9.description.text_25', $lang)); ?></p>



      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-8.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-10.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>


    </div>


    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>
