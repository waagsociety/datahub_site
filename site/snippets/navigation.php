<nav class="<?= $page->slug() ?> main__navigation full__width flex flex__wrap flex__center <?php if($page->isHomePage()): ?> light <?php endif ?>">
  <ul class="main__navigation__list flex full__width">
    <li class="main__navigation__list__item logo">
      <a href="http://www.ams-amsterdam.com/" title="Link to AMS website">AMS</a>
    </li>
    <li class="main__navigation__list__item">
      <a href="<?php echo $site->url() ?>" title="Link to homepage"><?= $site->title() ?></a>
    </li>
    <?php foreach($pages->not('home')->visible() as $page): ?>
    <li class="main__navigation__list__item">
      <a <?php e($page->isOpen(), ' class="active"') ?> href="<?php echo $page->url() ?>"><?php echo $page->title() ?></a>
    </li>
    <?php endforeach ?>
    <!-- <li class="main__navigation__list__item ">
      <a href="http://amsdatahub.waag.org/browse#type=project" title="Link to AMS website">Projects</a>
    </li> -->
    <li class="main__navigation__list__item ">
      <a class="primary button" target="_blank" href="http://amsdatahub.waag.org/dspace/jspui/mydspace" title="Link to AMS website">My Account</a>
    </li>
  </ul>
</nav>
<div class="content__container">
