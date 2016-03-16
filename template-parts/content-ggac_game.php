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
	<?php 
		$boxFields = array(
			'ingame_gruppe' => 'Chatroom:',
			'mailingliste' => 'Orga:',
			'ts_turnierserver' => 'TS Turnier:',
			'ts_communityserver' => 'TS Community:',
			'facebookgruppe' => 'Facebook:',
		); 
		$nonEmptyField = false;
		foreach($boxFields as $key => $value) {
			if(!empty(get_field($key))){
				$nonEmptyField = true;
				break;
			}
		}
		if($nonEmptyField) :
		?>
		<div class="game-meta panel panel-default">
			<div class="meta-title panel-heading">Snell-Infos</div>
			<div class="meta-content panel-body">
				<?php foreach($boxFields as $key => $value) :  ?>
				<?php
					if(empty(get_field($key))){
						continue;
					}
				?>
				<div class="meta-field <?php echo $key ?>">
					<?php if($key == 'mailingliste') : ?>
						<div class="meta-label"><?php _e($value) ?></div>
						<div class="meta-innerContent"><a href="mailto:<?php the_field($key); ?>"><?php the_field($key); ?></a></div>
					<?php else: ?>
						<div class="meta-label"><?php _e($value) ?></div>
						<div class="meta-innerContent"><?php the_field($key); ?></div>
					<?php endif; ?>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>
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
