<div class="header">
  <div class="title">
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">DUDE WITH GOALS</a>
</div>

<div class="menu-expander"><i class="fa fa-bars"></i></div>

<div class="navigation">
  <?php print render($page['menu']); ?>
</div>
</div>
<div class="page">
  <?php print $messages; ?>
  <?php print render($tabs); ?>

    <div class="content" role="main">

      <a id="main-content"></a>
      <?php if(!$is_front):?>
      <h1><?php print $title;?></h1>
      <?php endif;?>
      <?php print render($page['content']); ?>

    </div>

    <div class="side">
      <?php print render($page['side']);?>
    </div>

  <footer class="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>

</div>