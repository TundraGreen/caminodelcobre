<?php
  session_start();
  include_once('includes/copyright.php');
  include_once('includes/language.php');

  $length = 6.21;
  $maxElevation = 2314;
  $minElevation = 2184;
  $xmla = simplexml_load_file("kml/CaminoDelCobre/0084_Section_08a.gpx") or die("Error: Cannot create object");
  $xmlb = simplexml_load_file("kml/CaminoDelCobre/0076_Section_08b.gpx") or die("Error: Cannot create object");
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
<?php include_once('includes/language.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
    <meta charset="utf-8">
    <title>
      <?php print(i18n('segment_8.title', $lang)); ?>
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
    <h2><?php print(i18n('segment_8.title', $lang)); ?></h2>
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
    <div id='section_08a_map' class='section_map'></div>
    <div class="vision_text_block">

      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_8.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_01', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-1-speed-bumps.jpg" width="250px" alt="Canyon Scene" /><br />
          El Chepe Speed Bumps
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-2-Parking-area.jpg" width="250px" alt="Canyon Scene" /><br />
          Parking Area
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_02', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_03', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_04', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-3-Marker-on-rocks.jpg" width="250px" alt="Canyon Scene" /><br />
          Marker on rocks
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_05', $lang)); ?></p>
      <p><?php print(i18n('segment_8.description.text_06', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/8-4-Shelter-view.jpg" width="300px" alt="Canyon Scene" /><br />
          View of bus shelter with red roof
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/8-5-Shelter-access.jpg" width="300px" alt="Canyon Scene" /><br />
          Bus shelter access area
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_07', $lang)); ?></p>
      <p><?php print(i18n('segment_8.description.text_08', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_09', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-6-Railroad-crossing.jpg" width="250px" alt="Canyon Scene" /><br />
          Marker at crossing
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_10', $lang)); ?></p>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-7-Towers.jpg" width="250px" alt="Canyon Scene" /><br />
          Power line towers
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_11', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_12', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_13', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-8-Stone-well.jpg" width="250px" alt="Canyon Scene" /><br />
          Stone well and pump house
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_14', $lang)); ?></p>

      <div class="full_width_photo">
        <div>
          <img src="imagenes/8-9-Mirador-vista.jpg" width="700px" alt="Canyon Scene" /><br />
          Vista from trail view point
        </div>
      </div>

      <p><?php print(i18n('segment_8.description.text_15', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_16', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-10-P-houses.jpg" width="250px" alt="Canyon Scene" /><br />
          Pitorreal wood houses
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_17', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_18', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-11-P-station.jpg" width="250px" alt="Canyon Scene" /><br />
          Pitorreal station
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/8-12-P-school.jpg" width="250px" alt="Canyon Scene" /><br />
          Pitorreal school
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_8.description.text_19', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_8.description.text_20', $lang)); ?></p>

      <div class="full_width_photo">
        <div>
          <img src="imagenes/8-13-P-bus-stop.jpg" width="700px" alt="Canyon Scene" /><br />
          Pitorreal bus stop and shop
        </div>
      </div>

     <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-7.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-9.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>

    </div>

    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>
