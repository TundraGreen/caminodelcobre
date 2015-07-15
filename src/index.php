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
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>
      <?php print(i18n('index.title', $lang)); ?>
    </title>
    <link href="estilos/master.css" rel="stylesheet" type="text/css" />
    <link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs2Fim0SK8tW23TjUALTd1V_K8pHmcps4">
    </script>
    <script src="javascript/caminodelcobre.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  </head>
  <body onclick="stopSwap()" onload="init()">
    <?php include_once('includes/header.php') ?>
    <?php include_once('includes/navbar.php') ?>
    <div class="slideshowimages">

    <?php
      $images = array(
        "imagenes/5df66c02c709f7cf6cd36d3c844ac9b3.jpeg",
        "imagenes/724f73961a1ec8e2b4240b272ef1f382.jpeg",
        "imagenes/783a906bb4ee3aba0a8917ef28af5e0d.jpeg"
      );
      $alts = array(
        "Canyon Scene",
        "Canyon Scene",
        "Canyon Scene"
      );
      $numImages = count($images);
      $int = rand(0,$numImages-1);
      print "<img id='mainImage' src='".$images[$int]."' width='750px' alt='".$alts[$int]."' />\n";
    ?>
      <script type="text/javascript">
        currImageId = <?php echo $int; ?>;
      </script>
    </div>
    <div class="dots">
    <?php
      for ($i=0; $i<$numImages; ++$i) {
        if ($i == $int ) $dotImage = "imagenes/Green-dot.png";
        else $dotImage = "imagenes/Brown-dot.png";
        print "<img id='dotImage".$i."' src='".$dotImage."' alt='dot' /></a>\n";
      }
    ?>
    </div>
    <div class="index_text_blocks">
      <div class="index_text_block">
        <h3>
          <?php print(i18n('index.title', $lang)); ?>
        </h3>
        <img src="imagenes/One-woman.jpeg" width="300px" alt="Canyon Scene" /><br />
          <?php print(i18n('index.overview', $lang)); ?>
      </div>
      <div class="index_text_block">
        <h3>
          <?php print(i18n('index.participation.title', $lang)); ?>
        </h3>
        <img src="imagenes/Two-women.jpeg" width="300px" alt="Canyon Scene" /><br />
          <?php print(i18n('index.participation.text', $lang)); ?>
      </div>
    </div>
    <div class="clear"></div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>



