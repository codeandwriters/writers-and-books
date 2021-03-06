<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Writers_and_Books
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'writers-and-books' ); ?></a>
	<?php if(is_single()) { ?>
	<header id="header-top" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
		<nav id="header-menu" class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pt-3 pb-3" id="main-menu">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'left-main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav animate slideIn ps-3 me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>
					<h1 class="text-center"><a id="main-logo" class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">Odinson</a></h1>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'right-main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav animate slideIn pe-3 ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>
				</div>
			</div>
		</nav>	
		<div class="bg-topo d-flex justify-content-center align-items-center">
			<div class="text-center">
				<?php writers_and_books_posted_on(); ?>
				<?php the_title( '<h1 class="text-white pt-5 entry-title">', '</h1>' ); ?>
				<?php the_category(); ?>
				<hr class="text-white">
			</div>
		</div>
	<?php }else { ?>
	<header id="masthead" class="site-header">
	<?php } ?>
	</header><!-- #masthead -->
	<?php if(!is_home()) : ?>
		<div class="breadcrumb container mt-5 mb-5"><?php get_breadcrumb(); ?></div>
	<?php endif; ?>
