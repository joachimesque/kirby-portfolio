<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

	<?php snippet('prevnext') ?>

    <h1><?php echo html($page->title()) ?></h1>

  <article>
    <?php echo kirbytext($page->text()) ?>
  </article>

<ul class="links">
<?php
	$links = yaml($page->links());
	foreach($links as $link):
?>
<li>
  <?php echo $link['name'] ?> : @<a href="<?php echo $link['url'] ?>" alt="<?php echo $link['handle'] ?>"><?php echo $link['handle'] ?></a>
</li>
<?php endforeach ?>
</ul>

</section>

<?php snippet('footer') ?>

</body>

</html>