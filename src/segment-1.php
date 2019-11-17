<?php
  session_start();
  include_once('includes/copyright.php');
  include_once('includes/language.php');

  $length = 6.60;
  $maxElevation = 2489;
  $minElevation = 2340;
  $xml = simplexml_load_file("kml/CaminoDelCobre/0085_Section_01.gpx") or die("Error: Cannot create object");
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
    <meta charset="utf-8">
    <title>
      <?php print(i18n('segment_1.title', $lang)); ?>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
       <link href="estilos/master.css" rel="stylesheet" type="text/css" />
    <link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs2Fim0SK8tW23TjUALTd1V_K8pHmcps4">
    </script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script src="javascript/caminodelcobre.js"></script>
    </head>
  <body onload="draw()">
    <?php include_once('includes/header.php') ?>
    <?php include_once('includes/navbar.php') ?>
    <h2><?php print(i18n('segment_1.title', $lang)); ?></h2>
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
    <div id='section_01_map' class='section_map'></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_1.overview.text', $lang)); ?></p>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Creel-Station.jpeg" width="300px" alt="Canyon Scene" /><br />
        Creel Station
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Creel-Trail-Marker.jpeg" width="300px" alt="Canyon Scene" /><br />
        Creel Trail Marker
      </div>
      <div class="clear"></div>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_1.description.text_01', $lang)); ?></p>
      <p><?php print(i18n('segment_1.description.text_02', $lang)); ?></p>
      <p><?php print(i18n('segment_1.description.text_03', $lang)); ?></p>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/Highway-77-Bridge.jpeg" width="250px" alt="Canyon Scene" /><br />
          Highway 77 Bridge
        </div><br />
        <div>
          <img src="imagenes/Adobe-House.jpeg" width="250px" alt="Canyon Scene" /><br />
          Adobe House
        </div>
      </div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_1.description.text_04', $lang)); ?></p>
        <p><?php print(i18n('segment_1.description.text_05', $lang)); ?></p>
        <p><?php print(i18n('segment_1.description.text_06', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_1.description.text_07', $lang)); ?></p>
        <p><?php print(i18n('segment_1.description.text_08', $lang)); ?></p>
        <p><?php print(i18n('segment_1.description.text_09', $lang)); ?></p>
        <p><?php print(i18n('segment_1.description.text_10', $lang)); ?></p>
      </div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/Forest-Boulders.jpeg" width="250px" alt="Canyon Scene" /><br />
          Forest Boulders
        </div><br />
        <div>
          <img src="imagenes/Tarahumara-Farmers.jpeg" width="250px" alt="Canyon Scene" /><br />
          Tarahumara Farmers
        </div><br />
        <div>
          <img src="imagenes/Rock-Formations.jpeg" width="250px" alt="Canyon Scene" /><br />
          Rock Formations
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_1.description.text_11', $lang)); ?></p>
      <p>
        <?php print(i18n('segment_1.description.text_12', $lang)); ?>
        <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_2', $lang)); ?></a>
      </p>
      <div class="previous_next">
        <div class="floatRight">
          <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-gpx/1.4.0/gpx.min.js"></script>
  </body>
</html>
