<?php
// $Id: page.tpl.php,v 1.1.6.2 2008/11/28 06:14:30 andregriffin Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
	<title>
	<?php if ($title): ?>
		<?php print "$title | $site_name"; ?>
	<?php else: ?>
		<?php print "$site_name"; ?>
	<?php endif; ?>
	</title>

	<?php print $head ?>
	<?php print $styles ?>
	<?php print $scripts ?>
</head>
<body<?php print phptemplate_body_class($left, $right); ?>>
	<div id="wrapper">
		<div id="header">

			<?php print $header; ?>
			<?php if ($logo): ?>
				<a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>"><img src="<?php print check_url($logo); ?>" alt="<?php print check_plain($site_name); ?>" id="logo" /></a>
			<?php endif; ?>
			<?php 
				if ($site_name) {
					print '<h1><a href="'. check_url($front_page) .'" title="'. check_plain($site_name) .'">'. check_plain($site_name) . '</a></h1>';
				}
				if ($site_slogan) {
					print '<p>'. check_plain($site_slogan) .'</p>';
				}
			?>	
				
		</div>
		<div id="nav">
			<?php if (isset($primary_links)) : ?>
				<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
			<?php endif; ?>			
		</div> <!-- /#nav -->
		
		<div id="contentwrapper">
			<div id="content" >
				<?php print $breadcrumb; ?>	
				<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
				<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
				<?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
				<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
				<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
				<?php if ($show_messages && $messages): print $messages; endif; ?>
				<?php print $help; ?>
				<?php print $content ?>

			</div> <!-- /#content -->

			<div id="sidebar">
				<?php if ($info): ?>
					<div id="info"><?php print $info ?></div> <!-- /#info -->
				<?php endif; ?>	
				<?php if ($right): ?>
					<div id="sidebar-right" ><?php print $right ?></div> <!-- /#sidebar-right -->
				<?php endif; ?>	
				<?php if ($left): ?>
					<div id="sidebar-left"><?php print $left ?></div> <!-- /#sidebar-left -->
				<?php endif; ?>	
			</div> <!-- /#sidebar-->
			<div class="clear"></div>
		
			<div id="footer" class="clear">
				<?php print $footer_message  ?>
				<?php print $footer ?>
				<p>Original design by <a href="http://andreasviklund.com/">Andreas Viklund</a> | Sponsored by <a href="http://webpoint.wordpress.com/">B4Contact</a> | Drupal port by <a href="http://www.nickbits.co.uk">Nick Young</a></p>
			</div>
		</div>
	</div> <!-- /#wrapper -->
	<?php print $closure ?>
</body>
</html>