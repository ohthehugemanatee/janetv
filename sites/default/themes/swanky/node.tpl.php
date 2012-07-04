<div class="post" id="post-<?php print $node->nid ?>">
			<h1 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h1>
			<p class="meta"><small><?php print $posted_by; ?></small></p>
			<div class="entry"><?php print $content; ?></div>
			<?php if($links): ?><span class="links"><?php print $links; ?><br /><br /></span><?php endif; ?>
			<?php if ($terms): ?>
      		<div class="tags"><?php print t('Tags'); ?>: <?php print $terms; ?></div>
    	<?php endif; ?>
		</div>