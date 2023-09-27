<?php 
function vromon_movers_custom_css(){
	global $vromon;
	
	if(!is_admin()) :
	?>
  
	<?php 
	
		$vromon_menu_text_color						 = '';
		$vromon_menu_text_hover_acive_color						 = '';
		$vromon_sticky_menu_bg_color						 = '';
		$vromon_sticky_menu_text_color						 = '';
		$vromon_sticky_menu_text_hover_acive_color						 = '';
		$vromon_banner_bg_color						 = '';
		$vromon_banner_text_color						 = '';
		$vromon_banner_inner_border_color						 = '';
		$vromon_banner_inner_bg_color						 = '';
		$vromon_footer_bg_color						 = '';
		$vromon_footer_text_color						 = '';
		$vromon_footer_link_color						 = '';
		$vromon_spinner_bg_color						 = '';
		$vromon_spinner_main_color						 = '';
		$vromon_spinner_border_color						 = '';
		$vromon_theme_color						 = '';
		$vromon_theme_hover_color						 = '';
		$vromon_css_editor						 = '';
		

		if ( isset( $vromon['vromon_menu_text_color'] ) ) {
			$vromon_menu_text_color = $vromon['vromon_menu_text_color'];
		}		
		if ( isset( $vromon['vromon_menu_text_hover_acive_color'] ) ) {
			$vromon_menu_text_hover_acive_color = $vromon['vromon_menu_text_hover_acive_color'];
		}			
		if ( isset( $vromon['vromon_sticky_menu_bg_color'] ) ) {
			$vromon_sticky_menu_bg_color = $vromon['vromon_sticky_menu_bg_color'];
		}			
		
		if ( isset( $vromon['vromon_sticky_menu_text_color'] ) ) {
			$vromon_sticky_menu_text_color = $vromon['vromon_sticky_menu_text_color'];
		}			
		if ( isset( $vromon['vromon_sticky_menu_text_hover_acive_color'] ) ) {
			$vromon_sticky_menu_text_hover_acive_color = $vromon['vromon_sticky_menu_text_hover_acive_color'];
		}			
		
		if ( isset( $vromon['vromon_banner_bg_color'] ) ) {
			$vromon_banner_bg_color = $vromon['vromon_banner_bg_color'];
		}	
		
		if ( isset( $vromon['vromon_banner_text_color'] ) ) {
			$vromon_banner_text_color = $vromon['vromon_banner_text_color'];
		}	
		
		if ( isset( $vromon['vromon_banner_inner_border_color'] ) ) {
			$vromon_banner_inner_border_color = $vromon['vromon_banner_inner_border_color'];
		}	

		if ( isset( $vromon['vromon_banner_inner_bg_color'] ) ) {
			$vromon_banner_inner_bg_color = $vromon['vromon_banner_inner_bg_color'];
		}	
	
		if ( isset( $vromon['vromon_footer_bg_color'] ) ) {
			$vromon_footer_bg_color = $vromon['vromon_footer_bg_color'];
		}			
		
		if ( isset( $vromon['vromon_footer_text_color'] ) ) {
			$vromon_footer_text_color = $vromon['vromon_footer_text_color'];
		}	
		
		if ( isset( $vromon['vromon_footer_link_color'] ) ) {
			$vromon_footer_link_color = $vromon['vromon_footer_link_color'];
		}			
		

		if ( isset( $vromon['vromon_spinner_bg_color'] ) ) {
			$vromon_spinner_bg_color = $vromon['vromon_spinner_bg_color'];
		}			
		
		if ( isset( $vromon['vromon_spinner_main_color'] ) ) {
			$vromon_spinner_main_color = $vromon['vromon_spinner_main_color'];
		}			
		
		if ( isset( $vromon['vromon_spinner_border_color'] ) ) {
			$vromon_spinner_border_color = $vromon['vromon_spinner_border_color'];
		}			
		
		if ( isset( $vromon['vromon_theme_color'] ) ) {
			$vromon_theme_color = $vromon['vromon_theme_color'];
		}	

		if ( isset( $vromon['vromon_theme_hover_color'] ) ) {
			$vromon_theme_hover_color = $vromon['vromon_theme_hover_color'];
		}	
		if ( isset( $vromon['vromon_css_editor'] ) ) {
			$vromon_css_editor = $vromon['vromon_css_editor'];
		}
	

	wp_enqueue_style( 'vromon-custom-css', get_template_directory_uri() . '/assets/css/custom-style.css' );
	
	//add custom css
	$vromon_custom_css = "

		.preloader {
			background: {$vromon_spinner_bg_color};
		}			
		
		
		.status-mes {
			border-top-color:  {$vromon_spinner_main_color};
			border-right-color: {$vromon_spinner_main_color};
			border-bottom-color: {$vromon_spinner_main_color};
			border-left-color: {$vromon_spinner_border_color};
		}			
				
		
		.navbar-light .navbar-nav > li a {
			color: {$vromon_menu_text_color};
		}		
		
		.navbar-light .navbar-nav > li a:hover {
			color: {$vromon_menu_text_hover_acive_color}!important;
		}		

		#navbarCollapse ul li:hover ul.sub-menu li a:hover {
			background-color: {$vromon_menu_text_hover_acive_color};
		}		
		
		.navbar-fixed {
			background: {$vromon_sticky_menu_bg_color};
		}		
		.navbar-light.navbar-fixed .navbar-nav > li a {
			color: {$vromon_sticky_menu_text_color};
		}	
		
		.navbar-light.navbar-fixed ul li:hover ul.sub-menu li a:hover {
			background-color: {$vromon_sticky_menu_text_hover_acive_color}!important;
		}			
		.navbar-light.navbar-fixed .navbar-nav > li a:hover,
		.navbar-light .navbar-nav li.active > a, 
		.navbar-light .navbar-nav > li.active, 
		.navbar-light .navbar-nav > li.open, 
		.navbar-light .navbar-nav .open > a{
			color: {$vromon_sticky_menu_text_hover_acive_color} !important;
		}		
				
		
		.footer{
			background: {$vromon_footer_bg_color};
		}		
		.footer p{
			color: {$vromon_footer_text_color};
		}			
		
		.footer .copyright a{
			color: {$vromon_footer_link_color};
		}		

		a,
		.service .icon,
		.single-choose i,
		.post-date i,
		.single_discount_dsc a,
		.testimonial .post,
		.contact_address ul li i,		
		.widget_categories ul > li::before, 
		.widget_archive ul > li::before,
		.blog-text a:hover,
		.meta_area .single_meta i,
		.entry-title a:hover,
		.widget a:hover{
			color: {$vromon_theme_color};
		}
		
		
		.btn-home-bg,
		.section-title span,
		.topcontrol,
		.package-hover,
		.package-name,
		.testimonial-content .testimonial-icon,
		.btn-contact-bg,
		.section-blog-title,
		.widget-title::after,
		.navigation.pagination span,
		.vromon_preview_post a, 
		.vromon_next_post a,
		#commentform #submit,
		.entry-content .btn.btn-default.btn-post-bg,
		.single-choose i,
		.blog-photo .p_date,
		#searchform .search_btn
		
		{
			background: {$vromon_theme_color};
			border-color: {$vromon_theme_color};
		}	
		
		
		#commentform #submit,
		.entry-content .btn.btn-default.btn-post-bg,
		.vromon_preview_post a, 
		.vromon_next_post a,
		.btn-contact-bg,
		.form-control:hover,
		.form-control:focus
		{
			border-color: {$vromon_theme_color}!important;
		}		
		.testimonial-content .testimonial-icon::before{
			border-bottom-color: {$vromon_theme_color};
		}			
		.owl-theme .owl-controls .owl-page span,
		.btn-contact-bg,
		.section-blog-title{
			background: {$vromon_theme_color}!important;
		}			
		
		
		.vromon_preview_post a:hover, 
		.vromon_preview_post a:focus, 
		.vromon_next_post a:hover, 
		.vromon_next_post a:focus,
		#commentform #submit:hover,
		#commentform #submit:focus,
		.entry-content .btn.btn-default.btn-post-bg:hover,
		.entry-content .btn.btn-default.btn-post-bg:focus{
			background: {$vromon_theme_hover_color}!important;
		}			
		
		.vromon_preview_post a:hover, 
		.vromon_preview_post a:focus, 
		.vromon_next_post a:hover, 
		.vromon_next_post a:focus,
		#commentform #submit:hover,
		#commentform #submit:focus,
		.entry-content .btn.btn-default.btn-post-bg:hover,
		.entry-content .btn.btn-default.btn-post-bg:focus{
			border-color: {$vromon_theme_hover_color}!important;
		}			

		.bg_color_title{
			background: {$vromon_banner_bg_color};
		}		
		
		.section-blog-title{
			color: {$vromon_banner_text_color};
			border-color: {$vromon_banner_inner_border_color};
			background: {$vromon_banner_inner_bg_color};
		}			
		
		
	";
	
	//Add the above custom CSS via wp_add_inline_style
	wp_add_inline_style( 'vromon-custom-css', $vromon_custom_css ); //Pass the variable into the main style sheet ID
	
	
  endif;
}

add_action( 'wp_enqueue_scripts', 'vromon_movers_custom_css'  ) ;