<?php
if(!$page) {
?>
<div class="post post-article white-box radius-10">
<?php
} else {
?>
<div class="post post-page">
<?php
}
?>

<article<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  
  <?php if ($page && $title): ?>
  <header>
    <h1<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h1>
  </header>
  <?php endif; ?>
  
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
		<div class="dateblock">
			<div class="dateblock-left">
			<div class="day"><?php print $date_day ?></div>	
			</div>		
			<div class="dateblock-right">
				<div class="month"><?php print $date_month ?></div>
				<div class="year"><?php print $date_year ?></div>				
			</div>	
		</div>
		
		<?php
			// We hide the comments links and tags now so that we can render them later.
			hide($content['comments']);
			hide($content['links']);
			hide($content['field_news_category']);
			print render($content);
		?>
	</div> 
	
  
 	<div class="post-meta">  
 	 
		<div class="post-tags">
			<?php $tags = render($content['field_news_category']);?>
			<?php if ($tags): ?>
				<div class="terms terms-inline"><?php print $tags; ?></div>
			<?php endif; ?>						
		</div> <!-- end post tags -->
			
		
		<?php if($page) {
		?>
			<div class="revised-date">
				Last Updated: &nbsp;
				<?php print $changed_month ?>
				<?php print $changed_day ?>,&nbsp;
				<?php print $changed_year ?>
			</div> <!-- end rev date -->
		<?php
		}
		?>
		
		
		<div class="post-button">
			<?php if (!empty($content['links'])): ?>
				<div class="links"><?php print render($content['links']); ?></div>
			<?php endif; ?> <!-- end post button -->
		</div>
	
	</div> <!-- end post-meta -->
 
</article>

</div> <!-- end if !$page or $page -->