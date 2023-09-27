<?php

//Home Banner
function vromon_home_banner_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(
			'upload_image' => '',    
			'sec_title' => 'We make awesome tours',           
			'sec_content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry\'s standard .',                  
			'sec_btn_text' => 'Find tour',                  
			'sec_btn_link' => '#special_package',                  


		), $atts )
    );
ob_start();
$upload_image = wp_get_attachment_image_src($upload_image,'');
?>

<!-- START HOME -->
<section id="home" class="home_parallax" style="background-image: url(<?php echo esc_url($upload_image[0]);?>);  background-size:cover; background-position: center center;">			
	<div class="container">
		<div class="row">
		  <div class="col-md-12 text-center">
			<div class="hero-text">
				<h1><?php echo vromon_wp_kses($sec_title);?></h1>
				<p><?php echo vromon_wp_kses($sec_content);?></p>
				<?php if($sec_btn_link){ ?>
				<a href="<?php echo esc_url($sec_btn_link);?>" class="btn btn-default btn-home-bg"><?php echo esc_html($sec_btn_text);?></a>						
				<?php } ?>
			</div>
		  </div><!--- END COL -->			  
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END  HOME DESIGN -->

<?php 
  return ob_get_clean();
}
add_shortcode ('home_banner_area', 'vromon_home_banner_area' );

//Home Banner Paralax
function vromon_home_banner_paralax_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(
			'upload_image' => '',    
			'sec_title' => 'We make awesome tours',           
			'sec_content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry\'s standard .',                  
			'sec_btn_text' => 'Find tour',                  
			'sec_btn_link' => '#special_package',                  


		), $atts )
    );
ob_start();
$upload_image = wp_get_attachment_image_src($upload_image,'');
?>

<!-- START HOME -->
<section data-stellar-background-ratio="0.3" id="home" class="home_parallax" style="background-image: url(<?php echo esc_url($upload_image[0]);?>);  background-size:cover; background-position: center center;">			
	<div class="container">
		<div class="row">
		  <div class="col-md-12 text-center">
			<div class="hero-text">
				<h1><?php echo vromon_wp_kses($sec_title);?></h1>
				<p><?php echo vromon_wp_kses($sec_content);?></p>
				<?php if($sec_btn_link){ ?>
				<a href="<?php echo esc_url($sec_btn_link);?>" class="btn btn-default btn-home-bg"><?php echo esc_html($sec_btn_text);?></a>						
				<?php } ?>						
			</div>
		  </div><!--- END COL -->			  
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
<!-- END  HOME DESIGN -->

<?php 
  return ob_get_clean();
}
add_shortcode ('home_banner_paralax_area', 'vromon_home_banner_paralax_area' );

//Services
function vromon_services_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(
			'sec_title' => 'vromon services',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                  
			'number_of_post' => '6',                                  

		), $atts )
    );
ob_start();

?>

<!-- START SERVICES -->
<section id="service" class="our_services">
   <div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>	
			</div>
		</div>
		<div class="row text-center">	
			<?php
				// WP_Query arguments
				$args = array(
					'post_type'              => array( 'service' ),
					'posts_per_page'         => $number_of_post
				);

				// The Query
				$vromon_service_query = new WP_Query( $args );

				// The Loop
				if ( $vromon_service_query->have_posts() ) {
					while ( $vromon_service_query->have_posts() ) {
						$vromon_service_query->the_post();
						$vromon_service_icon = get_post_meta(get_the_ID(), '_vromon_service_icon', true);
						?>
						<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
							<div class="service">
								<div class="icon"><i class="<?php echo esc_attr($vromon_service_icon);?>"></i></div>
								<h4><?php the_title();?></h4>
								<p><?php the_content();?></p>
							</div>
						</div><!-- END COL -->
						<?php
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();
			?>		

			
			
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END SERVICES -->	

<?php 
  return ob_get_clean();
}
add_shortcode ('services_area', 'vromon_services_area' );

//Why Choice Us
function vromon_why_choice_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(
			'sec_bg' => '',           
			'sec_title' => 'why choose us',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                  
			'number_of_post' => '3',                                  

		), $atts )
    );
