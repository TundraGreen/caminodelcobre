<?php
/*
© 2015 William H. Prescott. All Rights Reserved.

This file is part of Camino del Cobre.

*/

?>
<?php include_once('includes/language.php') ?>
<ul class="navbar">
	<?php $state = strpos($_SERVER['PHP_SELF'],'index') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="index.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.home', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'vision') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="vision.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.vision', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'camino.php') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="camino.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.camino', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'region-route') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="region-route.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.region_route', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'logistics') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="logistics.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.logistics', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'map') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="map.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.map', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'waypoints') === false ? '' : '_inactive' ; ?>
	<li class="<?php print($state); ?>">
	  <a href="waypoints.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.waypoints', $lang)); ?></a>
	</li>
	<?php $state = strpos($_SERVER['PHP_SELF'],'guide') === false ? '' : '_inactive' ; ?>
  <li>
    <div class="guide"><?php print(i18n('navbar.guide', $lang)); ?></div>
	  <ul>
			<?php $state = strpos($_SERVER['PHP_SELF'],'guide') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="guide.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.guide', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-1') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-1.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_1', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-2') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_2', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-3') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-3.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_3', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-4') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_4', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-5') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_5', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-6') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-6.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_6', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-7') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-7.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_7', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-8') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-8.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_8', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-9') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-9.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_9', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-10') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-10.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_10', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-11') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-11.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_11', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'segment-12') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="segment-12.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.segment_12', $lang)); ?></a>
      </li>
			<?php $state = strpos($_SERVER['PHP_SELF'],'suggested-routes') === false ? '' : '_inactive' ; ?>
      <li>
        <a href="suggested-routes.php?lang=<?php print($lang); ?>"><?php print(i18n('navbar.suggested_routes', $lang)); ?></a>
      </li>
    </ul>
	</li>
</ul>
<div class="clear"></div>
