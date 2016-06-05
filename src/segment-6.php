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
      <?php print(i18n('segment_6.title', $lang)); ?>
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
	  <div id='section_06_map' class='section_map'></div>
    <div class="vision_text_block">
		  <h2><?php print(i18n('segment_6.title', $lang)); ?></h2>
      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_6.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/San-Elias-School.jpeg" width="200px" alt="Canyon Scene" /><br />
          San Elias School
        </div>
      </div>
      <div class="third_width_text">
        <p><?php print(i18n('segment_6.description.text_01', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/San-Elias-Homes.jpeg" width="200px" alt="Canyon Scene" /><br />
          San Elias Homes
        </div>
      </div>
      <div class="clear"></div>

      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_6.description.text_02', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/Highway-77-Crossing.jpeg" width="250px" alt="Canyon Scene" /><br />
          Highway 77 Crossing
        </div>
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_6.description.text_03', $lang)); ?></p>

      <div class="half_width_photo">
        <div>
          <img src="imagenes/Clearing-Before-High-Road.jpeg" width="300px" alt="Canyon Scene" /><br />
          Clearing Before High Road
        </div>
      </div>
      <div class="half_width_photo">
        <div>
          <img src="imagenes/Camino-Road-Right.jpeg" width="300px" alt="Canyon Scene" /><br />
          Camino Road on Right
        </div>
      </div>
      <div class="clear"></div>

      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-7.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
