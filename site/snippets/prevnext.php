<ul class="prevnext">

<li class="prev">
<?php if($page->hasPrevVisible()): ?>
<a href="<?php echo $page->prevVisible()->url() ?>" class="navbutton">
	<img src="<?php echo url('/assets/images/dark/panel-prev.png') ?>" alt="previous" />
	previous
</a>
<?php else : ?>
	<img src="<?php echo url('/assets/images/dark/panel-prev.png') ?>" alt="nothing previously" class="inactive" />
<?php endif ?>
</li>


<li class="next" >
<?php if($page->hasNextVisible()): ?>
<a href="<?php echo $page->nextVisible()->url() ?>" class="navbutton">
	<img src="<?php echo url('/assets/images/dark/panel-next.png') ?>" alt="next" />
	next
</a>
<?php else : ?>
	<img src="<?php echo url('/assets/images/dark/panel-next.png') ?>" alt="nothing next" class="inactive" />
<?php endif ?>
</li>



</ul>