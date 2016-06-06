<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<?php include_once('includes/language.php') ?>
<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
		<meta charset="utf-8">
		<title>
      <?php print(i18n('segment_1.title', $lang)); ?>
		</title>
		<link href="estilos/master.css" rel="stylesheet" type="text/css" />
		<link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs2Fim0SK8tW23TjUALTd1V_K8pHmcps4">
    </script>
		<script src="javascript/caminodelcobre.js"></script>
	</head>
	<body>
		<?php include_once('includes/header.php') ?>
		<?php include_once('includes/navbar.php') ?>
		<table class="segment_data_table">
		  <tr>
		    <td><?php print(i18n('segment_data.length', $lang)); ?></td><td>6.60 km</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.max_elevation', $lang)); ?></td><td>2489 m</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.min_elevation', $lang)); ?></td><td>2340 m</td>
		  </tr>
		</table>
	  <div id='section_01_map' class='section_map'></div>
    <div class="vision_text_block">
		  <h2><?php print(i18n('segment_1.title', $lang)); ?></h2>
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
	</body>
</html>
