<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Swanky
Description: A three-column, fixed-width design suitable for news sites and blogs.
Version    : 1.0
Released   : 20080227

 Drupal Theme by http://topdrupalthemes.net  -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print tpl_page_language($language); ?>">
<head>

<?php print $head; ?>
<?php print $styles; ?>
<link type="text/css" rel="stylesheet" media="all" href="<?php print base_path() . path_to_theme(); ?>/more.css?3" />
<?php print $scripts; ?>
<title><?php print $head_title; ?></title>

</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php print theme('links', $primary_links, array('class' => '')); ?>
	</div>
</div>
<div id="logo">
	<h1><a href="<?php if (empty($front_page)) print check_url($base_path); else print check_url($front_page) ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
	<?php if(!empty($site_slogan)): ?><h2><?php print $site_slogan; ?></h2><?php endif; ?>
</div>
<!-- end header -->
<hr />
<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
		
		<?php if (!empty($breadcrumb)): ?><span class="drupal-breadcrumb"><?php print $breadcrumb; ?></span><?php endif; ?>
		<?php if (!empty($title) && empty($node)): ?><h2><?php print $title; ?></h2><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
        <?php if ($is_front && !empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
        <?php print $content; ?>
		
	</div>
	<!-- end content -->
	<!-- start sidebar one -->
	<div id="sidebar1" class="sidebar">
		<ul>
			<li><?php if(!empty($secondary_links)): ?><h2><?php print t('Secondary links'); ?></h2>
				<?php print theme('links', $secondary_links, array('class' => '')); endif; ?></li>
			<?php  if(!empty($left)) print $left; else print $sidebar_left; ?>
		</ul>
	</div>
	<!-- end sidebar one -->
	<!-- start sidebar two -->
	<div id="sidebar2" class="sidebar">
		<ul>
			<?php  if(!empty($right)) print $right; else print $sidebar_right; ?>
		</ul>
	</div>
	<!-- end sidebar two -->
	<div style="clear: both;"> </div>
</div>
<!-- end page -->
<hr />
<!-- start footer -->
<div id="footer"><p><?php print $footer_message; ?> <?php print $footer_msg; ?> | Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | <a href="http://phpweby.com/hostgator_coupon.php">hosting coupon</a> | <a href="http://topdrupalthemes.net">Drupal Themes</a> <?php if (!empty($feed_icons)): ?> | <?php print $feed_icons; endif; ?></p> <?php if (!empty($footer)): print $footer; endif; ?></div><?php print $closure; ?>
<!-- end footer -->
</body>
</html>