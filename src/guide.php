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
      <?php print(i18n('guide.title', $lang)); ?>
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
      <h3><?php print(i18n('guide.title', $lang)); ?></h3>
      <p><?php print(i18n('guide.intro', $lang)); ?></p>
      <h4><?php print(i18n('guide.notes.title', $lang)); ?>:</h4>
      <div class="guide_first_indent">
        <p><?php print(i18n('guide.notes.text_1', $lang)); ?></p>
        <p><?php print(i18n('guide.notes.text_2', $lang)); ?></p>
        <p><?php print(i18n('guide.notes.text_3', $lang)); ?></p>
        <p><?php print(i18n('guide.notes.text_4', $lang)); ?></p>
        <p><?php print(i18n('guide.notes.text_5', $lang)); ?></p>
      </div>
      <div class="guide_second_indent">
        <p>
          <a href="segment-1.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_1.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_1.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-2.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_2.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_2.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-3.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_3.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_3.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-4.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_4.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_4.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-5.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_5.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_5.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-6.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_6.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_6.text', $lang)); ?>
        </p>
        <p>
          <a href="segment-7.php?lang=<?php print($lang); ?>"><?php print(i18n('guide.notes.segment_7.title', $lang)); ?></a>:
          <?php print(i18n('guide.notes.segment_7.text', $lang)); ?>
        </p>
      </div>
    </div>
    <div class="clear"></div>
		<?php include_once('includes/footer.php') ?>
	</body>
</html>



