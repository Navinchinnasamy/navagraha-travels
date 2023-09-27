<?php
/**
 * vromon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vromon
 */

if ( ! function_exists( 'vromon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vromon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vromon, use a find and replace
		 * to change 'vromon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vromon', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'vromon_image_1200_800', 1200,800, true );
		add_image_size( 'vromon_image_1200_600', 1200,600, true );
		add_image_size( 'vromon_image_640_426', 640,426, true );
		add_image_size( 'vromon_image_840_430', 840,430, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'vromon' ),
		) );

		/*
		 * Set woocommerce support  
		 * 
		 */
		add_theme_support( 'woocommerce' );
	
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Post Types
		 */
		 
		add_theme_support( 'post-formats', array(
			'audio',
			'video',
		) );	
		
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vromon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		add_editor_style( array( 'assets/css/editor-style.css', vromon_google_fonts_url() ) );
	}
endif;
add_action( 'after_setup_theme', 'vromon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vromon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vromon_content_width', 640 );
}
add_action( 'after_setup_theme', 'vromon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vromon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vromon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vromon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vromon_widgets_init' );


/**
 * register google fonts
 */
function vromon_google_fonts_url() {
	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$open_sans = esc_html_x( 'on', 'Open Sans font: on or off', 'vromon' );

	/* Translators: If there are characters in your language that are not
	* supported by Montserrat, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	$montserrat = esc_html_x( 'on', 'Montserrat font: on or off', 'vromon' );
	
	if ( 'off' !== $open_sans || 'off' !== $montserrat ) {
	$font_families = array();
	 
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open+Sans:300i,400,400i,600,600i,700,700i';
	}
	 
	
	if ( 'off' !== $montserrat ) {
	$font_families[] = 'Montserrat:400,700';
	}
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );	
}

/**
 * Enqueue scripts and styles.
 */
function vromon_scripts() {
	
	global $vromon;
	
	$vromon_scroll_top_opt = '';
	
	if ( isset( $vromon['vromon_scroll_top_opt'] ) ) {
		$vromon_scroll_top_opt = $vromon['vromon_scroll_top_opt'];
	}	

	
	//Load Css Files
	wp_enqueue_style( 'vromon-google-fonts', vromon_google_fonts_url(), array(), null );
	wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome' , get_template_directory_uri(). '/assets/fonts/font-awesome.min.css');
	wp_enqueue_style('themify-icons' , get_template_directory_uri(). '/assets/fonts/themify-icons.css');
	wp_enqueue_style('owl-carousel' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.carousel.css');
	wp_enqueue_style('owl-theme' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.theme.css');
	wp_enqueue_style('flexslider' , get_template_directory_uri(). '/assets/css/flexslider.css');
	wp_enqueue_style('slicknav' , get_template_directory_uri(). '/assets/css/slicknav.css');
	wp_enqueue_style('aos' , get_template_directory_uri(). '/assets/css/aos.css');
	wp_enqueue_style('vromon-main-style' , get_template_directory_uri(). '/assets/css/style.css');
	wp_enqueue_style( 'vromon-style', get_stylesheet_uri() );

	// Load JS Files
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2' );	
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' ); 	
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' ); 
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '65498', true );
	wp_enqueue_script( 'jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), '65498', true );
	
	if(!$vromon_scroll_top_opt == 1){
		
	}else{
		wp_enqueue_script( 'scrolltopcontrol', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array('jquery'), '65498', true );
	
	}
	
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '65498', true );

	wp_enqueue_script( 'vromon-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '65498', true );	
   
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vromon_scripts' );




/*---------------------------------------------
 Initialising KingComposer shortcode editor
----------------------------------------------*/ 
if (class_exists('KingComposer')) {
 function vromon_requireKcExtend(){
  include_once( get_template_directory().'/kc_extend/extend_kc.php');  
 }
 add_action('init', 'vromon_requireKcExtend',2);
}


function vromon_main_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => 'navbar-nav',
		'fallback_cb'       => 'vromon_navwalker::fallback',
		
		)
	); 	
}

function vromon_wp_kses($val){
	return wp_kses($val, array(
	
	'p' => array(
		'class' =>array()
	),
	'span' => array(),
	'small' => array(),
	'div' => array(),
	'strong' => array(),
	'b' => array(),
	'br' => array(),
	'h1' => array(),
	'i' => array(
		'class' =>array()
	),	
	'ul' => array(
		'class' =>array()
	),	
	'ul' => array(
		'id' =>array()
	),	
	'li' => array(
		'class' =>array()
	),	
	'li' => array(
		'id' =>array()
	),
	'h2' => array(),
	'h3' => array(),
	'h4' => array(),
	'h5' => array(),
	'h6' => array(),
	'a'=> array('href' => array(),'target' => array()),
	'iframe'=> array('src' => array(),'height' => array(),'width' => array()),
	
	), '');
}

// modify search widget
function vromon_my_search_form( $form ) {
	$form = '
		
			
			<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url(home_url( '/' )) . '" >
				<div class="input-group">
					<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" class="form-control search_field" placeholder="' . esc_attr__('Search...' , 'vromon') .'">
					<span class="input-group-btn">
						<button class="btn btn-default search_btn" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
			
		
        ';
	return $form;
}
add_filter( 'get_search_form', 'vromon_my_search_form' );

// comment list modify

function vromon_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="single_comment">
		<div class="row">
      
      <?php if(get_avatar($comment)){ ?>
			<div class="col-md-2">
				<div class="comment_avatar">
					<?php echo get_avatar( $comment, 80 ); ?>
				</div>
			</div>
			<?php } ?>
      
			<div class="col-md-10">
				<div class="text-left comment_content">				
					<h5 class="comment_title"><?php comment_author_link() ?> <span><?php echo esc_html(' - '); echo esc_html(get_comment_date('F j, Y')); ?> <?php echo esc_html(get_comment_date('g:i')); ?></span></h5>
					 <div class="creply_link"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div>
					<?php if ($comment->comment_approved == '0') : ?>
					<p><em><?php esc_html_e('Your comment is awaiting modevromonn.','vromon'); ?></em></p>
					<?php endif; ?>
					 <div class="main_comment_text"><?php comment_text(); ?>	</div>						
				</div>
			</div>
		</div>
		
	</div>				
</li>


<?php } 

