<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> bloc_presentation"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>


	<div class="content">
		<p>
			La société <b>GIRAUD TRAVAUX PUBLICS</b>, située à Saint Maurice le Girard (85390), est à votre service depuis 1988 dans le domaine du TP. 
			Pour développer son activité une seconde entreprise a vu le jour en Janvier 2010 : la société <b>GIRAUD VIDANGE</b>. Elle permet la pérennisation des
			installations d'assainissements individuels. Elle vous propose donc une activité de vidange de fosse septique, de bac à graisse et d'entretien
			de canalisations. Nous intervenons auprès des particuliers et des professionnels pour nos différentes activités. Nous réalisons des <a href="/node/4">devis 
			personnalisés gratuits</a> à votre demande.
		</p>
    </div>


</div>