ob_start();
$upload_image = wp_get_attachment_image_src($sec_bg,'');
?>

<!-- START WHY CHOOSE US -->	
<section data-stellar-background-ratio="0.3" class="why_choose section-padding"  style="background-image: url(<?php echo esc_url($upload_image[0]);?>);  background-size:cover; background-position: center center;">			
	<div class="container">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
			<div class="section-title text-center">
				<h2 class="section-title-white"><?php echo vromon_wp_kses($sec_title);?></h2>
					<span class="section-title-white"></span>
					<p class="section-title-white"><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->	
		<div class="row text-center">
			<?php
				// WP_Query arguments
				$args = array(
					'post_type'              => array( 'why_choice_us' ),
					'posts_per_page'         => $number_of_post,
				);

				// The Query
				$vromon_why_choice_query = new WP_Query( $args );

				// The Loop
				if ( $vromon_why_choice_query->have_posts() ) {
					while ( $vromon_why_choice_query->have_posts() ) {
						$vromon_why_choice_query->the_post();
						$vromon_why_choice_icon = get_post_meta(get_the_ID(), '_vromon_why_choice_icon', true);
						?>
						<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
							<div class="single-choose">
								<i class="<?php echo esc_attr($vromon_why_choice_icon);?>"></i>
								<h4><?php the_title();?></h4>
								<p><?php the_content();?></p>
							</div>
						</div><!-- END COL -->				
						<?php
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();
			?>

		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->			
</section>
<!-- END WHY CHOOSE US -->
<?php 
  return ob_get_clean();
}
add_shortcode ('why_choice_area', 'vromon_why_choice_area' );

//Counter Area
function vromon_counter_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(       
			'counter_text' => 'Happy Customers',                                           
			'counter_number' => '32652',                                           

		), $atts )
    );
ob_start();

?>

		<div class="single-project-complete">
			<h2 class="counter-num"><?php echo esc_html($counter_number);?></h2>
			<h3><?php echo esc_html($counter_text);?></h3>
		</div>
	
<?php 
  return ob_get_clean();
}
add_shortcode ('counter_area', 'vromon_counter_area' );

//Special Package Area
function vromon_special_package_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'special package',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                           
			'sec_number_of_post' => '6',                                                                                                                                                                                                                   
			'sec_pac_styles' => 'sp_1',                                                                                                                                                                                                                 
			'sec_grid_columns' => 'sg_1',                                                                                                                                                                                                                 
		), $atts )
    );
ob_start();

?>

