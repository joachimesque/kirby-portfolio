<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">
    
	<?php snippet('prevnext') ?>
    <h1><?php echo html($page->title()) ?></h1>
	
  <article>
    <?php echo kirbytext($page->description()) ?>
  </article>
    
    <?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<?php if($items && $items->count()): ?>
  <ul class="project-list">
    <?php foreach($items AS $item): ?>
    <li class="project">
    	<a href="<?php echo $item->url() ?>">
		<h4><?php echo html($item->title()) ?></h4>
    	<?php echo thumb($item->images()->first(), array('height' => 80, 'crop' => true)) ?>
		<p class="description"><span class="date"><?php echo $item->date('m Y') ?></span><br /><?php echo excerpt($item->description(), 80) ?></p>
		</a>
    </li>
    <?php endforeach ?>            
  </ul>
<?php endif ?>

    
    

</section>

<?php snippet('footer') ?>

</body>

</html>