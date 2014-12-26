<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
	$contact = 'node/5';
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> bloc_contact_top"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content">
  	<div class="title">Vous avez un projet ?</div>
  	<div class="subtitle">Nous réalisons des devis personnalisés gratuits à votre demande.</div>
  </div>
  <div class="btn">
  	<?php print l('Nous contacter', $contact); ?>
  </div>
</div>
