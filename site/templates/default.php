<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

	<h1><?php echo html($page->title()) ?></h1>

  <article>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('footer') ?>

</body>

</html>