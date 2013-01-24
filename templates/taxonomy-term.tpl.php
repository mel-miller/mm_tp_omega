
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">

  <?php if ($page): ?>
    <div class="news-pages"><h1><?php print $term_name; ?> News</h1></div>
  <?php endif; ?>

  <div class="content">
    <?php print render($content); ?>
  </div>


</div>
