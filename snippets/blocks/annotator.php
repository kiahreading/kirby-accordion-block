<?php if($image = $block->image()->toFile()): ?>
<figure>
  <h3 id="map" class="element-invisible"><?php if ($site->mapLabel()->isNotEmpty()): ?><?= $site->mapLabel() ?><?php else: ?>Exhibit Map<?php endif ?></h3>
<div style="position: relative;">
    <?php foreach($image->markers()->toStructure() as $marker): ?>
        <a href="<?= $marker->mapNumber() ?>"><div class="marker" style="<?php echo markerStyle($marker); ?>"><?= $marker->mapNumber() ?></div></a>
    <?php endforeach; ?>
    <img src="<?php echo $image->url() ?>">
</div>
</figure>
<?php if ($block->textCaption()->isNotEmpty()): ?>
<figcaption>
  <p class="font-scale-xs">
  <?= $block->textCaption()->value() ?>
  </p>
</figcaption>
<?php endif ?>
<?php endif ?>