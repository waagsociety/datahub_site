<?php snippet('header') ?>
<?php echo css(array(
  'browser-assets/dist/assets/color.css',
  'browser-assets/dist/assets/style.css',
  'browser-assets/dist/assets/results.css',
  'browser-assets/dist/assets/dataset.css',
)) ?>
<div id="app"></div>
<?php echo js('browser-assets/dist/app.min.js') ?>
<?php snippet('browser-footer') ?>