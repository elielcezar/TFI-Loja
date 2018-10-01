<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="http://furiapr.com.br/loja/xmlrpc.php">

<link rel="stylesheet" type="text/css" href="https://furiapr.com.br/loja/wp-content/themes/loja18/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://furiapr.com.br/loja/wp-content/themes/loja18/slick/slick-theme.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="wrapper">

			<div class="col-full">
				<?php
				/**
				 * Functions hooked into storefront_header action
				 *
				 * @hooked storefront_skip_links                       - 0
				 * @hooked storefront_social_icons                     - 10
				 * @hooked storefront_site_branding                    - 20
				 * @hooked storefront_secondary_navigation             - 30
				 * @hooked storefront_product_search                   - 40
				 * @hooked storefront_primary_navigation_wrapper       - 42
				 * @hooked storefront_primary_navigation               - 50
				 * @hooked storefront_header_cart                      - 60
				 * @hooked storefront_primary_navigation_wrapper_close - 68
				 */
				do_action( 'storefront_header' ); ?>
			</div>

		</div>
	</header><!-- #masthead -->

	<?php if( is_page('Home') ) { ?>

			<div class="banners-destaque">
			    <div class="slider">
			        <?php
			          $args = array( 'post_type' => 'banner', 'category' => 'destaque_home');
			          $loop = new WP_Query( $args );
			          while ( $loop->have_posts() ) : $loop->the_post();
			          $imagem = get_field('imagem');
			          $link = get_field('link');
			        ?>
			          <div>
			            <a href="<?php echo $link; ?>"><img src="<?php echo $imagem['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
			          </div>
			        <?php endwhile; ?>
			    </div>
			</div>

	<?php } ?>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
