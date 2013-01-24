<article>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> basic-page clearfix"<?php print $attributes; ?>>  
	
	<?php print render($content['body']); ?>
	
	<div class="cabs-route-map">
	<div class="map-link">
		<a href="<?php print render($content['field_map_pdf']);?>" target="_blank">View or Download PDF Map </a>
	</div>
	<div class="map-pdf"><?php print render($content['field_map_image_w_link']);?></div>
</div>
	
</div>
	
</article>