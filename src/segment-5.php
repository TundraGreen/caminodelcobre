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
      <?php print(i18n('segment_5.title', $lang)); ?>
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
		    <td><?php print(i18n('segment_data.length', $lang)); ?></td><td>3.52 km</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.max_elevation', $lang)); ?></td><td>2477 m</td>
		  </tr>
		  <tr>
		    <td><?php print(i18n('segment_data.min_elevation', $lang)); ?></td><td>2414 m</td>
		  </tr>
		</table>
	  <div id='section_05_map' class='section_map'></div>
    <div class="vision_text_block">
		  <h2><?php print(i18n('segment_5.title', $lang)); ?></h2>
      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_5.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_5.description.text_01', $lang)); ?></p>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_5.description.text_02', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/View-From-Boulders.jpeg" width="250px" alt="Canyon Scene" /><br />
          View from Boulders
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_5.description.text_03', $lang)); ?></p>
      <p><?php print(i18n('segment_5.description.text_04', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/Tarahumara-House-Rocks.jpeg" width="300px" alt="Canyon Scene" /><br />
          Tarahumara House in the Rocks
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/Road-Near-Train-Tracks.jpeg" width="300px" alt="Canyon Scene" /><br />
          Road Near Train Tracks
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_5.description.text_05', $lang)); ?></p>
      <p><?php print(i18n('segment_5.description.text_06', $lang)); ?></p>

      <div class="full_width_photo">
        <img src="imagenes/Highway-Bridge-Over-Railroad.jpeg" width="700px" alt="Canyon Scene" /><br />
        Highway Bridge Over Railroad
      </div>

      <p><?php print(i18n('segment_5.description.text_07', $lang)); ?></p>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_5.description.text_08', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/San-Elias-Water-Tower.jpeg" width="250px" alt="Canyon Scene" /><br />
          San Elias Water Tower
        </div>
      </div>
      <div class="clear"></div>

      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-6.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
