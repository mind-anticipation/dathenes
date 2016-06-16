<?php

add_action( 'wp_enqueue_scripts', function() {
	// Parent theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
	// Child theme stylesheet.
	wp_enqueue_style( 'dathenes-app', get_stylesheet_uri() );
});

add_action( 'wp_head', function() {
	?>
	<style>
	.image-left-container {
		background-image: url( "<?php echo esc_url_raw( trailingslashit( get_stylesheet_directory_uri() ) . 'assets/images/bg-left.png' ); ?>" );
	}
	.image-right-container {
		background-image: url( "<?php echo esc_url_raw( trailingslashit( get_stylesheet_directory_uri() ) . 'assets/images/bg-right.png' ); ?>" );
	}
	</style>
	<?php
});
