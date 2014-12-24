<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
$link = 'node/';
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> bloc_simple anc"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print l($title, $link); ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
</div>
