<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<div id="ggac-wrapper">
		<div class="ggac-header-bg"><a href="<?php echo home_url(); ?>"></a></div>
		<div class="container container-navbar">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand visible-xs" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
						<a class="navbar-brand hidden-xs screen-reader-text" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php 
							wp_nav_menu( array(
								'menu' => 'top_menu',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'navbar-nav nav',
								//Process nav menu using custom nav walker
								'walker' => new wp_bootstrap_navwalker())
							);
						?>
						<?php 
							get_search_form();
						?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
		</div>
		<div class="container">
