<?php if (!empty($primary_nav)): ?>
  <header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
      <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
      <nav role="navigation">
        <?php print render($primary_nav); ?>
      </nav>
    </div><!-- /.centered-navigation-wrapper -->
  </header><!-- /.centered-navigation -->
<?php endif; ?>

<?php if (!empty($page['banner'])): ?>
  <?php print render($page['banner']); ?>
<?php endif; ?>

<div class="refills-wrapper">
  <div class="primary-content">

    <?php if (!empty($tabs)): ?>
      <div style="padding-top: 1em;">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>

  <?php if (!empty($page['sidebar_second'])): ?>
      <div class="sbar" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </div>  <!-- /#sidebar-second -->
  <?php endif; ?>

</div>

<?php if (!empty($page['footer_nav'])): ?>
  <?php print render($page['footer_nav']); ?>
<?php endif; ?>