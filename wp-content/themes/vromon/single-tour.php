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

global $vromon;

$vromon_tour_s_contact_7					 = '';
$vromon_tour_booking_text					 = '';	

if ( isset( $vromon['vromon_tour_s_contact_7'] ) ) {
  $vromon_tour_s_contact_7 = $vromon['vromon_tour_s_contact_7'];
}
if ( isset( $vromon['vromon_tour_booking_text'] ) ) {
	$vromon_tour_booking_text = $vromon['vromon_tour_booking_text'];
}

$vromon_tour_deal_discount_opts = get_post_meta(get_the_ID(), '_vromon_tour_deal_discount_opts', true);
$vromon_tour_deal_discount_title = get_post_meta(get_the_ID(), '_vromon_tour_deal_discount_title', true);
$vromon_tour_deal_discount_subtitle = get_post_meta(get_the_ID(), '_vromon_tour_deal_discount_subtitle', true);
$vromon_tour_map_opts = get_post_meta(get_the_ID(), '_vromon_tour_map_opts', true);
?>


<!-- START BLOG -->
<section class="tour_details section-padding">
	<div class="container">
		<div class="row">

		<?php while ( have_posts() ) : the_post(); 
			$vromon_tour_period = get_post_meta(get_the_ID(), '_vromon_tour_period', true);
			$vromon_tour_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_640_426');
	
		?>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="single_tour_details">
							<img src="<?php echo esc_url($vromon_tour_image[0]);?>" class="img-responsive" alt="<?php echo esc_attr(get_the_title());?>" />
							<span><?php echo esc_html($vromon_tour_period);?></span>
							<?php the_content();?>
						</div>						
					</div><!--- END COL -->
					
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="book_now">
							<h4><?php 
									if($vromon_tour_booking_text){
										echo esc_html($vromon_tour_booking_text);
									}else{
										esc_html_e('Tour Booking' , 'vromon');
									}
		
								?></h4>
							
							<div id="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="'.esc_attr($vromon_tour_s_contact_7).'"]');?>
							</div>	
							
						</div>				
					</div><!--- END COL -->	
					
		<?php endwhile ; // End of the loop. ?>
			
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END BLOG -->		

<?php if($vromon_tour_deal_discount_opts == '1'){ 

$global;
$vromon_tour_booking_btn_text					 = '';	


if ( isset( $vromon['vromon_tour_booking_btn_text'] ) ) {
	$vromon_tour_booking_btn_text = $vromon['vromon_tour_booking_btn_text'];
}												 

?>
<!-- START DEALS & DISCOUNT -->
<section id="deals_discount" class="deals_discount section-padding">
	<div class="container">	
	<?php if($vromon_tour_deal_discount_title && $vromon_tour_deal_discount_subtitle){ ?>
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2><?php echo esc_html($vromon_tour_deal_discount_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($vromon_tour_deal_discount_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->	
	<?php } ?>	
		<div class="row">	
			<div class="col-md-12">
				<div id="discount-slider" class="owl-carousel">
				
					<?php // WP_Query arguments
						$args = array (
							'post_type'              => array( 'tour' ),
							'post__not_in' => array($post->ID),
							'posts_per_page'=> -1
						);

						// The Query
						$related_tour_query = new WP_Query( $args );

						// The Loop
						if ( $related_tour_query->have_posts() ) {
							while ( $related_tour_query->have_posts() ) {
								$related_tour_query->the_post(); 
								$vromon_re_tour_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_1200_800');
								$vromon_re_regular_tour_price = get_post_meta(get_the_ID(), '_vromon_tour_regular_price', true);
								$vromon_re_tour_sale_price = get_post_meta(get_the_ID(), '_vromon_tour_sale_price', true);
								$vromon_spe_rating = get_post_meta(get_the_ID(), '_vromon_tour_rating', true);
								
								?>
								
							<div class="single-discount">
								<div class="single-img">
									<img src="<?php echo esc_url($vromon_re_tour_image[0]);?>" class="img-fluid" alt="<?php echo esc_attr(get_the_title());?>"/>
									<div class="post-date">
										<h4><del><?php echo esc_html($vromon_re_regular_tour_price);?></del> <?php echo esc_html($vromon_re_tour_sale_price);?></h4>
									<?php if($vromon_spe_rating == 1){
										?>
										<i class="fa fa-star"></i>
										<?php	
									}elseif($vromon_spe_rating == 2){ ?>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									<?php }elseif($vromon_spe_rating == 3){ ?>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									<?php }elseif($vromon_spe_rating == 4){ ?>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>	
									<?php }else{ ?>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									<?php } ?>
									</div>								
								</div>	
								<div class="single_discount_dsc">
									<h3><?php the_title();?></h3>
									<p><?php vromon_readmore_content(17);?></p>
									<a href="<?php the_permalink();?>" ><?php 
								
										if($vromon_tour_booking_btn_text){
											echo esc_html($vromon_tour_booking_btn_text);
										}else{
											esc_html_e('View details' , 'vromon');
										} 
									
									?>
									</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->		
						<?php	}
						} else {
							// no posts found
						}

						// Restore original Post Data
						wp_reset_postdata();?>						
	
				</div>	
			</div>												
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END DEALS & DISCOUNT -->
<?php } ?>


<!-- START MAP -->
<div id="gmap_canvas">
	<?php echo $vromon_tour_map_opts;?>
</div>
<!-- END MAP -->

<?php

get_footer();