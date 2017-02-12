<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hitorilab
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="l-header">
		<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="3063 129 147 49"><defs><style>.a{font-family:NotoSans-Bold, Noto Sans;font-weight:700;letter-spacing:-0.061em;}.b{letter-spacing:-0.081em;}</style></defs><text class="a" transform="translate(3063 167)"><tspan x="0" y="0">hitor</tspan><tspan class="b" y="0">i</tspan><tspan y="0">Lab</tspan></text></svg>
		</a></h1>
		<nav id="site-navigation" class="headerNav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'headerNav-list' ) ); ?>
		</nav><!-- #site-navigation -->
	</header>
