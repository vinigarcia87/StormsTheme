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
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */

use \StormsFramework\Storms\Front\Layout;

?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #wrap -->

<footer id="footer" class="content-info" role="contentinfo">

    <div class="footer-1">
        <div class="<?php echo Layout::footer_container(); ?>">
            <!-- Footer 1 sidebars -->
            <?php get_template_part( 'partials/footer-1', 'sidebar' ); ?>
        </div>
    </div>

    <div class="footer-2">
        <div class="<?php echo Layout::footer_container(); ?>">
            <!-- Footer sidebars -->
            <?php get_template_part( 'template-parts/footer', 'sidebar' ); ?>
        </div>
    </div>

    <div class="footer-3">
        <div class="<?php echo Layout::footer_container(); ?>">
            <!-- Footer content -->
            <?php get_template_part( 'template-parts/footer', 'content' ); ?>
        </div>
    </div>

</footer>

<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>
</body>
</html>