<article>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> section-home clearfix"<?php print $attributes; ?>>  

	<?php print render($content['field_section_photo']); ?>
	
	<?php if ($content['field_feature_block']): ?>	
		<div class="feature-block black-box radius-10">
			<?php print render($content['field_feature_block']); ?>
		</div>
	<?php endif; ?> 
		
		
	<?php print render($content['body']); ?>
	
		
</div>	<!-- end section-home -->	
	
	
</article>