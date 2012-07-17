<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="home">


<?php 

switch ($page->featured()) {
    case "random":
		$randomPage  = $pages->filterBy('template', 'category')->shuffle()->children()->shuffle()->first();
		// get a random page from your portfolio
		// a::show($randomPage);
		//echo $randomImage->name();
		// get a random image from that page
		displayFeatured($randomPage);
        break;
    case "none":
        break;
    case "file":
    	displayFeatured($page);
    	break;
    default:
       displayFeatured($pages->find($page->featured()));
}

function displayFeatured($featuredPage){
		$featuredImage = $featuredPage->images()->first();
?>

<div class="featured-project" style="background-image: url('<?php echo $featuredImage->url(); ?>');">
<?php if($featuredPage->template() != "home") {  ?>  
  <p class="featured-project-description">
  	<a href="<?php echo $featuredPage->url() ?>"><?php echo $featuredPage->parent()->title() ?> – <?php echo $featuredPage->title() ?></a>
<?php }; ?>

  </p>
</div>

<?php
}
?>


    <h1><?php echo html($site->title()) ?> — <?php echo html($page->title()) ?></h1>

  <article>
    <?php echo kirbytext($page->text()) ?>
  </article>

    
<?php foreach($pages->visible() AS $category):
	$items = ($category) ? $category->children()->visible() : false;
	if($items && $items->count()): ?>
<h2 class="category-title"><?php echo html($category->title()) ?></h2>
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
<?php endif  ?>
<?php endforeach ?>

</section>

<?php snippet('footer') ?>

</body>

</html>