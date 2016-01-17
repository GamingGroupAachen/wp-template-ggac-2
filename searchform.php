<form role="search" method="get" class="search-form navbar-form form-inline navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><label><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></label></span>
	<div class="input-group">
		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'twentysixteen' ); ?>" />
		<span class="input-group-btn">
			<button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
		</span>
	</div>
</form>
