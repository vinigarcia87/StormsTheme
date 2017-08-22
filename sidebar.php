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
 * Sidebar Template
 * The sidebar containing the main widget area
 */

use \StormsFramework\Storms\Front\Layout;

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside id="sidebar" class="sidebar <?php echo Layout::sidebar_layout(); ?>" role="complementary">
	<?php
		/*
		* When we call the dynamic_sidebar() function, it'll spit out
		* the widgets for that widget area. If it instead returns false,
		* then the sidebar simply doesn't exist, so we'll hard-code in
		* some default sidebar stuff just in case.
		*/
		if ( ! dynamic_sidebar( 'main-sidebar' ) ) {

			the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ) );
			the_widget( 'WP_Widget_Archives', array( 'count' => 0, 'dropdown' => 1 ) );
			the_widget( 'WP_Widget_Tag_Cloud' );
			
		}
	?>
</aside><!-- /.sidebar -->