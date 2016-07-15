<?php
/*
©2015-2016 William H. Prescott. All Rights Reserved.
This file is part of Camino del Cobre.
*/

  include_once('includes/language.php');

  $length = 5.980;
  $maxElevation = 2466;
  $minElevation = 2236;
  $xml = simplexml_load_file("kml/CaminoDelCobre/0079_Section_11.gpx") or die("Error: Cannot create object");
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
      <?php print(i18n('segment_11.title', $lang)); ?>
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
    <h2><?php print(i18n('segment_11.title', $lang)); ?></h2>
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
    <div id='section_11_map' class='section_map'></div>
    <div class="vision_text_block">

      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_11.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>

      <p><?php print(i18n('segment_11.description.text_01', $lang)); ?></p>
      <p><?php print(i18n('segment_11.description.text_02', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_03', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-1-Isolated-T-house.jpg" width="250px" alt="Canyon Scene" /><br />
          Lone Tarahumara house 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-2-Multiple-paths.jpg" width="250px" alt="Canyon Scene" /><br />
          Intersection of many trails
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_04', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_05', $lang)); ?></p>
      <p><?php print(i18n('segment_11.description.text_06', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-3-Vista-over-field.jpg" width="300px" alt="Canyon Scene" /><br />
          Tarahumara house in large field 
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-4-T-orchard.jpg" width="300px" alt="Canyon Scene" /><br />
          Tarahumara orchard
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_07', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_09', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-5-T-house-above-field.jpg" width="250px" alt="Canyon Scene" /><br />
          Farmhouse above cornfield 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-6-T-cornfield.jpg" width="250px" alt="Canyon Scene" /><br />
          Cornfield in valley
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_10', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_11', $lang)); ?></p>

     <div class="full_width_photo">
        <div>
          <img src="imagenes/11-7-Vista-East-canyons.jpg" width="700px" alt="Canyon Scene" /><br />
          Vista over eastern canyons
        </div>
      </div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_12', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-8-CA-from-below.jpg" width="250px" alt="Canyon Scene" /><br />
          Cerro Alto mesa from trail 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-9-T-well.jpg" width="250px" alt="Canyon Scene" /><br />
          Tarahumara well
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_13', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_14', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-10-Car-in-field.jpg" width="250px" alt="Canyon Scene" /><br />
          Building and car in field 
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_15', $lang)); ?></p>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_16', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-11-Road-to-CA.jpg" width="250px" alt="Canyon Scene" /><br />
          Road to Cerro Alto summit 
        </div><br />
      </div>
      <div class="clear"></div>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-12-CA-summit.jpg" width="250px" alt="Canyon Scene" /><br />
          Cerro Alto summit
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_17', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_11.description.text_18', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/11-13-CA-tower.jpg" width="250px" alt="Canyon Scene" /><br />
          Cerro Alto tower
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_19', $lang)); ?></p>
      <p><?php print(i18n('segment_11.description.text_20', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-14-CA-mirador.jpg" width="300px" alt="Canyon Scene" /><br />
          Cerro Alto mirador 
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-15-CA-center.jpg" width="300px" alt="Canyon Scene" /><br />
          Majimachi handicrafts center
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_11.description.text_21', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-16-CA-West-view.jpg" width="300px" alt="Canyon Scene" /><br />
          West view 
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-17-CA-North-view.jpg" width="300px" alt="Canyon Scene" /><br />
          North view
        </div>
      </div>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-18-CA-East-view.jpg" width="300px" alt="Canyon Scene" /><br />
          East view
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/11-19-CA-South-view.jpg" width="300px" alt="Canyon Scene" /><br />
          South view
        </div>
      </div>


      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-10.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-12.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>

    </div>

    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>
