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
      <?php print(i18n('suggested_routes.title', $lang)); ?>
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
		  <h2><?php print(i18n('suggested_routes.title', $lang)); ?></h2>

      <h3><?php print(i18n('suggested_routes.part_01.title', $lang)); ?></h3>
      <p><?php print(i18n('suggested_routes.part_01.text_01', $lang)); ?></p>
      <p><?php print(i18n('suggested_routes.part_01.text_02', $lang)); ?></p>

      <h3><?php print(i18n('suggested_routes.part_02.title', $lang)); ?></h3>
      <p><?php print(i18n('suggested_routes.part_02.text_01', $lang)); ?></p>

      <h3><?php print(i18n('suggested_routes.part_03.title', $lang)); ?></h3>
      <p><?php print(i18n('suggested_routes.part_03.text_01', $lang)); ?></p>
      <p><?php print(i18n('suggested_routes.part_03.text_02', $lang)); ?></p>
      <p><?php print(i18n('suggested_routes.part_03.text_03', $lang)); ?></p>

      <h3><?php print(i18n('suggested_routes.part_04.title', $lang)); ?></h3>
      <p><?php print(i18n('suggested_routes.part_04.text_01', $lang)); ?></p>
    </div>

    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>
