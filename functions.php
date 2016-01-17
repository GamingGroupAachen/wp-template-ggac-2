<?php
require_once('wp_bootstrap_navwalker.php');

add_action( 'init', 'ggac_create_post_type' );
add_action( 'wp_enqueue_scripts', 'ggac_enqueue_scripts' );
add_action( 'after_setup_theme', 'ggac_setup' );
add_action( 'widgets_init', 'ggac_widgets_init', 20);

function ggac_get_bower_directory(){
	return get_stylesheet_directory_uri() . '/js/bower_components';
}

function ggac_create_post_type(){
	register_post_type('ggac_game', array(
		'labels' => array(
			'name' => __('Games'),
			'singular_name' => __('Game'),
		),
		'public' => true,
		'has_archive' => true,
	));
}

function ggac_enqueue_scripts(){
	wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', ggac_get_bower_directory().'/bootstrap/dist/js/bootstrap.min.js', array('jquery'));
}

function ggac_setup(){
	register_nav_menu( 'primary', __('Primary navigation') );
	register_nav_menu( 'social' , __('Social navigation') );
}

function ggac_widgets_init(){
	unregister_sidebar('sidebar-1');
	unregister_sidebar('sidebar-2');
	unregister_sidebar('sidebar-3');
}

function twentysixteen_entry_meta() {
	ob_start();
	if ( 'post' === get_post_type() ) {
		ob_start();
		twentysixteen_entry_date();
		$postedOn = ob_get_clean();
		$author_avatar_size = apply_filters( 'twentysixteen_author_avatar_size', 49 );
		printf( '<div class="name-date"><div class="name"><span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></div><div class="date">%5$s</div></div><div class="avatar">%1$s</div>',
			get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
			_x( 'Author', 'Used before post author name.', 'twentysixteen' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author(),
			$postedOn
		);
	}

	if ( in_array( get_post_type(), array( 'attachment' ) ) ) {
		twentysixteen_entry_date();
	}
	
	$authordate = ob_get_clean();
	printf('<div class="author-date">%s</div>', $authordate);
	
	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentysixteen' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}
	
	echo '<div class="taxonomies">';
	if ( 'post' === get_post_type() ) {
		twentysixteen_entry_taxonomies();
	}
	echo '</div>';

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'twentysixteen' ), get_the_title() ) );
		echo '</span>';
	}
}
