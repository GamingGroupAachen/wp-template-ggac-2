<?php
/**
 * The template used for displaying ggac_game content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>
	
	<div class="game-meta panel panel-default">
		<div class="meta-title panel-heading">Snell-Infos</div>
		<div class="meta-content panel-body">
			<div class="ingame-group">
				<div class="meta-label"><?php _e('Chatroom:') ?></div>
				<div class="meta-innerContent"><?php the_field('ingame_gruppe'); ?></div>
			</div>
			<div class="mailinglist">
				<div class="meta-label"><?php _e('Orga:') ?></div>
				<div class="meta-innerContent"><a href="mailto:<?php the_field('mailingliste'); ?>"><?php the_field('mailingliste'); ?></a></div>
			</div>
			<div class="ts_tournament">
				<div class="meta-label"><?php _e('TS Turnier:') ?></div>
				<div class="meta-innerContent"><?php the_field('ts_turnierserver'); ?></div>
			</div>
			<div class="ts_community">
				<div class="meta-label"><?php _e('TS Community:') ?></div>
				<div class="meta-innerContent"><?php the_field('ts_communityserver'); ?></div>
			</div>
			<div class="facebook">
				<div class="meta-label"><?php _e('Facebook:') ?></div>
				<div class="meta-innerContent"><a href="<?php the_field('facebookgruppe'); ?>">FB-Gruppe</a></div>
			</div>
		</div>
	</div>
	
	<div class="entry-content">
		<?php
		the_content();
		
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
