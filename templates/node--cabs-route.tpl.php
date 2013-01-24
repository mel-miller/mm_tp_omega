<article>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  
<!-- content starts here -->  
<div class="cabs-route-content">
	<div class="cabs-route-header">
		<div class="cabs-route-letter"><?php print render($content['field_route_letter']); ?></div>
		<div class="cabs-route-title"><?php print render($title); ?></div>
	</div>


	<div class="cabs-route-grid-container">
		<div class="cabs-route-grid-header">
			<table>
      			<tr>
        			<td>Hours of Operation</td>
        			<td>AM</td>
        			<td>MID</td>
        			<td>PM</td>
        			<td>LATE</td>
        			<td>OVN</td>
      			</tr>
      		</table>
		</div>
		<div class="cabs-route-grid"><?php print render($content['field_route_grid']); ?></div>
	</div> <!--end grid-container-->
	<div class="timetable-description"<p> Frequency</p></div>


<div class="cabs-route-map">
	<div class="map-link">
		<a href="<?php print render($content['field_map_pdf']);?>" target="_blank">View or Download PDF Map </a>
	</div>
	<div class="map-pdf"><?php print render($content['field_map_image_w_link']);?></div>
</div>
	

</div>
</div>
</article>


