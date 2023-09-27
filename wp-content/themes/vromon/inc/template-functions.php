<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vromon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vromon_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'vromon_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function vromon_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vromon_pingback_header' );


function vromon_header(){ 

global $vromon;

$vromon_preloader_opt					 = '';
$vromon_homepage_opt					 = '';

if ( isset( $vromon['vromon_preloader_opt'] ) ) {
	$vromon_preloader_opt = $vromon['vromon_preloader_opt'];
}
if ( isset( $vromon['vromon_homepage_opt'] ) ) {
	$vromon_homepage_opt = $vromon['vromon_homepage_opt'];
}


$vromon_default_logo_img = get_template_directory_uri() . '/assets/img/logo.png';

$custom_logo_id = get_theme_mod( 'custom_logo' );
$vromon_custom_logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

	<?php if($vromon_preloader_opt == '1' && !$vromon_homepage_opt == '1') { ?>
		
		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->
	
	<?php }elseif($vromon_preloader_opt == '1' && $vromon_homepage_opt == '1'){ ?>	

	<?php if(is_front_page()) {?>
		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->
	<?php } } ?>
	
		
<!-- START NAVBAR -->
<div id="navigation" class="navbar navbar-toggleable-md fixed-top navbar-light bg-faded site-navigation">
	<div class="container">
		<div class="navbar-header">

			<?php if(get_custom_logo()){ ?>
			  
			   <a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand"><img src="<?php echo esc_url($vromon_custom_logo[0]);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					<?php }else { ?>
				 <a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand"><img src="<?php echo esc_url($vromon_default_logo_img);?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			<?php } ?>	
			
			
		</div>
		
		<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
		    <nav>
		    	<?php vromon_main_menu();?>
			</nav>
		</div> 
		<div id="mobile_menu"></div>
	</div><!--- END CONTAINER -->
</div> 
<!-- END NAVBAR -->	


<?php }

function vromon_footer(){ 
global $vromon;

$vromon_copywrite_text					 = '';

if ( isset( $vromon['vromon_copywrite_text'] ) ) {
	$vromon_copywrite_text = $vromon['vromon_copywrite_text'];
}

?>
<!-- START FOOTER -->
<div class="footer" id="footer">
	<div class="container">
		<div class="row">					
			<div class="col-xs-12 text-center">
				<div class="copyright">
					<?php if($vromon_copywrite_text){ ?>
					<p><?php echo vromon_wp_kses($vromon_copywrite_text);?></p>
					<?php }else{ ?>
					<p><?php esc_html_e('Copyright &copy; 2022 |  All Rights Reserved.' , 'vromon');?></p>
					<?php } ?>
				</div><!--- END FOOTER COPYRIGHT -->
			</div><!--- END COL -->			
		</div><!--- END ROW -->				
	</div><!--- END CONTAINER -->
</div>
<!-- END FOOTER -->		
						
<?php 	
}

function vromon_main_banner_url_option(){
global $vromon;
$vromon_home_banner_img						 = '';

if ( isset( $vromon['vromon_home_banner_img']['url'] ) ) {
	$vromon_home_banner_img = $vromon['vromon_home_banner_img']['url'];
}
$vromon_default_bannar_image = get_template_directory_uri() . '/assets/img/bg/section-bg.jpg';
	
	 if($vromon_home_banner_img){
			echo esc_url($vromon_home_banner_img);
		}else{ 
		echo esc_url($vromon_default_bannar_image);
	}
}

function vromon_single_banner_url_option(){
global $vromon;
$vromon_home_banner_img						 = '';

if ( isset( $vromon['vromon_home_banner_img']['url'] ) ) {
	$vromon_home_banner_img = $vromon['vromon_home_banner_img']['url'];
}
$vromon_default_bannar_image = get_template_directory_uri() . '/assets/img/bg/section-bg.jpg';
$vromon_meta_upload_bannar = get_post_meta(get_the_ID(), '_vromon_upload_banner_image', true);
	
	 if($vromon_meta_upload_bannar){
		 echo esc_url($vromon_meta_upload_bannar);
		}elseif($vromon_home_banner_img){
			echo esc_url($vromon_home_banner_img);
		}else{ 
		echo esc_url($vromon_default_bannar_image);
	}
}
function vromon_blog_banner(){ 
global $vromon;

$vromon_blog_page_text					 = '';
$vromon_bannerImage_opt					 = '';


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}

