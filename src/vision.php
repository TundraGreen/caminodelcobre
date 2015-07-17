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
      <?php print(i18n('vision.title', $lang)); ?>
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
    <div class="vision_photo_block">
      <img src="imagenes/Basaseachic.jpeg" width="200px" alt="Canyon Scene" /><br />
      Basaseachic
    </div>
    <div class="vision_photo_block">
      <img src="imagenes/RegionBarrancas.jpeg" width="200px" alt="Canyon Scene" /><br />
      Region de las Barrancas
    </div>
    <div class="vision_photo_block">
      <img src="imagenes/Sinforosa.jpeg" width="200px" alt="Canyon Scene" /><br />
      Sinforosa
    </div>
    <div class="clear"></div>
    <div class="vision_text_block">
      <h3><?php print(i18n('vision.title', $lang)); ?></h3>
      <?php print(i18n('vision.text', $lang)); ?>
    </div>
    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>



