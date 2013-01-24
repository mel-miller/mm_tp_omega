<article>
  
<div class="vehicle-info">

	<div class="vehicle-title">
		<h1><?php print $title; ?></h1>
	</div>

	
	<div class="vehicle-info-right">	
		<?php print render($content['field_image_bus_ext']); ?>
		<?php print render($content['field_rate_table']); ?>
	</div>
	
	<div class="vehicle-info-left">
		<?php print render($content['body']); ?>
		<?php print render($content['field_feature_list']); ?>
	</div>

	<div class="int-photos">
		<?php print render($content['field_image_bus_int']); ?>
	</div>
	
</div>	<!-- end vehicle-info -->	
	
	
</article>

