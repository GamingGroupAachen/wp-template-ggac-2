
		<footer class="site-footer" id="colophon" role="contentinfo">
			<div id="site-info">
				<div class="site-info-left">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php site_icon_url(); ?>">
						<div class="site-info-title">
							Gaming Group <br> 
							Aachen
						</div>
					</a>
				</div>
				<div class="site-info-right">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
								) );
							?>
						</nav><!-- .social-navigation -->
					<?php endif; ?>
				</div>
			</div><!-- #site-info -->
		</footer><!-- #colophon -->

	</div><!-- container -->
</div><!-- wrapper -->
 
<?php wp_footer(); ?>
	
<!-- Statistik/Analyse-Tool einbauen -->

</body>
</html>