<?php
/** @var \Flyo\Model\Block $block */

?>
<h1><?= $block->getContent()['title']; ?></h1>
<h2><?= $block->getContent()['teaser']; ?></h2>
<?php if ($block->getContent()['image']): ?>
    <img style="width:100%" src="<?= $block->getContent()['image']->source; ?>" />
<?php endif; ?>
