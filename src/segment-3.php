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
      <?php print(i18n('segment_3.title', $lang)); ?>
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
	  <div id='section_03_map' class='section_map'></div>
    <div class="vision_text_block">
		  <h2><?php print(i18n('segment_3.title', $lang)); ?></h2>
      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_3.overview.text', $lang)); ?></p>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_3.description.text_01', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/Sanchez-Railroad-Sign.jpeg" width="250px" alt="Canyon Scene" /><br />
          Sanchez Railroad Sign
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_3.description.text_02', $lang)); ?></p>
      <p><?php print(i18n('segment_3.description.text_03', $lang)); ?></p>
      <p><?php print(i18n('segment_3.description.text_04', $lang)); ?></p>
      <p><?php print(i18n('segment_3.description.text_05', $lang)); ?></p>

      <div class="half_width_photo">
        <img src="imagenes/Recowata-Road-Sign.jpeg" width="300px" alt="Canyon Scene" /><br />
        Recowata Road Sign
      </div>
      <div class="half_width_photo">
        <img src="imagenes/Recowata-Sculpture.jpeg" width="300px" alt="Canyon Scene" /><br />
        Recowata Sculpture
      </div><br />
      <div class="clear"></div>

      <p>
        <?php print(i18n('segment_3.description.text_06', $lang)); ?>
        <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_4', $lang)); ?></a>
      </p>
      <p><?php print(i18n('segment_3.description.text_07', $lang)); ?></p>

      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
