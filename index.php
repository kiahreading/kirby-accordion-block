<?php

Kirby::plugin('kiah/annotator-block', [
  'blueprints' => [
    'blocks/annotator' => __DIR__ . '/blueprints/blocks/annotator.yml'
  ],
  'snippets' => [
    'blocks/annotator' => __DIR__ . '/snippets/blocks/annotator.php'
  ]
]);