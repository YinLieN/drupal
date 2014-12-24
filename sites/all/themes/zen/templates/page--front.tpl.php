<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
$header = render($page['header']);
$navbar = render($page['navbar']);
$left = render($page['left']);
$right = render($page['right']);
$content_top = render($page['content_top']);
$toolbar = render($page['toolbar']);
$content_bottom = render($page['content_bottom']);
$footer_links = render($page['footer_links']);
$footer = render($page['footer']);
$closure_region = render($page['closure_region']);
$mission = render($page['mission']);
$help = render($page['help']);
$content = render($page['content']);
$content_home = render($page['content_home']);
$content_diapo = render($page['content_diapo']);
?>

<div id="page">
	<div id="page-inner">

	  <header class="header" id="header" role="banner">
		<div id="header-inner">
			<?php if ($logo): ?>
				<div id="logo">
					<h1>
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo">
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
						</a>
					</h1>
				</div>
			<?php endif; ?>

			<?php if ($site_name || $site_slogan): ?>
			  <div class="header__name-and-slogan" id="name-and-slogan">
				<?php if ($site_name): ?>
				  <h1 class="header__site-name" id="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
				  </h1>
				<?php endif; ?>

				<?php if ($site_slogan): ?>
				  <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
				<?php endif; ?>
			  </div>
			<?php endif; ?>

			<?php if ($header): ?>
              <div id="header-blocks" class="region region-header">
                <?php print $header; ?>
              </div> <!-- /#header-blocks -->
            <?php endif; ?>
		</div>
	  </header>
		<!-- Diaporama -->
        <?php if ($content_diapo): ?>
			<div id="content_diapo"><?php print $content_diapo; ?></div>
        <?php endif; ?>
		
		<?php if ($navbar): ?>
			<div id="navbar">
				<div id="navbar-inner" class="clear-block region region-navbar">
					<?php print $navbar; ?>
				</div>
			</div> <!-- /#navbar-inner, /#navbar -->
	    <?php endif; ?>
		
	  <div id="main">
          <div id="main-inner" class="clear-block">
            <?php if ($left): ?>
              <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">
                <?php print $left; ?>
              </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
            <?php endif; ?>

            <div id="content">
              <div id="content-inner">
                <?php if ($mission): ?>
                  <div id="mission"><?php print $mission; ?></div>
                <?php endif; ?>

                <?php if ($content_top): ?>
                  <div id="content-top" class="region region-content_top">
                    <?php print $content_top; ?>
                  </div> <!-- /#content-top -->
                <?php endif; ?>

                <?php if ($breadcrumb || $title || $tabs || $help || $messages): ?>
                  <div id="content-header">
                    <a name="top" id="top"></a>
                    <?php if ($toolbar): ?>
                      <div id="toolbar" class="toolbar_v1"><?php print $toolbar; ?></div>
                    <?php print $breadcrumb; ?>
              			<div id="titre">
                    <?php endif; ?>
              			</div>
                    <?php print $messages; ?>
                    <?php if ($tabs): ?><div class="tabs"><?php //print $tabs; ?></div><?php endif; ?>
                    <?php print $help; ?>
                  </div> <!-- /#content-header -->
                <?php endif; ?>

                <div id="content-area">
                    <div id="content-home">
                    <!-- CONTENT HOME -->
						<?php print $content_home; ?>
                  </div>
                </div>

                <?php if ($content_bottom): ?>
                  <div id="content-bottom" class="region region-content_bottom">
                    <?php print $content_bottom; ?>
                  </div> <!-- /#content-bottom -->
                <?php endif; ?>

              </div>
            </div> <!-- /#content-inner, /#content -->

            <?php if ($right): ?>
              <div id="sidebar-right">
                <div id="sidebar-right-inner" class="region region-right">
                  <?php print $right; ?>
                </div>
              </div> <!-- /#sidebar-right-inner, /#sidebar-right -->
            <?php endif; ?>

          </div>
        </div> <!-- /#main-inner, /#main -->

	  <?php if ($footer_links): ?>
          <div id="footer_links">
            <div id="footer_links-inner" class="region region-footer_links">
              <?php print $footer_links; ?>
            </div>
          </div>
        <?php endif; ?>
  	
        <?php if ($footer): ?>
              <?php print $footer; ?>
        <?php endif; ?>
		
		<?php if ($closure_region): ?>
		  <div id="closure-blocks" class="region region-closure">
			<div id="closure-blocks-inner">
			  <?php print $closure_region; ?>
			</div>
		  </div>
		<?php endif; ?>
	</div>
</div>
