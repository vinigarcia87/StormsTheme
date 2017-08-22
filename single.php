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
 * Single Template
 * The template for displaying all single posts
 */

use \StormsFramework\Storms\Front\Layout,
	\StormsFramework\Storms\Bootstrap\Breadcrumb;

get_header(); ?>

	<!-- Website content -->
	<main id="content" class="main <?php echo Layout::main_layout(); ?>" role="main">

		<?php echo Breadcrumb::breadcrumb(); ?>

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation(); // @TODO Verificar no Helper so SF, se nao ha uma solucao para isso

				// Posts navigation
				//echo Pagination::loop_pagination( array( 'type' => 'list', 'before' => '', 'after' => '', ) );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>

	</main><!-- /.main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>

<?php
get_footer();