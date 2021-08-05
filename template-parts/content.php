<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writers_and_Books
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_singular() ) {
		echo "<header class=\"entry-header\">";
		the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		</header>"
		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'writers-and-books' ),
					'after'  => '</div>',
				)
			);
	}
	?>
	</div><!-- .entry-content -->
	<?php
		if(is_home()) :
		echo "<header class=\"entry-header\">";
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	
		writers_and_books_post_thumbnail();
	?>
		</header>
		<div class="entry-content">
			<?php
			the_excerpt();
			?>
		</div>
		<footer class="entry-footer">
			<?php writers_and_books_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<br><hr><br>
		<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
