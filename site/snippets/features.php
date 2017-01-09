<?php foreach($data as $item) :
  $image = $page->file($item->image());
  $title = $item->title()->html();
  $text = $item->text()->kirbytext();
?>
  <?php if ($image->exists()) : ?>
  <div class="information__block flex flex__wrap">

    <figure class="full__height half__width flex flex__center">
      <img src="<?= $image->url() ?>" alt="">
    </figure>

    <div class="white__text half__width big__padding flex flex__center">
      <div>
        <h2><?= $title ?></h2>
        <?= $text ?>
      </div>
    </div>

  </div>
  <?php endif ?>
<?php endforeach ?>