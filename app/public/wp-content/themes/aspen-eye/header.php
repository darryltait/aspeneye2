<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aspen-eye
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation" style="height: 60px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button"  data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
       <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'mainNavbar',
    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
    'fallback_cb' => false,
    'depth' => 2,
    'walker' => new WP_Bootstrap_Navwalker()
));
?>

    </div>
</nav> 



