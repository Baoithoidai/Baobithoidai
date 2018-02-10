<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="container">
		<div class="row">
			<div class="col-md-2">
				<?php get_template_part( 'template-parts/navigation/navigation', 'left' ); ?>
			</div>
			<div class="col-md-10">
				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				<?php get_template_part( 'template-parts/slider/banner', 'top' ); ?>
				<?php get_template_part( 'template-parts/content/content', 'top' ); ?>

			</div>
		</div>
		
	</div>
<?php get_footer();
