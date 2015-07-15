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
			Camino del Cobre
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
        <h3><img src="imagenes/Flag-Mexico.jpeg" width="20px" alt="Mexico Flag" /> Camino del Cobre</h3>
        <img src="imagenes/One-woman.jpeg" width="200px" alt="Canyon Scene" /><br />
          El Camino del Cobre es un sendero de larga distancía que destaca todas las maravillas de la region de la Barranca del Cobre - las bellezas del bosque, la historia colonial, la cultura indígena, el desafío personal de una caminata en la naturaleza.  El Camino ofrece el visitante la oportunidad de experimentar las barrancas del Sur, las cascadas del Norte, los pueblos raramuri, y las vistas desde el lado del sistema de barrancas más grande en el planeta. En este momento, los excursionistas podrían crear sus proprias rutas empezando en el centro eco'turistico de Creel, Chi.
      </div>
      <div class="index_text_block">
        <h3><img src="imagenes/Flag-US.jpeg" width="20px" alt="US Flag" /> Camino del Cobre</h3>
        <img src="imagenes/One-man.jpeg" width="200px" alt="Canyon Scene" /><br />
          The Camino del Cobre (The Copper Canyon Trail) will be a long-distance trail that highlights the tourist wonders of the Copper Canyon region - nature, culture, history, and the opportunity for personal challenge.  Extending from the northern waterfalls to great southern canyons, the Trail will follow the rim of the world's largest canyon system - with chances to visit local villages and historical sites. When completed, the Trail will span a number of days in  its entirety.  Now hikers can follow the trail markers for their own route of 1,2 or more days, starting in the eco-tourist center of Creel
      </div>
      <div class="index_text_block">
        <h3><img src="imagenes/Flag-Europe.jpeg" width="20px" alt="Mexico Flag" /> Participación - Participation</h3>
        <img src="imagenes/Two-women.jpeg" width="200px" alt="Canyon Scene" /><br />
        El Camino del Cobre está en la estapa inicial de su desarrollo, habra todavía muchos desafíos en el futuro.  Beneficiara mucho por la participacion y los esfuerzos de las personas y las organizaciones comprometidas al bienestar de la gente Tarahumara y toda region de las Barrancas. <br />
        The Camino del Cobre is still in the very early stages of its development.  It still faces many challenges.. It will benefit significantly from the participation of any individual or organization committed to the benefit of the Copper Canyon and the Tarahumara people and willing to devote their energy to helping build the trail and its impact in the region.
      </div>
    </div>
    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>



