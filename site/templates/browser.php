<?php snippet('header') ?>
<?php echo css(array(
  'assets/css/color.css',
  'assets/css/style.css',
  'assets/css/results.css',
  'assets/css/dataset.css',
  'assets/css/mapbox.css'
)) ?>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-supported/v1.2.0/mapbox-gl-supported.js'></script>
<script src="https://use.fontawesome.com/23e6b28fc5.js"></script>
<div id="app"></div>
<?php echo js('assets/js/app.min.js') ?>
<?php snippet('browser-footer') ?>
