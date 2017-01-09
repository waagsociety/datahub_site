<?php snippet('header') ?>
  
  <main class="main">
    <?php snippet('features', ['data'=>$page->features()->toStructure()]) ?>
    <?php snippet('about-panel') ?>
  </main>

  <?php snippet('newsletter') ?>

<?php snippet('footer') ?>