<!-- START SPECIAL PACKAGE -->
<section id="special_package" class="special_package section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->	
		
		<div class="row text-center">
		
			<?php if($sec_pac_styles == 'sp_2'){ ?>				
			<div class="col-md-12" data-aos="fade-up">
				<div id="package-slider" class="owl-carousel">

			<?php } ?>
			
				<?php
					// WP_Query arguments
					$args = array(
						'post_type'              => array( 'special_package' ),
						'posts_per_page'         => $sec_number_of_post,
					);

					// The Query
					$vromon_special_package_query = new WP_Query( $args );

					// The Loop
					if ( $vromon_special_package_query->have_posts() ) {
						while ( $vromon_special_package_query->have_posts() ) {
							$vromon_special_package_query->the_post();
							$vromon_spe_package_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_1200_800');
							$vromon_spe_package_price = get_post_meta(get_the_ID(), '_vromon_spe_package_price', true);
							$vromon_spe_package_period = get_post_meta(get_the_ID(), '_vromon_spe_package_period', true);
							$vromon_spe_rating = get_post_meta(get_the_ID(), '_vromon_spe_rating', true);
							?>
							
							<?php if($sec_pac_styles == 'sp_1'){?> <div class="col-lg-<?php if($sec_grid_columns == 'sg_2'){echo esc_attr('4');}else{ echo esc_attr('6');}?> col-sm-6 col-xs-12"> <?php } ?>
							
							<div class="single_package"> 
								<img class="img-fluid" src="<?php echo esc_url($vromon_spe_package_image[0]);?>" alt="">
								<h5 class="package-name"><?php the_title();?></h5>
								<div class="package-hover">
									<h5><?php the_title();?></h5>
									<span><?php echo esc_html($vromon_spe_package_price);?></span>
									<p><?php the_content();?></p>
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
									<span class="time_zone"><?php echo esc_html($vromon_spe_package_period);?></span>
								</div>
							</div><!-- END SINGLE PACKAGE -->
							
							<?php if($sec_pac_styles == 'sp_1'){?> </div> <?php } ?>
							
							<?php	
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>		
				
			<?php if($sec_pac_styles == 'sp_2'){ ?>				
				</div>					
			</div><!-- END COL -->
			<?php } ?>
			
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END SPECIAL PACKAGE -->
<?php 
  return ob_get_clean();
}
add_shortcode ('special_package_area', 'vromon_special_package_area' );

//Tour Area
function vromon_tour_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'Top deals',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                                                                                      
			'sec_details_text' => 'tour-details',                                                           
			'number_of_post' => '6',                                                           

		), $atts )
    );
ob_start();

?>
	<!-- START TOP DEALS -->
		<section id="top_deals" class="top_deals section-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<h2><?php echo vromon_wp_kses($sec_title);?></h2>
							<span></span>
							<p><?php echo vromon_wp_kses($sec_subtitle);?></p>						
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->	
				
				<div class="row" data-aos="fade-up">
				
				<?php 
					// WP_Query arguments
					$args = array(
						'post_type'              => array( 'tour' ),
						'posts_per_page'         => $number_of_post,
					);

					// The Query
					$vromon_tour_query = new WP_Query( $args );

					// The Loop
					if ( $vromon_tour_query->have_posts() ) {
						while ( $vromon_tour_query->have_posts() ) {
							$vromon_tour_query->the_post();
							$vromon_tour_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_1200_800');
							$vromon_top_deal = get_post_meta(get_the_ID(), '_vromon_top_deal', true);
							$vromon_tour_promo_text = get_post_meta(get_the_ID(), '_vromon_tour_promo_text', true);
							
							if($vromon_top_deal == true){
							?>
							
							<div class="col-lg-4 col-sm-6 col-xs-12 no-padding">
								<div class="grid">
									<figure class="effect-sadie">
										<img src="<?php echo esc_url($vromon_tour_image[0]);?>" alt=""/>
										<figcaption>
											<h4><?php echo esc_html($vromon_tour_promo_text);?></h4>
											<p><a href="<?php the_permalink();?>"><?php echo esc_html($sec_details_text);?></a></p>
										</figcaption>			
									</figure>
								</div><!--- END GRID -->
							</div><!--- END COL -->	
							
							
							<?php
							}
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();				
				?>
					
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER-FLUID -->
		</section>
		<!-- END TOP DEALS -->		

<?php 
  return ob_get_clean();
}
add_shortcode ('tour_area', 'vromon_tour_area' );

//Related Tour Area
function vromon_related_tour_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'Related tours',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                           
			'sec_btn_text' => 'View details',                                                           
			'sec_number_of_post' => '6',                                                           
			'sec_pac_styles' => 'sp_1',                                                           
			'sec_grid_columns' => 'sg_1',                                                           
                                                         
		), $atts )
    );
ob_start();

