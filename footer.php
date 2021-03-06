<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AmethystScores
 */

?>
</div><!-- .site-content -->
	<footer id="colophon" class="site-footer">
		<nav class="social-menu">
			<button class="menu-toggle" aria-controls="social-menu" aria-expanded="false"><?php esc_html_e( 'Social Media Menu', 'amethystscores' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'social-menu',
						'menu_id'        => 'social-menu',
					)
				);
				?>
		</nav>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amethystscores' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'amethystscores' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'amethystscores' ), 'amethystscores', '<a href="https://christinaworkman.ca">Christina Workman</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