if ( isset( $vromon['vromon_blog_page_text'] ) ) {
	$vromon_blog_page_text = $vromon['vromon_blog_page_text'];
}

?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_main_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>
	
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php if($vromon_blog_page_text){ ?>
						<h1 class="section-blog-title"><?php echo esc_html($vromon_blog_page_text);?></h1>

					<?php }else{ ?>
						<h1 class="section-blog-title"><?php esc_html_e('Blog' , 'vromon');?></h1>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }

function vromon_archive_banner(){ 
global $vromon;

$vromon_archive_text					 = '';
$vromon_bannerImage_opt					 = '';


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}

if ( isset( $vromon['vromon_archive_text'] ) ) {
	$vromon_archive_text = $vromon['vromon_archive_text'];
}

?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_main_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>	
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
				<?php if($vromon_archive_text){ ?>
					<h1 class="section-blog-title"><?php echo esc_html($vromon_archive_text); the_archive_title();?></h1>
				<?php }else{ ?>
					<h1 class="section-blog-title"><?php esc_html_e('Archive - ' , 'vromon'); the_archive_title();?></h1>
				<?php } ?>
					
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }


function vromon_search_banner(){ 
global $vromon;

$vromon_search_text					 = '';
$vromon_bannerImage_opt					 = '';


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}


if ( isset( $vromon['vromon_search_text'] ) ) {
	$vromon_search_text = $vromon['vromon_search_text'];
}
?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_main_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php if($vromon_search_text){ ?>
						<h1 class="section-blog-title"><?php echo esc_html($vromon_search_text); echo esc_html(get_search_query());?></h1>
					<?php }else{ ?>
						<h1 class="section-blog-title"><?php esc_html_e('Search - ' , 'vromon'); echo esc_html(get_search_query());?></h1>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }

function vromon_404_banner(){ 
	
global $vromon;
$vromon_bannerImage_opt					 = '';
$vromon_404_text					 = '';	


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}
if ( isset( $vromon['vromon_404_text'] ) ) {
	$vromon_404_text = $vromon['vromon_404_text'];
}	

?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_main_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>	
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php if($vromon_search_text){ ?>
						<h1 class="section-blog-title"><?php echo esc_html($vromon_404_text);?></h1>
					<?php }else{ ?>
						<h1 class="section-blog-title"><?php esc_html_e('404' , 'vromon'); ?></h1>
					<?php } ?>
			
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }



function vromon_single_banner(){ 
global $vromon;
$vromon_bannerImage_opt					 = '';


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}

?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_single_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="section-blog-title"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }

function vromon_shop_banner(){ 
	
global $vromon;
$vromon_bannerImage_opt					 = '';
$vromon_shop_text					 = '';	


if ( isset( $vromon['vromon_bannerImage_opt'] ) ) {
	$vromon_bannerImage_opt = $vromon['vromon_bannerImage_opt'];
}
if ( isset( $vromon['vromon_shop_text'] ) ) {
	$vromon_shop_text = $vromon['vromon_shop_text'];
}
	

?>
	<!-- START TITLE TOP -->
	<section class="section-content section-padding <?php if(!$vromon_bannerImage_opt == 1){ ?>bg_color_title<?php }else{ ?> bg_banner<?php } ?>" <?php if($vromon_bannerImage_opt == 1){ ?>style="background-image: url(<?php vromon_single_banner_url_option();?>);  background-size:cover; background-position: center center;"<?php } ?>>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php if(is_shop()){ ?>
						<h1 class="section-blog-title"><?php echo esc_html($vromon_shop_text);?></h1>
					<?php }else{ ?>
						<h1 class="section-blog-title"><?php the_title();?></h1>
					<?php } ?>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- END TITLE TOP -->	
<?php }


if ( ! function_exists( 'vromon_readmore_content' ) ) :
/**
 * Prints readmore content
 */
function vromon_readmore_content($word) {
	echo wp_trim_words( get_the_content(), $word, '' );
}
endif;