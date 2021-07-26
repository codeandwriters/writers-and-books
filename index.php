<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writers_and_Books
 */

get_header();
?>

	<main id="primary" class="mt-5 mb-5">
		<div class="container position-relative">
			<header class="entry-header row">
				<div class="col-md-8">
					<h1 class="page-title">Blog</h1>
					<div class="page-subtitle">Últimos artigos</div>
				</div>
				<div class="col-md-3">
					<?php get_search_form(); ?>
				</div>
			</header>
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ while ( have_posts() ) : the_post(); ?>
			<article id="article" class="article">
				<header>
					<?php if ( has_post_thumbnail() ) { ?>
					<figure class="figure figure-thumbnail position-relative mb-3">
						<?php writers_and_books_post_thumbnail(); ?>
						<div class="excerpt-date position-absolute bottom-0 start-0">
							<?php writers_and_books_posted_on(); ?>
						</div>
					</figure>
					<?php } else { ?>
					<div class="excerpt-date fw-lighter" style="padding-left: 40px;">
						<?php writers_and_books_posted_on(); ?>
					</div>
					<?php } ?>
				</header>
				<div class="entry-content">
					<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
					<div class="entry-excerpt">
						<p><?php echo get_excerpt(); ?>...</p>
					</div>
					<div class="read-more text-right">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							Continue lendo
						</a>
					</div>
				</div>
			</article>
			<hr>
			<?php endwhile;endif;?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
