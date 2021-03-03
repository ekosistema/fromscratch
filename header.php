<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fromscratch
 */

?>
<!DOCTYPE html>
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fromscratch' ); ?></a>

	<header id="masthead" class="site-header container p-3">
	<div class="row">
		<div class="site-branding col-md-4 p-3 align-self-center">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title align-self-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fromscratch_description = get_bloginfo( 'description', 'display' );
			if ( $fromscratch_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fromscratch_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar d-flex align-self-center text-right col-md-8 navbar-expand-md collapse">
	<button data-toggle="collapse" class="navbar-toggler align-self-start" data-target="#navcol-2" style="filter: invert(0%);margin: 0em;" aria-controls="primary-menu" aria-expanded="false"><?php echo "<img src='https://res.cloudinary.com/dvw01wakw/image/upload/v1607783223/fromscratch/bitmap-e1607459645826_lylrh8.png' width='20' height='20' alt='menuicon'/>"; ?></button>
		<div class="collapse navbar-collapse text-left align-items-end flex-column pr-5" id="navcol-2">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

		</div>
	</nav><!-- #site-navigation -->
	</div>	
</header><!-- #masthead -->
	<?php 
	if ( is_front_page() ) :
		?>
		<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" class="img-fluid aligncenter"/>
		<div id="content" class="container pt-5">
		<div class="row">
		<?php
		else :
			?>
<div id="content" class="container">
<div class="row">
	<?php endif; ?>




