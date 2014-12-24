<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> bloc_contact"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php 
    print '<p>62 rue Bellevue <br />
		85390 Saint Maurice le Girard</p>
		<p class="tel">02.51.52.66.89</p>';
	print l('Nous écrire', 'node/4');
  ?>

</div>
