<section class="flex flex__center flex__wrap bigger__padding">
  
  <?php snippet('highlights', ['data'=>$page->highlights()->toStructure()]) ?>

  <a class="btn" href="<?php echo kirby()->urls()->index() ?>/information">More Information</a>

</section>
