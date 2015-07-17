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
      <?php print(i18n('segment_4.title', $lang)); ?>
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
		  <h2><?php print(i18n('segment_4.title', $lang)); ?></h2>
      <h3><?php print(i18n('segment.overview.title', $lang)); ?></h3>
      <p><?php print(i18n('segment_4.overview.text_01', $lang)); ?></p>

      <div class="third_width_photo">
        <div>
          <img src="imagenes/Boulder-Fields.jpeg" width="250px" alt="Canyon Scene" /><br />
          Boulder Fields
        </div><br />
      </div>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_4.overview.text_02', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <h3><?php print(i18n('segment.description.title', $lang)); ?></h3>
      <div class="two_thirds_width_text">
        <p><?php print(i18n('segment_4.description.text_01', $lang)); ?></p>
      </div>
      <div class="third_width_photo">
        <div>
          <img src="imagenes/Balancing-Rock.jpeg" width="250px" alt="Canyon Scene" /><br />
          Balancing Rock
        </div><br />
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('segment_4.description.text_02', $lang)); ?></p>
      <p><?php print(i18n('segment_4.description.text_03', $lang)); ?></p>
      <p><?php print(i18n('segment_4.description.text_04', $lang)); ?></p>
      <p><?php print(i18n('segment_4.description.text_05', $lang)); ?></p>
      <p><?php print(i18n('segment_4.description.text_06', $lang)); ?></p>

      <div class="full_width_photo">
        <img src="imagenes/Pipeline-Clearing.jpeg" width="700px" alt="Canyon Scene" /><br />
        Pipeline
      </div>

      <p>
        <?php print(i18n('segment_4.description.text_07', $lang)); ?>
        <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_5', $lang)); ?></a>.
      </p>

      <div class="previous_next">
        <div class="floatLeft">
          <a href="segment-3.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.previous', $lang)); ?></a>
        </div>
        <div class="floatRight">
          <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('segment.next', $lang)); ?></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
