<?php
  session_start();
  include_once('includes/copyright.php');
  include_once('includes/language.php');
?>
<!DOCTYPE html>
<html>
	<head>
  <meta name="viewport" content="width=device-width; height=device-height; maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
		<meta charset="utf-8">
		<title>
      <?php print(i18n('camino.title', $lang)); ?>
		</title>
		<link href="estilos/master.css" rel="stylesheet" type="text/css" />
		<link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
		<script src="javascript/caminodelcobre.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include_once('includes/header.php') ?>
		<?php include_once('includes/navbar.php') ?>
    <div class="vision_text_block">
      <h3><?php print(i18n('camino.camino.title', $lang)); ?></h3>
      <p><?php print(i18n('camino.camino.text_1', $lang)); ?></p>
      <p><?php print(i18n('camino.camino.text_2', $lang)); ?></p>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Creel.jpeg" width="300px" alt="Canyon Scene" /><br />
        Creel
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Vista.jpeg" width="300px" alt="Canyon Scene" /><br />
        Barrancas: Vista
      </div>
      <div class="clear"></div>
      <h3><?php print(i18n('camino.creel.title', $lang)); ?></h3>
      <p><?php print(i18n('camino.creel.text_1', $lang)); ?></p>
      <p>
        <?php print(i18n('camino.creel.text_2', $lang)); ?>
        <a href="region-route.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.region_route', $lang)); ?></a>,
    	  <a href="logistics.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.logistics', $lang)); ?></a>
        <?php print(i18n('camino.creel.text_3', $lang)); ?>
        <a href="guide.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.guide', $lang)); ?></a>
        <?php print(i18n('camino.creel.text_4', $lang)); ?>
      </p>
    </div>
    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>

