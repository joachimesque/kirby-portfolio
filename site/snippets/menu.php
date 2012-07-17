
<nav class="menu">
  <ul>
<?php foreach($pages->visible() AS $p): ?>
<?php $items = ($p) ? $p->children()->visible() : false; ?>
<?php if($items && $items->count()): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
      <ul>
<?php foreach($items AS $item): ?>
        <li><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
<?php endforeach ?>            
      </ul>
    </li>
<?php else: ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
<?php endif ?>
<?php endforeach ?>
  </ul>
</nav>
