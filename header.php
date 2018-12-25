<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrongerGym
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strongergym' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div class="row">
		<div class="site-branding col-md-3">
			<!-- El siguiente código php es para no mostrar el título (lo que está en el if) si se muestra el logo. Por defecto en el tema podrías
			elegir ambos o uno pero para que no se desarme mi head saco esa opción -->
			<?php
			if (has_custom_logo()) {
				the_custom_logo();
				
			} else {
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$strongergym_description = get_bloginfo( 'description', 'display' );
				if ( $strongergym_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $strongergym_description; /* WPCS: xss ok. */ ?></p>
				<?php endif;
			}
			
			 ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col-md-9">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'strongergym' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		</div><!--row-->
	</header><!-- #masthead container-fluid-->

	<div id="content" class="site-content container">
		<div class="row">