?>
<!-- START DEALS & DISCOUNT -->
<section id="deals_discount" class="deals_discount releated_tour section-padding">
	<div class="container">		
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div class="section-title text-center">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->		
		
		<div class="row">
		<?php if($sec_pac_styles == 'sp_2'){ ?>	
			<div class="col-md-12" data-aos="fade-up">
				<div id="discount-slider" class="owl-carousel">
			<?php } ?>		
				<?php
					// WP_Query arguments
					$args = array(
						'post_type'              => array( 'tour' ),
						'posts_per_page'         => $sec_number_of_post,
					);

					// The Query
					$vromon_related_tour_query = new WP_Query( $args );

					// The Loop
					if ( $vromon_related_tour_query->have_posts() ) {
						while ( $vromon_related_tour_query->have_posts() ) {
							$vromon_related_tour_query->the_post();
							$vromon_re_tour_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_1200_800');
							$vromon_re_regular_tour_price = get_post_meta(get_the_ID(), '_vromon_tour_regular_price', true);
							$vromon_re_tour_sale_price = get_post_meta(get_the_ID(), '_vromon_tour_sale_price', true);
							$vromon_spe_rating = get_post_meta(get_the_ID(), '_vromon_spe_rating', true);
							
							?>
							
							<?php if($sec_pac_styles == 'sp_1'){?> <div class="col-lg-<?php if($sec_grid_columns == 'sg_2'){echo esc_attr('4');}else{ echo esc_attr('6');}?> col-sm-6 col-xs-12"> <?php } ?>
							
							<div class="single-discount">
								<div class="single-img">
									<img src="<?php echo esc_url($vromon_re_tour_image[0]);?>" class="img-fluid" alt=""/>
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
									<a href="<?php the_permalink();?>"><?php echo esc_html($sec_btn_text);?></a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->

							<?php if($sec_pac_styles == 'sp_1'){?> </div> <?php } ?>
							
							<?php
		
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>				

					
			<?php if($sec_pac_styles == 'sp_2'){ ?>		
				</div>	
			</div>			
			<?php } ?>
			
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END DEALS & DISCOUNT -->

<?php 
  return ob_get_clean();
}
add_shortcode ('related_tour_area', 'vromon_related_tour_area' );

//Gallery Area
function vromon_gallery_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'Gallery',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                                                                                    
                                                         

		), $atts )
    );
ob_start();

?>

<!-- START GALLERY -->
<section id="gallery" class="our_gallery section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div class="section-title text-center">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->	
		
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div id="gallery-slider" class="owl-carousel">
				<?php
						// WP_Query arguments
						$args = array(
							'post_type'              => array( 'gallery' ),
							'posts_per_page'         => '-1',
						);

						// The Query
						$vromon_gallery_query = new WP_Query( $args );

						// The Loop
						if ( $vromon_gallery_query->have_posts() ) {
							while ( $vromon_gallery_query->have_posts() ) {
								$vromon_gallery_query->the_post();
								$vromon_gallery_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_1200_600');
								
								?>
								
								<div class="single_gallery">
									<img src="<?php echo esc_url($vromon_gallery_image[0]);?>" class="img-gallery" alt="" />
									<div class="gallery_info">
										<h1><?php the_title();?></h1>
										<p><?php the_content();?></p>
									</div>
								</div><!-- END SINGLE GALLERY -->	
								
								<?php
				
							}
						} else {
							// no posts found
						}

						// Restore original Post Data
						wp_reset_postdata();
				?>			
	
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</section>
<!-- END GALLERY -->

<?php 
  return ob_get_clean();
}
add_shortcode ('gallery_area', 'vromon_gallery_area' );

//Blog Area
function vromon_blog_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'Our Blog',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                                                                                    
			'read_more_btn' => 'Read More',
			'number_of_post' => '3',                  
                                                         

		), $atts )
    );
ob_start();

