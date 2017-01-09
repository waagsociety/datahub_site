<div class="flex flex__center full__width text__center  flex__wrap">
<?php foreach($data as $item) :
  $icon = $item->icon()->html();
  $title = $item->title()->html();
  $text = $item->text()->kirbytext();
?>

  <div class="info__field">
    <div class="info__icon">
      <?php snippet('icon', ['kind' => $icon]) ?>
    </div>
    <h2><?= $title ?></h2>
    <?= $text ?>
  </div>

<?php endforeach ?>
</div>