<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo u('assets/images/apple-touch-icon.png') ?>" />

	<?php 
	echo css('assets/css/screen.css', 'screen and (min-width: 960px)');
	echo css('assets/css/tablet.css', 'screen and (max-width: 959px)');
	echo css('assets/css/mobile.css', 'screen and (max-width: 639px)');
	echo css('assets/css/jquery.galleryview-3.0-dev.css', 'screen and (min-width: 960px)');
	?>


</head>

<body class="<?php echo $page->template() ?>">

<?php
/* <ul>
  <?php foreach(c::get('lang.available') as $lang): ?>
  <li<?php if($lang == c::get('lang.current')) echo ' class="active"' ?>><a href="<?php echo url($site->uri(), $lang) ?>"><?php echo $lang ?></a></li>
  <?php endforeach ?>
</ul>
*/
?>


  <header>
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="115" height="41" alt="<?php echo h($site->title()) ?>" /></a></h1>
    <h2><?php echo kirbytext($site->author()) ?></h2>
    <h3><?php echo kirbytext($site->email()) ?></h3>
  </header>