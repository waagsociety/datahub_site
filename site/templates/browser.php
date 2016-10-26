<?php snippet('header') ?>
<?php echo css(array(
  'browser-assets/dist/assets/color.css',
  'browser-assets/dist/assets/style.css',
  'browser-assets/dist/assets/results.css',
  'browser-assets/dist/assets/dataset.css',
  'browser-assets/dist/assets/mapbox.css'
)) ?>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-supported/v1.2.0/mapbox-gl-supported.js'></script>
<script src="https://use.fontawesome.com/23e6b28fc5.js"></script>
<div id="app"></div>
<?php echo js('browser-assets/dist/app.min.js') ?>
<?php snippet('browser-footer') ?>