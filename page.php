<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<!--Section Service Single-->
			<section class="ls service-single s-py-xl-150 s-py-lg-130 s-py-md-90 s-py-60">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<article class="vertical-item  box-shadow content-padding padding-big">
								<?php
								// Start the loop.
								while ( have_posts() ) :
									the_post();

									// Include the page content template.
									get_template_part( 'template-parts/content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}

									// End of the loop.
								endwhile;
								?>
							</article>
						</div>
					</div>
				</div>
			</section>
	

<?php //get_sidebar( 'content-bottom' ); ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
