<?php
/**
 * The default template for displaying none content
 *
 * @package Blaze
 * @since Blaze 1.0
 */
?>					
	<div class="breads row">
		<h3 class="page-title">Oops!</h3>
	</div>
	<div class="row">
				
		<div class="col-md-12 no-content">
			<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blaze' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blaze' ); ?></p>
				<?php get_search_form(); ?>
			<?php else : ?>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blaze' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
			</div>
		</div>
	</div>