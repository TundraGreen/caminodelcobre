<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<?php include_once('includes/language.php') ?>
<?php
  $length = 6.60;
  $maxElevation = 2489;
  $minElevation = 2340;
?>
<!DOCTYPE html>
<html>
  <head>
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
    <?php
      $xml = simplexml_load_file("kml/CaminoDelCobre/0085_Section_01.gpx") or die("Error: Cannot create object");
      $elev_json = json_encode((array) $xml[0]->trk->trkseg);
    ?>
    <script type="text/javascript">
      function fun1(x) {return Math.sin(x);  }
      function fun2(x) {return Math.cos(3*x);}
      function draw() {
        var canvas = document.getElementById("canvas");
        if (null==canvas || !canvas.getContext) return;

        var axes={}, ctx=canvas.getContext("2d");
        axes.x0 = .5;  // x0 pixels from left to x=0
        axes.y0 = .5 + 200; // y0 pixels from top to y=0
        axes.xScale = 500/10;                 // 500 pixels for 10 km
        axes.yScale = 200/500;                // 100 pixels for 2100 to 2600 m

        showAxes(ctx,axes);
        plotElevations(ctx, axes);
//       funGraph(ctx,axes,fun1,"rgb(11,153,11)",1); 
//       funGraph(ctx,axes,fun2,"rgb(66,44,255)",2);
        
      }
      function getData() {
        var data;
        data = <?php print($elev_json); ?>;
//        console.log('here');
  //      console.log(data.trkpt[0].ele);
        return data;
      }
      function plotElevations(ctx, axes) {
        var xx, yy, x0=axes.x0, y0=axes.y0, dataScale;
        var length = <?php print($length); ?>;
        var elevMin = <?php print(count($min_elevation)); ?>;
        var elevMax = <?php print(count($max_elevation)); ?>;
        var data = getData();
        var dataCount = data.trkpt.length;
        var xScale = length/dataCount * axes.xScale;
        var yScale = axes.yScale;
        /*
        console.log('dataCount: '+dataCount);
        console.log('length: '+length);
        console.log('axes.xScale: '+axes.xScale);
        console.log('xScale: '+xScale);
        */
        ctx.beginPath();
        ctx.lineWidth = 1;
        ctx.strokeStyle = "rgb(11,153,11)";
        for (var i=0; i<dataCount; i++) {
          xx = parseInt(i * xScale);
          yy = parseInt((data.trkpt[i].ele - 2100.) * yScale);
          if (i == 0) ctx.moveTo(x0+xx, y0-yy);
          else        ctx.lineTo(x0+xx, y0-yy);
        }
        ctx.stroke();
      }
/*
      function funGraph (ctx,axes,func,color,thick) {
       var xx, yy, dx=4, x0=axes.x0, y0=axes.y0, scale=axes.scale;
       var iMax = Math.round((ctx.canvas.width-x0)/dx);
       var iMin = axes.doNegativeX ? Math.round(-x0/dx) : 0;
       ctx.beginPath();
       ctx.lineWidth = thick;
       ctx.strokeStyle = color;

       for (var i=iMin;i<=iMax;i++) {
        xx = dx*i; yy = scale*func(xx/scale);
        if (i==iMin) ctx.moveTo(x0+xx,y0-yy);
        else         ctx.lineTo(x0+xx,y0-yy);
       }
       ctx.stroke();
      }
*/
      function showAxes(ctx,axes) {
       var x0=axes.x0, w=ctx.canvas.width;
       var y0=axes.y0, h=ctx.canvas.height;
       var xmin = axes.doNegativeX ? 0 : x0;
       ctx.beginPath();
       ctx.strokeStyle = "rgb(128,128,128)"; 
       ctx.moveTo(xmin,y0); ctx.lineTo(w,y0);  // X axis
       ctx.moveTo(x0,0);    ctx.lineTo(x0,h);  // Y axis
       ctx.stroke();
      }
    </script>
  </head>
  <body onload="draw()">
    <?php include_once('includes/header.php') ?>
    <?php include_once('includes/navbar.php') ?>
    <h2><?php print(i18n('segment_1.title', $lang)); ?></h2>
    <canvas id="canvas" width="502" height="208"></canvas>
    <table class="segment_data_table">
      <tr>
        <td><?php print(i18n('segment_data.length', $lang)); ?></td>
        <td><?php print($length); ?> km</td>
      </tr>
      <tr>
        <td><?php print(i18n('segment_data.max_elevation', $lang)); ?></td>
        <td><?php print($maxElevation); ?> m</td>
      </tr>
      <tr>
        <td><?php print(i18n('segment_data.min_elevation', $lang)); ?></td>
        <td><?php print($minElevation); ?> m</td>
      </tr>
    </table>
    <div id='section_01_map' class='section_map'></div>
    <div class="vision_text_block">
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
