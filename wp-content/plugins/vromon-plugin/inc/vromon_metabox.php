<?php


add_action( 'cmb2_init', 'vromon_metabox_options' );

function vromon_metabox_options(){
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_vromon_';


	// Page Options	

	$cmb2_page_opt = new_cmb2_box( array(
		'id'           => $prefix . 'page_option',
		'title'        => esc_html__( 'Page Options', 'vromon' ),
		'object_types' => array( 'page'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	if (class_exists('RevSlider')) {
		global $wpdb;
		$rs_table_name = $wpdb->prefix . "revslider_sliders";
		$rs = $wpdb->get_results( "SELECT id, title, alias FROM $rs_table_name ORDER BY id ASC LIMIT 999" );
		$revsliders = array();
		if ($rs) {
			foreach ( $rs as $slider ) {
				$revsliders[$slider->alias] = $slider->alias;
			}
		} else {
			$revsliders["No sliders found"] = 'No Alias found';
		}
		$cmb2_page_opt->add_field( array(
		    'name'             =>  esc_html__('Rev Slider Alias','vromon' ), 
		    'id'               => $prefix.'rev_slider_alias',
		    'type'             => 'select',
		    'options'          => $revsliders,
		    'default'          => '',
		    'desc'         	   => esc_html__( 'Select any One, Which One You want to display','vromon' ),
			'show_option_none' => true,
		) );
	}	
	
	$cmb2_post_1_options = new_cmb2_box( array(
		'id'           => $prefix . 'p1banner_option',
		'title'        => esc_html__( 'Upload Banner Image', 'vromon' ),
		'object_types' => array( 'page' , 'post', 'portfolios', 'product'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_post_1_options->add_field( array(
	    'id'               => $prefix .'upload_banner_image',
	    'desc'             => esc_html__( 'Please upload banner image here ','vromon' ),
		 'type'             => 'file',
	) );	
	
	//Post Options	
	$cmb2_post_options = new_cmb2_box( array(
		'id'           => $prefix . 'posts_option',
		'title'        => esc_html__( 'Post Options', 'vromon' ),
		'object_types' => array( 'post'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Audio / Video Post Embed Code ' , 'vromon'),
	    'id'               => $prefix .'vid_post_title',
	    'type'    => 'title',
	) );		
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Embed Code' , 'vromon'),
	    'id'               => $prefix .'embed_code',
		'desc'    => esc_html__('enter embed code here' , 'vromon'),
	    'type'    => 'textarea_code',
	) );		
	
	$cmb2_service = new_cmb2_box( array(
		'id'           => $prefix . 'service_options',
		'title'        => esc_html__( 'Service Info', 'vromon' ),
		'object_types' => array( 'service'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_service->add_field( array(
	    'name'             => esc_html__('Icon' , 'vromon'),
	    'id'               => $prefix .'service_icon',
	    'desc'             => esc_html__( 'write icon here','vromon' ),
		'type'             => 'text',
		'default'    => 'fa fa-bed',
	) );		
	
	$cmb2_why_choice = new_cmb2_box( array(
		'id'           => $prefix . 'why_choice_options',
		'title'        => esc_html__( 'Why Choice Us Info', 'vromon' ),
		'object_types' => array( 'why_choice_us'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_why_choice->add_field( array(
	    'name'             => esc_html__('Icon' , 'vromon'),
	    'id'               => $prefix .'why_choice_icon',
	    'desc'             => esc_html__( 'write icon here','vromon' ),
		'type'             => 'text',
		'default'    => 'fa fa-star',
	) );	
	
	$cmb2_special_package = new_cmb2_box( array(
		'id'           => $prefix . 'special_package_options',
		'title'        => esc_html__( 'Special Package Info', 'vromon' ),
		'object_types' => array( 'special_package'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_special_package->add_field( array(
	    'name'             => esc_html__('Price' , 'vromon'),
	    'id'               => $prefix .'spe_package_price',
	    'desc'             => esc_html__( 'write price here','vromon' ),
		'type'             => 'text',
		'default'    => 'Starting from $236',
	) );		
	
	$cmb2_special_package->add_field( array(
	    'name'             => esc_html__('Period' , 'vromon'),
	    'id'               => $prefix .'spe_package_period',
	    'desc'             => esc_html__( 'write period here','vromon' ),
		'type'             => 'text',
		'default'    => '5 days 4 night',
	) );	
	
	$cmb2_special_package->add_field( array(
	    'name'             => esc_html__('Rating' , 'vromon'),
	    'id'               => $prefix .'spe_rating',
	    'desc'             => esc_html__( 'select rating here','vromon' ),
		'type'             => 'select',
		'options'    => array(
			'1' =>  esc_html__('Rating One' , 'vromon'),
			'2' =>  esc_html__('Rating Two' , 'vromon'),
			'3' =>  esc_html__('Rating Three' , 'vromon'),
			'4' =>  esc_html__('Rating Four' , 'vromon'),
			'5' =>  esc_html__('Rating Five' , 'vromon')
		),
	) );	
	
	$cmb2_tour_opt = new_cmb2_box( array(
		'id'           => $prefix . 'tour_options',
		'title'        => esc_html__( 'Tour Info', 'vromon' ),
		'object_types' => array( 'tour'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Top Deal' , 'vromon'),
	    'id'               => $prefix .'top_deal',
	    'desc'             => esc_html__( 'choice check/uncheck','vromon' ),
		'type'             => 'checkbox',
		'default'    => '0',
	) );	

	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Promotional Text' , 'vromon'),
	    'id'               => $prefix .'tour_promo_text',
	    'desc'             => esc_html__( 'enter text here','vromon' ),
		'type'             => 'text',
		'default'    => 'Promotional Tour',
	) );	
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Regular Price' , 'vromon'),
	    'id'               => $prefix .'tour_period',
	    'desc'             => esc_html__( 'enter text here','vromon' ),
		'type'             => 'text',
		'default'    => '5 days 4 night',
	) );		
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Regular Price' , 'vromon'),
	    'id'               => $prefix .'tour_regular_price',
	    'desc'             => esc_html__( 'Regular Price','vromon' ),
		'type'             => 'text',
		'default'    => '$650',
	) );		
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Sale Price' , 'vromon'),
	    'id'               => $prefix .'tour_sale_price',
	    'desc'             => esc_html__( 'Sale Price','vromon' ),
		'type'             => 'text',
		'default'    => '$450',
	) );	
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Rating' , 'vromon'),
	    'id'               => $prefix .'tour_rating',
	    'desc'             => esc_html__( 'select rating here','vromon' ),
		'type'             => 'select',
		'options'    => array(
			'1' =>  esc_html__('Rating One' , 'vromon'),
			'2' =>  esc_html__('Rating Two' , 'vromon'),
			'3' =>  esc_html__('Rating Three' , 'vromon'),
			'4' =>  esc_html__('Rating Four' , 'vromon'),
			'5' =>  esc_html__('Rating Five' , 'vromon')
		),
	) );	

	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Deals & Discount Options' , 'vromon'),
	    'id'               => $prefix .'tour_deal_discount_opts',
	    'desc'             => esc_html__( 'check/uncheck here','vromon' ),
		'type'             => 'radio',
		'options'          => array(
			'1' => esc_html__('Show'),
			'2' => esc_html__('Hide')
		),
		'default'          => '1',
		
	) );
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Deals & Discount Title' , 'vromon'),
	    'id'               => $prefix .'tour_deal_discount_title',
	    'desc'             => esc_html__( 'enter write text here','vromon' ),
		'type'             => 'text',
		'default'    => 'Deals & discount',
	) );	
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Deals & Discount SubTitle' , 'vromon'),
	    'id'               => $prefix .'tour_deal_discount_subtitle',
	    'desc'             => esc_html__( 'enter write text here','vromon' ),
		'type'             => 'textarea_code',
		'default'    => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
	) );	
	

	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Google Map' , 'vromon'),
	    'id'               => $prefix .'tour_map_opts',
	    'desc'             => esc_html__( 'check/uncheck here','vromon' ),
		'type'             => 'textarea_code',
		'default'          => '',
		
	) );
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Zoom' , 'vromon'),
	    'id'               => $prefix .'tour_sec_zoom',
	    'desc'             => esc_html__( 'Enter Zoom Number here','vromon' ),
		'type'             => 'text',
		'default'    => '15',
	) );		
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Latitude' , 'vromon'),
	    'id'               => $prefix .'tour_sec_lati',
	    'desc'             => esc_html__( 'Enter Latitude here','vromon' ),
		'type'             => 'text',
		'default'    => '40.7127837',
	) );	
	
	$cmb2_tour_opt->add_field( array(
	    'name'             => esc_html__('Longitude' , 'vromon'),
	    'id'               => $prefix .'tour_sec_longi',
	    'desc'             => esc_html__( 'Enter Longitude','vromon' ),
		'type'             => 'text',
		'default'    => '-74.00594130000002',
	) );	
	
	$cmb2_testimonials_opt = new_cmb2_box( array(
		'id'           => $prefix . 'testimonials_options',
		'title'        => esc_html__( 'Testimonials Info', 'vromon' ),
		'object_types' => array( 'testimonials'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_testimonials_opt->add_field( array(
	    'name'             => esc_html__('Designation' , 'vromon'),
	    'id'               => $prefix .'testi_designation',
	    'desc'             => esc_html__( 'write designation here','vromon' ),
		'type'             => 'text',
		'default'    => 'Web Designer',
	) );	

	$cmb2_clients_opt = new_cmb2_box( array(
		'id'           => $prefix . 'clients_options',
		'title'        => esc_html__( 'Clients Info', 'vromon' ),
		'object_types' => array( 'clients'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	
	$cmb2_clients_opt->add_field( array(
	    'name'             => esc_html__('Client Url' , 'vromon'),
	    'id'               => $prefix .'client_website',
	    'desc'             => esc_html__( 'enter website url here','vromon' ),
		'type'             => 'text',
		'default'    => '#',
	) );	

	
}