?>
<!-- START BLOG -->
<section id="blog" class="blog_section">						
	<div class="container">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div class="section-title text-center wow zoomIn">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>
			</div><!-- END COL -->
		</div><!-- END ROW -->	
		<div class="row">	
			<?php
				// WP_Query arguments
				$args = array(
					'post_type'              => array( 'post' ),
					'posts_per_page'         => $number_of_post,
				);

				// The Query
				$vromon_blog_query = new WP_Query( $args );

				// The Loop
				if ( $vromon_blog_query->have_posts() ) {
					while ( $vromon_blog_query->have_posts() ) {
						$vromon_blog_query->the_post();
						$vromon_blog_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'vromon_image_640_426');
						?>
						<div class="col-lg-4 col-sm-6" data-aos="fade-up">
							<div class="single_blog">
									
								<div class="blog-photo">
								<?php if(has_post_thumbnail()){ ?>	
									<img  alt="<?php the_title();?>" src="<?php echo esc_url($vromon_blog_image[0]);?>"/>
								<?php } ?>	
									<div class="p_date"><?php echo esc_html(get_the_time('d F, Y'));?></div>
								</div>
								<div class="blog-text wow fadeInLeft">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<p><?php vromon_readmore_content(19);?></p>
									 <span><a href="<?php the_permalink();?>"><?php echo esc_html($read_more_btn);?></a></span>
								</div>
								
							</div>
						</div><!--- END COL -->						
						<?php
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();
			?>		

		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section> 
<!-- END BLOG -->
<?php 
  return ob_get_clean();
}
add_shortcode ('blog_area', 'vromon_blog_area' );

//Testimonials Area
function vromon_testimonials_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'What our client say',           
			'sec_subtitle' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',                                                                                                                                                                                                                                    
		), $atts )
    );
ob_start();

?>
<!-- START TESTIMONIAL -->
<section class="testimonial-demo section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center" data-aos="fade-up">
				<div class="section-title">
					<h2><?php echo vromon_wp_kses($sec_title);?></h2>
					<span></span>
					<p><?php echo vromon_wp_kses($sec_subtitle);?></p>
				</div>	
			</div><!-- END COL -->
		</div><!-- END ROW -->					
		<div class="row">
			
			<div class="col-md-12">
				<div id="testimonial-slider" class="owl-carousel">
				<?php
					// WP_Query arguments
					$args = array(
						'post_type'              => array( 'testimonials' ),
						'posts_per_page'         => -1,
					);

					// The Query
					$vromon_testimonials_query = new WP_Query( $args );

					// The Loop
					if ( $vromon_testimonials_query->have_posts() ) {
						while ( $vromon_testimonials_query->have_posts() ) {
							$vromon_testimonials_query->the_post();
							$vromon_testi_designation = get_post_meta(get_the_ID(), '_vromon_testi_designation', true);
							?>
							<div class="testimonial">
								<div class="testimonial-content">
									<div class="testimonial-icon">
										<i class="fa fa-quote-left"></i>
									</div>
									<p class="description">
										<?php the_content();?>
									</p>
								</div>
								<h3 class="title"><?php the_title();?></h3>
								<span class="post"><?php echo esc_html($vromon_testi_designation);?></span>
							</div>							
							<?php
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>

				</div>
				
			</div>
			
		</div>
	</div>
</section>
<!-- END TESTIMONIAL -->
<?php 
  return ob_get_clean();
}
add_shortcode ('testimonials_area', 'vromon_testimonials_area' );

//Clients Area
function vromon_clients_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_bg_image' => '',           
                                    

		), $atts )
    );
ob_start();
$upload_image = wp_get_attachment_image_src($sec_bg_image,'');
?>