// comment box title change
add_filter( 'comment_form_defaults', 'vromon_remove_comment_form_allowed_tags' );
function vromon_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	$defaults['comment_notes_before'] = '';
	return $defaults;

}

function vromon_comment_reform ($arg) {

$arg['title_reply'] = esc_html__('Write your comment Here','vromon');
$arg['comment_field'] = '<div class="row"><div class="form-group col-md-12"><textarea id="comment" class="comment_field form-control" name="comment" cols="77" rows="3" placeholder="'. esc_html__("Write your Comment", "vromon").'" aria-required="true"></textarea></div></div>';


return $arg;

}
add_filter('comment_form_defaults','vromon_comment_reform');

// comment form modify

function vromon_modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req	   = get_option( 'require_name_email' );

	$fields['author'] = '<div class="row"><div class="form-group col-md-4"><input type="text" name="author" id="author" value="'. esc_attr( $commenter['comment_author'] ) .'" placeholder="'. esc_attr__("Your Name *", "vromon").'" size="22" tabindex="1"'. ( $req ? 'aria-required="true"' : '' ).' class="input-name form-control" /></div>';

	$fields['email'] = '<div class="form-group col-md-4"><input type="text" name="email" id="email" value="'. esc_attr( $commenter['comment_author_email'] ) .'" placeholder="'.esc_attr__("Your Email *", "vromon").'" size="22" tabindex="2"'. ( $req ? 'aria-required="true"' : '' ).' class="input-email form-control"  /></div>';
	
	$fields['url'] = '<div class="form-group col-md-4"><input type="text" name="url" id="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" placeholder="'. esc_attr__("Website", "vromon").'" size="22" tabindex="2"'. ( $req ? 'aria-required="false"' : '' ).' class="input-url form-control"  /></div></div>';

	return $fields;
}
add_filter('comment_form_default_fields','vromon_modify_comment_form_fields');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/navwalker.php';
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/required-plugin.php';
require get_template_directory() . '/inc/demo_install.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function vromon_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'menu-1') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','vromon_menu_classes',1,3);