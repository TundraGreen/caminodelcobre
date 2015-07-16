<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<?php include_once('includes/language.php') ?>
<ul id="navbar">
	<li>
	  <a href="index.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.home', $lang)); ?></a>
	</li>
	<li>
	  <a href="vision.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.vision', $lang)); ?></a>
	</li>
	<li><a href="region-route.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.region_route', $lang)); ?></a>
	</li>
	<li>
	  <a href="logistics.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.logistics', $lang)); ?></a>
	</li>
	<li>
	  <a href="map.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.map', $lang)); ?></a>
	</li>
	<li>
	  <a href="waypoints.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.waypoints', $lang)); ?></a>
	</li>
	<li><?php print(i18n('navbar.guide', $lang)); ?>
	  <ul>
      <li>
        <a href="segment-1.php?lang=<?php print($lang); ?>">Segment 1</a>
      </li>
      <li>
        <a href="segment-2.php?lang=<?php print($lang); ?>">Segment 2</a>
      </li>
      <li>
        <a href="segment-3.php?lang=<?php print($lang); ?>">Segment 3</a>
      </li>
      <li>
        <a href="segment-4.php?lang=<?php print($lang); ?>">Segment 4</a>
      </li>
      <li>
        <a href="segment-5.php?lang=<?php print($lang); ?>">Segment 5</a>
      </li>
      <li>
        <a href="segment-6.php?lang=<?php print($lang); ?>">Segment 6</a>
      </li>
      <li>
        <a href="segment-7.php?lang=<?php print($lang); ?>">Segment 7</a>
      </li>
      <li>
        <a href="suggested-day-hikes.php?lang=<?php print($lang); ?>">Suggested Routes</a>
      </li>
    </ul>
	</li>
</ul>
<div class="clear"></div>
