<?php
/**
 * Storms Framework (http://storms.com.br/)
 *
 * @author    Vinicius Garcia | vinicius.garcia@storms.com.br
 * @copyright (c) Copyright 2012-2017, Storms Websolutions
 * @license   GPLv2 - GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package   Storms
 * @version   3.0.0
 *
 * The header for our theme
 * This is the template that displays the head, menu and layout open tag
 * Includes all the scripts and page definitions
 */

use \StormsFramework\Storms\Front\Layout;

get_template_part( 'template-parts/head' ); ?>

<header id="header" role="banner">
    <div class="<?php echo Layout::header_container(); ?>">
        <!-- Header content -->
        <?php get_template_part('template-parts/header', 'content'); ?>
    </div>

        <!-- Page navigation -->
        <?php get_template_part('template-parts/menu'); ?>

</header>

<!-- Wrap all page content here -->
<div id="wrap" class="wrap" role="document">
    <div class="<?php echo Layout::wrap_container(); ?>">
        <div class="row">

        	<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>