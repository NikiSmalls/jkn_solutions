<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <header>
 *
 * @package Avid Magazine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( 'http://gmpg.org/xfn/11' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php $menu_sticky = get_theme_mod( 'avid_magazine_header_sticky_menu_option', false ); ?>

<?php
	// Default values for 'avid_magazine_social_media' theme mod.
	$defaults = "";
	$social_media = get_theme_mod( 'avid_magazine_social_media', $defaults );
?>



<?php
	set_query_var( 'menu_sticky', $menu_sticky );
	set_query_var( 'social_media', $social_media );

	$layout = get_theme_mod( 'avid_magazine_header_layouts', 'four' );
    if( $layout == 'four' ) {
		get_template_part( 'layouts/header/header-layout', 'four' );
	}
	
?>

<?php if ( class_exists( 'Breadcrumb_Trail' ) && ! is_home() && ! is_front_page() ) : ?>               
	<div class="breadcrumbs">
		<div class="container"><?php breadcrumb_trail(); ?></div>
	</div>
<?php endif; ?>