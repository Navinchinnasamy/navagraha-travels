<?php
 
add_action('init', 'vromon_kc_active', 99 );
 
function vromon_kc_active() {
 
	if (function_exists('kc_add_map')) 
	{ 
	    kc_add_map(
	        array(

	            'shortcode_importer' => array(
	                'name' => esc_html__('Shortcode Importer', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
                        'name' => 'enter_shortcode',
                        'label' => esc_html__( 'Enter Shortcode', 'vromon' ),
                        'type' => 'textarea',
                        'admin_label' => true,
						),	    	                             


	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map	 	    
		
		kc_add_map(
	        array(

	            'home_banner_area' => array(
	                'name' => esc_html__('Home Banner', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'upload_image',
							'label' => esc_html__( 'Background Image', 'vromon' ),
							'type' => 'attach_image',
							'admin_label' => true,
						),	                

						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'We make awesome tours',
						),	    	                  

						array(
						
							'name' => 'sec_content',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry\'s standard .',
						),	  						
						
						array(
							'name' => 'sec_btn_text',
							'label' => esc_html__( 'Button Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Find tour',
						
						),	 						
						
						array(
							'name' => 'sec_btn_link',
							'label' => esc_html__( 'Button Link', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '#special_package',
						
						),	 						
						

	                )
	            ),  
				

	        ) 
			
			
	    ); // End add map	 	
		
		kc_add_map(
	        array(

	            'home_banner_paralax_area' => array(
	                'name' => esc_html__('Home Paralax Banner', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'upload_image',
							'label' => esc_html__( 'Background Image', 'vromon' ),
							'type' => 'attach_image',
							'admin_label' => true,
						),	                

						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'We make awesome tours',
						),	    	                  

						array(
						
							'name' => 'sec_content',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry\'s standard .',
						),	  						
						
						array(
							'name' => 'sec_btn_text',
							'label' => esc_html__( 'Button Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Find tour',
						
						),	 						
						
						array(
							'name' => 'sec_btn_link',
							'label' => esc_html__( 'Button Link', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '#special_package',
						
						),	 						
						

	                )
	            ),  
				

	        ) 
			
			
	    ); // End add map	   	    
	
		
		kc_add_map(
	        array(

				'services_area' => array(
	                'name' => esc_html__('Services Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'vromon services',
						),	    						
						
						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'SubTitle', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),							
						
						array(
						
							'name' => 'number_of_post',
							'label' => esc_html__( 'Number Of Post', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '6',
						),	    	                  
	                

	                )
	            ), 

	        ) 
			
	    ); // End add map			
		
		kc_add_map(
	        array(

				'why_choice_area' => array(
	                'name' => esc_html__('Why Choice Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'sec_bg',
							'label' => esc_html__( 'Background Image', 'vromon' ),
							'type' => 'attach_image',
							'admin_label' => true,
						),	    	                  

						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'why choose us',
						),	  						
						
						array(
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Text', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),							
						
						array(
							'name' => 'number_of_post',
							'label' => esc_html__( 'Number of Post', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '3',
						),	 						
						

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'counter_area' => array(
	                'name' => esc_html__('Counter Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'counter_text',
							'label' => esc_html__( 'Counter Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Happy Customers',
						),	 	                 

						array(
						
							'name' => 'counter_number',
							'label' => esc_html__( 'Counter Number', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '32652',
						),	    	                  
	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'special_package_area' => array(
	                'name' => esc_html__('Special Package', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'special package',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section SubTitle', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),	
						
						
						array(
						
							'name' => 'sec_number_of_post',
							'label' => esc_html__( 'Number of Posts', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '6',
						),	 		

						array(
						
							'name' => 'sec_pac_styles',
							'label' => esc_html__( 'Styles', 'vromon' ),
							'type' => 'dropdown',
							'admin_label' => true,
							'options' => array(
								'sp_1' => esc_html__('Grids' , 'vromon'),
								'sp_2' => esc_html__('Slider' , 'vromon')
							),
							'value' => 'sp_1',
						),			

						array(
						
							'name' => 'sec_grid_columns',
							'label' => esc_html__( 'Grids Columns', 'vromon' ),
							'type' => 'dropdown',
							'admin_label' => true,
							'options' => array(
								'sg_1' => esc_html__('2 Columns' , 'vromon'),
								'sg_2' => esc_html__('3 Columns' , 'vromon')
							),
							'value' => 'sg_1',
						),	  						
						

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'tour_area' => array(
	                'name' => esc_html__('Tour Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Top deals',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),	  						
						
						array(
							'name' => 'sec_promotional_text',
							'label' => esc_html__( 'Promotional  Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Promotional Tour',
						),	 							
						
						array(
							'name' => 'sec_details_text',
							'label' => esc_html__( 'Tour Details Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'tour-details',
						),	 						
												
						array(
							'name' => 'number_of_post',
							'label' => esc_html__( 'Number', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '6',
						),	 						
						

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'related_tour_area' => array(
	                'name' => esc_html__('Related Tour', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	
						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Related tours',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),	  						
						
						array(
							'name' => 'sec_btn_text',
							'label' => esc_html__( 'Button Text', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'View details',
						),	 							
						
						array(
						
							'name' => 'sec_number_of_post',
							'label' => esc_html__( 'Number of Posts', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '6',
						),	 		

						array(
						
							'name' => 'sec_pac_styles',
							'label' => esc_html__( 'Styles', 'vromon' ),
							'type' => 'dropdown',
							'admin_label' => true,
							'options' => array(
								'sp_1' => esc_html__('Grids' , 'vromon'),
								'sp_2' => esc_html__('Slider' , 'vromon')
							),
							'value' => 'sp_1',
						),			

						array(
						
							'name' => 'sec_grid_columns',
							'label' => esc_html__( 'Grids Columns', 'vromon' ),
							'type' => 'dropdown',
							'admin_label' => true,
							'options' => array(
								'sg_1' => esc_html__('2 Columns' , 'vromon'),
								'sg_2' => esc_html__('3 Columns' , 'vromon')
							),
							'value' => 'sg_1',
						),							

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'gallery_area' => array(
	                'name' => esc_html__('Gallery Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Our Experts',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru<br> exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.',
						),	  						

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map	

		kc_add_map(
	        array(

				'blog_area' => array(
	                'name' => esc_html__('Blog Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Our Blog',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),					

						array(
						
							'name' => 'read_more_btn',
							'label' => esc_html__( 'Read More Button', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Read More',
						),	  							
						array(
						
							'name' => 'number_of_post',
							'label' => esc_html__( 'Number of Post', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => '3',
						),	  						

	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'testimonials_area' => array(
	                'name' => esc_html__('Testimonials Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
						array(
						
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'What our client say',
						),	    	                  

						array(
						
							'name' => 'sec_subtitle',
							'label' => esc_html__( 'Section Content', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
						),	  						
 												
	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'clients_area' => array(
	                'name' => esc_html__('Clients Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
						array(
						
							'name' => 'sec_bg_image',
							'label' => esc_html__( 'Background Image', 'vromon' ),
							'type' => 'attach_image',
							'admin_label' => true,
						),	    	                  


	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		
		kc_add_map(
	        array(

				'contact_us_area' => array(
	                'name' => esc_html__('Contact Us Area', 'vromon'),
	                'icon' => 'sl-rocket',
					'nested'		=> true,
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	   	                  	array(					
							'name' => 'sec_title',
							'label' => esc_html__( 'Title', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'Contact Us',
						),		   	                  

						array(					
							'name' => 'enter_shortcode',
							'label' => esc_html__( 'Enter Shortcode', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
						),	  
		
	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map		
		

		kc_add_map(
	        array(

				'contact_info_area' => array(
	                'name' => esc_html__('Child of Contact Us Area', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
						array(
						
							'name' => 'sec_icon',
							'label' => esc_html__( 'Icon', 'vromon' ),
							'type' => 'text',
							'admin_label' => true,
							'value' => 'fa fa-rocket',
						),	  	
						
						array(
						
							'name' => 'sec_text',
							'label' => esc_html__( 'Section Title', 'vromon' ),
							'type' => 'textarea',
							'admin_label' => true,
							'value' => '2369 Robinson Lane Jackson, OH 45640',
						),	  							
		
	                )
	            ),  // End of elemnt 

	        ) 
			
	    ); // End add map
		
		
		kc_add_map(
	        array(

	            'google_area' => array(
	                'name' => esc_html__('Google Map', 'vromon'),
	                'icon' => 'sl-rocket',
	                'category' => 'Vromon Shortcodes',
	                'params' => array(
	                
	                    array(
	                        'name' => 'sec_lati',
	                        'label' => esc_html__( 'Latittue', 'vromon' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '40.7127837',
						),	
						
	                    array(
	                        'name' => 'sec_longi',
	                        'label' => esc_html__( 'Longitude', 'vromon' ),
	                        'type' => 'text',
	                        'admin_label' => true,
							'value' => '-74.00594130000002',
						),	 	                   

						array(
	                        'name' => 'sec_api_key',
	                        'label' => esc_html__( 'API Key', 'vromon' ),
	                        'type' => 'text',
	                        'admin_label' => true,
	                        'value' => 'AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA',
						),	 		                    
								
						
	                )
	            ),  // End of elemnt kc_icon 

	        ) 
			
	    ); // End add map			

	} // End if

}  
 
