<?php $items = $block->accordion()->toStructure();
foreach ($items as $item): ?>
	<details <?php e($item->toggle()->bool(), 'open') ?>>
		<?php if ($item->summary()->isNotEmpty()): ?>
		<summary><?= $item->summary() ?></summary>
		<?php endif ?>
		<?= $item->details()->text() ?>
	</details>
<?php endforeach ?>