<?php
/**
 * Template Name: KC Template
 *
 * 
 * @package vromon
 */

get_header(); 

$vromon_rev_alias =  get_post_meta(get_the_ID(),'_vromon_rev_slider_alias',true); 

if($vromon_rev_alias){
 if (class_exists('RevSlider')) putRevSlider($vromon_rev_alias);
}

?>

<div class="clearfix"></div>

<div id="kc_page_template">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // End of the loop. ?>
</div><!-- #main -->

<div class="clearfix"></div>

<?php get_footer(); ?>
