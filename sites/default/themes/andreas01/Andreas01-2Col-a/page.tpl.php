<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language ?>" lang="<?php print $language ?>">
  <head>
    <title><?php print $head_title ?></title>
	<?php print $head ?>
    <?php print $scripts ?>
    <?php print $styles ?>
    <!--[if lt IE 7]>
    <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/fix-ie.css";</style>
    <![endif]-->
  </head>
  <body>

    <!-- Layout -->
    <div id="wrap">
      <div id="header">
        <?php print $header; ?>
        <?php if ($site_name) { ?><h1 class="site_name"><a href="<?php print base_path() ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
        <?php if ($site_slogan) { ?><p id="subtext"><?php print $site_slogan ?></p><?php } ?>
      </div>
      <img id="frontphoto" src="<?php print base_path(). path_to_theme()?>/img/front.jpg" width="760" height="175" alt="" />

      <div id="leftside">
        <h2 class="hide">Menu:</h2>
        <?php if ($sidebar_left): ?>
          <?php print $sidebar_left ?>
        <?php endif; ?>
        <?php if ($sidebar_right): ?>
          <?php print $sidebar_right ?>
        <?php endif; ?>
        <?php if ($mission): print '<div class="announce">'. $mission .'</div>'; endif; ?>
      </div>

      <div id="contentwide">
        <?php if ($breadcrumb): print $breadcrumb; endif; ?>
        <?php if ($help): print $help; endif; ?>
        <?php if ($messages): print $messages; endif; ?>
        <?php //if ($tabs): print '<div id="tabs-wrapper">'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php //if ($tabs): print $tabs .'</div>'; endif; ?>
        <?php if ($tabs): print $tabs; endif; ?>
        <?php if (isset($tabs2)): print $tabs2; endif; ?>
        <?php print $content ?>
        <span class="clear"></span>
      </div>

      <div id="footer">
        <?php print $footer_message ?>
      </div>
    </div>
    <?php print $closure ?>
  </body>
</html>
