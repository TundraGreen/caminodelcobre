<?php
  session_start();
  include_once('includes/copyright.php');
  include_once('includes/language.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width; height=device-height;
      maximum-scale=1.4; initial-scale=1.0; user-scalable=yes"/>
    <meta charset="utf-8">
    <title>
      <?php print(i18n('region_route.title', $lang)); ?>
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
    <h2><?php print(i18n('region_route.title', $lang)); ?></h2>
    <div class="vision_text_block">
      <h3><?php print(i18n('region_route.high_country.title', $lang)); ?></h3>
      <img src="imagenes/High-Country.jpeg" width="700px" alt="Canyon Scene" />
      <p><?php print(i18n('region_route.high_country.text_1', $lang)); ?></p>
      <p><?php print(i18n('region_route.high_country.text_2', $lang)); ?></p>
      <p><?php print(i18n('region_route.high_country.text_3', $lang)); ?></p>
    </div>
    <div class="vision_text_block">
      <h3><?php print(i18n('region_route.route.title', $lang)); ?></h3>

      <div class="half_width_text floatLeft">
        <p><?php print(i18n('region_route.route.text_1', $lang)); ?></p>
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Chepe-Railroad.jpeg" width="300px" alt="Canyon Scene" /><br />
        El Chepe Railroad
      </div>
      <div class="clear"></div>

      <div class="half_width_photo floatLeft">
        <img src="imagenes/Mexico-77.jpeg" width="300px" alt="Canyon Scene" /><br />
        Mexico-77
      </div>
       <div class="half_width_text floatLeft">
        <p><?php print(i18n('region_route.route.text_2', $lang)); ?></p>
      </div>
      <div class="clear"></div>

      <div class="half_width_text floatLeft">
        <p><?php print(i18n('region_route.route.text_3', $lang)); ?></p>
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Pipeline.jpeg" width="300px" alt="Canyon Scene" /><br />
        Pipeline
      </div>
      <div class="clear"></div>

      <p><?php print(i18n('region_route.route.text_4', $lang)); ?></p>
    </div>
    <div class="vision_text_block">
      <h3><?php print(i18n('region_route.trail.title', $lang)); ?></h3>
      <p><?php print(i18n('region_route.trail.text_1', $lang)); ?></p>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Trail.jpeg" width="300px" alt="Canyon Scene" /><br />
        Trail
      </div>
      <div class="half_width_photo floatLeft">
        <img src="imagenes/Road.jpeg" width="300px" alt="Canyon Scene" /><br />
        Road
      </div>
      <div class="clear"></div>
      <p><?php print(i18n('region_route.trail.text_2', $lang)); ?></p>
    </div>
    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>



