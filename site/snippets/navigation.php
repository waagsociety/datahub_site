<nav class="main__navigation full__width flex flex__wrap flex__center <?php if($page->isHomePage()): ?> light <?php endif ?>">
  <ul class="main__navigation__list flex full__width">
    <li class="main__navigation__list__item logo">
      <a href="http://www.ams-amsterdam.com/" title="Link to AMS website">AMS</a>
    </li>
    <li class="main__navigation__list__item">
      <a href="<?php echo $site->url() ?>" title="Link to homepage">datahub</a>
    </li>
    <?php foreach($pages->visible() as $p): ?>
    <li class="main__navigation__list__item">
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
    <li class="main__navigation__list__item ">
      <a href="http://amsdatahub.waag.org/browser#type=project" title="Link to AMS website">Projects</a>
    </li>
  </ul>
</nav>
<div class="content__container">
