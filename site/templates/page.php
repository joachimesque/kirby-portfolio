<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

	<?php snippet('prevnext') ?>

    <h1><?php echo html($page->title()) ?></h1>

  <article>
    <?php echo kirbytext($page->text()) ?>
  </article>

<?php if($page->hasImages()): ?>
  <div class="sideImage">
  	<img src="<?php echo $page->images()->first()->url() ?>" alt="<?php echo $page->images()->first()->name() ?>" />
  </div>
<?php endif ?>


</section>

<?php snippet('footer') ?>

</body>

</html>