<!-- START COMPANY PARTNER LOGO  -->
<div data-stellar-background-ratio="0.3" class="partner-logo" style="background-image: url(<?php echo esc_url($upload_image[0]);?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<div class="partner">
				<?php
					// WP_Query arguments
					$args = array(
						'post_type'              => array( 'clients' ),
						'posts_per_page'         => '-1',
					);

					// The Query
					$vromon_clients_query = new WP_Query( $args );

					// The Loop
					if ( $vromon_clients_query->have_posts() ) {
						while ( $vromon_clients_query->have_posts() ) {
							$vromon_clients_query->the_post();
							$vromon_client_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'');
							$vromon_client_website = get_post_meta(get_the_ID(), '_vromon_client_website', true);
							?>
								<a href="<?php echo esc_url($vromon_client_website);?>"><img src="<?php echo esc_url($vromon_client_image[0]);?>" alt=""></a>
							<?php
						}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>
					

				</div>
			</div><!-- END COL  -->
		</div><!--END  ROW  -->
	</div><!-- END CONTAINER  -->
</div>
<!-- END COMPANY PARTNER LOGO -->
		
<?php 
  return ob_get_clean();
}
add_shortcode ('clients_area', 'vromon_clients_area' );

//Contact Us Area
function vromon_contact_us_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_title' => 'Contact Us',           
			'enter_shortcode' => '',           
                                    

		), $atts )
    );
ob_start();

?>

<!-- START CONTACT FORM-->
<section id="contact" class="contact_area">
	<div class="container-fluid">
		<div class="row">		
			<div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
				<div class="contact_address">
					<h3><?php echo esc_html($sec_title);?></h3>				
					<ul>
						<?php echo do_shortcode($content);?>
						
					</ul>
				</div>
			</div><!-- END COL -->	
			
			<div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
				<div class="contact">
					<div id="contact-form">
						<?php echo do_shortcode($enter_shortcode);?>
					</div>
				</div>
			</div><!-- END COL -->
			
		</div><!--- END ROW -->				
	</div><!--- END CONTAINER -->	
</section>
<!-- END CONTACT FORM -->	
		

<?php 
  return ob_get_clean();
}
add_shortcode ('contact_us_area', 'vromon_contact_us_area' );

//Contact info Area
function vromon_contact_info_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
			'sec_icon' => 'fa fa-rocket',           
			'sec_text' => '2369 Robinson Lane Jackson, OH 45640',                  
                                    

		), $atts )
    );
ob_start();

?>

<li><i class="<?php echo esc_attr($sec_icon);?>"></i> <?php echo vromon_wp_kses($sec_text);?></li>

<?php 
  return ob_get_clean();
}
add_shortcode ('contact_info_area', 'vromon_contact_info_area' );

//Google Map Area
function vromon_google_area( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(            
               'sec_lati' => '40.7127837' ,                                                               
               'sec_longi' => '-74.00594130000002' ,                                                               
               'sec_api_key' => 'AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA' ,                                                               
                  

		), $atts )
    );
ob_start();

?>

<!-- START MAP -->
<div id="map"></div>
<!-- END MAP -->

<!-- map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc_js($sec_api_key);?>"></script>	
	
<script>

jQuery(document).on('ready', function(){
	
	/*START CONTACT MAP JS*/
		function initialize() {
		  var mapOptions = {
			zoom: 15,
			scrollwheel: false,
			center: new google.maps.LatLng(<?php echo esc_js($sec_lati);?>, <?php echo esc_js($sec_longi);?>)
		  };
		  var map = new google.maps.Map(document.getElementById('map'),
			  mapOptions);
		  var marker = new google.maps.Marker({
			position: map.getCenter(),
			icon: '<?php echo esc_url(get_template_directory_uri());?>/assets/img/map_pin.png',
			map: map
			
		  });
		}
		google.maps.event.addDomListener(window, 'load', initialize);	
	   /*END CONTACT MAP JS*/
	});    
</script>

<?php 
  return ob_get_clean();
}
add_shortcode ('google_area', 'vromon_google_area' );



//Shortcode Importer
function vromon_shortcode_importer( $atts , $content = null ){
 // Attributes
    extract( shortcode_atts(
        array(                                   
            'enter_shortcode' => '',                                                                              

		), $atts )
    );

	echo do_shortcode($enter_shortcode);
}
add_shortcode ('shortcode_importer', 'vromon_shortcode_importer' );