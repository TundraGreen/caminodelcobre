<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

$stations = array(
  array('01', 'Creel train station', 27.75438, -107.634893, 2340),
  array('02', 'Highway bridge in Creel', 27.743488, -107.643543, 2324),
  array('03', 'Adobe house', 27.742904, -107.647314, 2340),
  array('04', 'Sanchez - Santa Elena', 27.716525, -107.678267, 2442),
  array('05', 'Recowata', 27.708892, -107.684341, 2450),
  array('06', 'Pipeline clear area', 27.702436, -107.688838, 2480),
  array('07', 'Pipeline - 77 crossing', 27.694353, -107.695621, 2451),
  array('08', 'Turn from pipeline', 27.696182, -107.701335, 2462),
  array('09', 'Path to 77 bridge', 27.692196, -107.71656, 2448),
  array('10', 'Highway 77 railroad bridge', 27.690123, -107.720119, 2442),
  array('11', 'San Elias', 27.687397, -107.724006, 2454),
  array('12', '77 crossing to High Road', 27.681117, -107.723681, 2448),
  array('13', 'High Road North end', 27.679138, -107.72108, 2439),
  array('14', 'High Road Saddle', 27.669453, -107.714405, 2509),
  array('15', 'High Road railroad cross 1', 27.654535, -107.722976, 2379),
  array('16', 'Wrong fork High Road', 27.654545, -107.724697, 2403),
  array('17', 'Switchback start', 27.653692, -107.735294, 2248),
  array('18', 'Path to final hill', 27.651403, -107.737028, 2285),
  array('19', 'Upper loop crossing', 27.653362, -107.738305, 2325),
  array('20', 'Top of final hill', 27.655126, -107.739437, 2335),
  array('21', 'Side trip: loop tunnel', 27.656037, -107.737357, 2344),
  array('22', 'High Road last RR crossing', 27.654826, -107.740867, 2317)
);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Camino del Cobre - Table
		</title>
		<link href="estilos/master.css" rel="stylesheet" type="text/css" />
		<link href="estilos/caminodelcobre.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php include_once('header.php') ?>
		<?php include_once('navbar.php') ?>
	  <h2>Waypoints</h2>
	  <div id="waypoint-table">
		<table>
		  <tr>
		      <th>
		        Seq No
		      </th>
		      <th>
		        Name
		      </th>
		      <th>
		        Latitude
		      </th>
		      <th>
		        Longitude
		      </th>
		      <th>
		        Elevation
		      </th>
		  </tr>
		  <?php for ($i=0; $i<count($stations); $i++) { ?>
		  <tr class="<?php $i % 2 == 0 ? print ('even') : print ('odd') ?>">
		    <?php for ($j=0; $j<5; $j++) { ?>
		    <td>
		      <?php
		        if ($j==2 || $j==3) {
		          printf ("%0.6f\n", $stations[$i][$j]);
		        }
		        else {
		          print ($stations[$i][$j]."\n");
		        }
		      ?>
		    </td>
		    <?php     } ?>
		  </tr>
		<?php   } ?>
		</table>
    </div>

		<?php include_once('footer.php') ?>
	</body>
</html>
