<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package plum
 */
?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php get_template_part('modules/header/jumbosearch'); ?>
	
	
	<header id="masthead" class="site-header" role="banner">	
			
		<div class="container masthead-container">
			
			<?php get_template_part('modules/header/masthead-inner'); ?>
			
			<?php if (get_theme_mod('plum_header_image_style') == 'full-image' ) : ?>
				<div id="mobile-header-image">
					<img src="<?php header_image(); ?>">
				</div>	
			<?php endif; ?>
			
			<div id="search-icon">
				<a id="searchicon">
					<span class="fa fa-search"></span>
				</a>
			</div>	
			
		</div>	
		
		
		<?php get_template_part('modules/navigation/menu-primary'); ?>
		
		<div id="mobile-search">
			<?php get_search_form(); ?>
		</div>
		
	</header><!-- #masthead -->
	
	
	<?php get_template_part('framework/featured-components/featured', 'eta'); ?>
	<?php get_template_part('framework/featured-components/featured', 'zeta'); ?>

    <?php if ((!is_home() && is_front_page() ) || is_page_template( 'templates/page-hero.php' )) :
    get_template_part('modules/hero/hero-top');
    endif;
?>

    <div class="mega-container">
		
		<?php if( class_exists('rt_slider') ) {
			 rt_slider::render('framework/featured-components/slider', 'swiper' ); 
		} ?>	
					
		<div id="content" class="site-content container">