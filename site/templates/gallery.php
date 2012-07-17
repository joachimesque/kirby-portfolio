<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

	<?php snippet('prevnext') ?>

    <h1><?php echo html($page->parent()->title()) ?></h1>

  <article>
    <h2><?php echo html($page->title()) ?></h2>
 	<h3><?php echo $page->date('m Y') ?></h3>
   <?php echo kirbytext($page->description()); ?>
  </article>

	<ul id="gallery">
	<?php foreach($page->images() as $img): ?>
  		<li><img src="<?php echo $img->url() ?>" alt="<?php echo $img->title() ?>" title="<?php echo $img->title() ?>" data-description="<?php echo $img->description() ?>" />
  		<h4><?php echo $img->title() ?></h4>
  		<p><?php echo $img->description() ?></p>
  		</li>
	<?php endforeach ?>
	</ul>


</section>

<?php snippet('footer') ?>

<?php
if($page->slideshow() == "on") {
	snippet('galleryview_call');
} else { ?>
	<script language="javascript">
		$("#gallery").show();
	</script>
<?php } ?>

</body>

</html>