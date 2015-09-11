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
	<li>
	  <a href="camino.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.camino', $lang)); ?></a>
	</li>
	<li>
	  <a href="region-route.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.region_route', $lang)); ?></a>
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
  <li>
    <div class="guide"><?php print(i18n('navbar.guide', $lang)); ?></div>
	  <ul>
      <li>
        <a href="guide.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.guide', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-1.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_1', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_2', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-3.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_3', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_4', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_5', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-6.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_6', $lang)); ?></a>
      </li>
      <li>
        <a href="segment-7.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_7', $lang)); ?></a>
      </li>
      <li>
        <a href="suggested-routes.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.suggested_routes', $lang)); ?></a>
      </li>
    </ul>
	</li>
</ul>
<div class="clear"></div>
