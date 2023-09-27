<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vromon
 */

get_header(); 
vromon_single_banner();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main_blog_area">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

							previous_post_link( '<span class="vromon_preview_post">%link</span>', esc_html('Previous Post' , 'vromon'), TRUE );
							next_post_link( '<span class="vromon_next_post">%link</span>', esc_html('Next Post' , 'vromon'), TRUE );


							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</div> 
				</div> <!-- End Col  -->
				
				<?php get_sidebar();?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
