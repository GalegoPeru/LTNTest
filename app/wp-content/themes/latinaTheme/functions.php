<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own twentysixteen_setup() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 */
	function twentysixteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'twentysixteen' );

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
		 * Enable support for custom logo.
		 *
		 *  @since Twenty Sixteen 1.2
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 240,
				'width'       => 240,
				'flex-height' => true,
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'twentysixteen' ),
				'social'  => __( 'Social Links Menu', 'twentysixteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				
				'video',
				'gallery',
				
			)
		);

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

		// Load regular editor styles into the new block-based editor.
		add_theme_support( 'editor-styles' );

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Dark Gray', 'twentysixteen' ),
					'slug'  => 'dark-gray',
					'color' => '#1a1a1a',
				),
				array(
					'name'  => __( 'Medium Gray', 'twentysixteen' ),
					'slug'  => 'medium-gray',
					'color' => '#686868',
				),
				array(
					'name'  => __( 'Light Gray', 'twentysixteen' ),
					'slug'  => 'light-gray',
					'color' => '#e5e5e5',
				),
				array(
					'name'  => __( 'White', 'twentysixteen' ),
					'slug'  => 'white',
					'color' => '#fff',
				),
				array(
					'name'  => __( 'Blue Gray', 'twentysixteen' ),
					'slug'  => 'blue-gray',
					'color' => '#4d545c',
				),
				array(
					'name'  => __( 'Bright Blue', 'twentysixteen' ),
					'slug'  => 'bright-blue',
					'color' => '#007acc',
				),
				array(
					'name'  => __( 'Light Blue', 'twentysixteen' ),
					'slug'  => 'light-blue',
					'color' => '#9adffd',
				),
				array(
					'name'  => __( 'Dark Brown', 'twentysixteen' ),
					'slug'  => 'dark-brown',
					'color' => '#402b30',
				),
				array(
					'name'  => __( 'Medium Brown', 'twentysixteen' ),
					'slug'  => 'medium-brown',
					'color' => '#774e24',
				),
				array(
					'name'  => __( 'Dark Red', 'twentysixteen' ),
					'slug'  => 'dark-red',
					'color' => '#640c1f',
				),
				array(
					'name'  => __( 'Bright Red', 'twentysixteen' ),
					'slug'  => 'bright-red',
					'color' => '#ff675f',
				),
				array(
					'name'  => __( 'Yellow', 'twentysixteen' ),
					'slug'  => 'yellow',
					'color' => '#ffef8e',
				),
			)
		);

		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Sixteen 1.6
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentysixteen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentysixteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentysixteen_resource_hints', 10, 2 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
/*
function twentysixteen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'twentysixteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );
*/
if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
	/**
	 * Register Google fonts for Twenty Sixteen.
	 *
	 * Create your own twentysixteen_fonts_url() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function twentysixteen_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
			$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
		}

		/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
			$fonts[] = 'Montserrat:400,700';
		}

		/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
			$fonts[] = 'Inconsolata:400';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg(
				array(
					'family' => urlencode( implode( '|', $fonts ) ),
					'subset' => urlencode( $subsets ),
				),
				'https://fonts.googleapis.com/css'
			);
		}

		return $fonts_url;
	}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Theme block stylesheet.
	wp_enqueue_style( 'twentysixteen-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'twentysixteen-style' ), '20181230' );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20181230', true );

	wp_localize_script(
		'twentysixteen-script',
		'screenReaderText',
		array(
			'expand'   => __( 'expand child menu', 'twentysixteen' ),
			'collapse' => __( 'collapse child menu', 'twentysixteen' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Sixteen 1.6
 */
function twentysixteen_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'twentysixteen-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20181230' );
	// Add custom fonts.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'twentysixteen_block_editor_styles' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
	} elseif ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array(
		'red'   => $r,
		'green' => $g,
		'blue'  => $b,
	);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 840 <= $width ) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ( 'page' === get_post_type() ) {
		if ( 840 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if ( 840 > $width && 600 <= $width ) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif ( 600 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


function code_short_list($valor){
	return substr($valor,0,61)."..";


}

function code_short_text($valor,$long){
	mb_internal_encoding("UTF-8");
	return mb_substr($valor,0,$long)."..";
}

function print_destacada_portada($destacada,$id){

$value = get_field($destacada,$id);
	


$sumilla= get_field("sumilla",$value->ID);
$url = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
$link=get_permalink($value->ID);
$title=$value->post_title;
$listado=get_the_category($value->ID);

foreach($listado as $key => $value) {

			if($value->category_parent==0){
			$categoria_parent=$value;
		}
}
	

			$contenido='<article class="item-news item-type-1">'.
				'<a  href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'.get_the_date('j F, Y',$value->ID).'</time>'.
					'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
					'<div class="sumary-news">'.
					'<p><a href="'.$link.'">'.$sumilla.'</a></p></div>'.
					'<span class="category-news cat-'.$categoria_parent->slug.'"><a href="'.$link.'">'.$categoria_parent->name.'</span>'.
					
				'</div>'.
			'</article></a>';
			

	return $contenido;
}

function print_destacada_portada_small($destacada,$id){
$value = get_field($destacada,$id);
$sumilla= get_field("sumilla",$value->ID);
$url = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
$link=get_permalink($value->ID);
$title=$value->post_title;
$listado=get_the_category($value->ID);

foreach($listado as $key => $value) {

			if($value->category_parent==0){
			$categoria_parent=$value;
		}
}

			$contenido='<article class="item-news item-type-2">'.
				'<a href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'.get_the_date('j F, Y',$value->ID).'</time>'.
					'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
					'<span class="category-news cat-'.$categoria_parent->slug.'"><a href="">'.$categoria_parent->name.'</a></span>'.
					
				'</div>'.
			'</article>';

			
			

	return $contenido;
}
/*
function categoriaParent2($id_post){
	
	$category = get_the_category($id_post);
 
	$catid = $category[0]->cat_ID;
 


    while ($catid) {
        $cat = get_category($catid); // get the object for the catid
        $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
          // the while loop will continue whilst there is a $catid
          // when there is no longer a parent $catid will be NULL so we can assign our $catParent
        $catParent = $cat;
    }
    return $catParent;



}
*/
function categoriaParent(){

	$category = get_the_category($value->ID);
 
	$catid = $category[0]->cat_ID;
 


    while ($catid) {
        $cat = get_category($catid); // get the object for the catid
        $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
          // the while loop will continue whilst there is a $catid
          // when there is no longer a parent $catid will be NULL so we can assign our $catParent
        $catParent = $cat;
    }
    return $catParent;



}


function data_categoria(){
	$category = get_queried_object();
	return $category;
}

function listado_menu(){
	$list=wp_get_nav_menu_items("Principal");
	$temp='';
	foreach ($list as $key => $value) {

		//echo $value;
		$item='<li><a href="'.$value->url.'">'.$value->title.'</a></li>';
		$temp=$temp.$item;
	}
	echo $temp;
	//return $temp;
}

function title_tipo(){
	$tipo_title="foto";
	if(get_post_format()){
		$tipo_title=get_post_format();
	}

	return strtoupper($tipo_title);
}

function listado_tabs(){
		$items="";
	// check if the repeater field has rows of data
if( have_rows('listado_categorias',7621) ):

 	// loop through the rows of data
    while ( have_rows('listado_categorias',7621) ) : the_row();

        // display a sub field value
        $contenido=get_sub_field('nombre_a_mostrar');
        $items=$items."<li  data-id='".get_sub_field('categoria')."'>".get_sub_field('nombre_a_mostrar')."</li>";

    endwhile;

else :

    // no rows found

endif;

return $items;
}

//Insertar Javascript js y enviar ruta admin-ajax.php
add_action('wp_enqueue_scripts', 'dcms_insertar_js');

function dcms_insertar_js(){

	wp_register_script('dcms_miscript', get_template_directory_uri(). '/js/cargadatos.js', array('jquery'), '2', true );
	wp_enqueue_script('dcms_miscript');

	wp_localize_script('dcms_miscript','dcms_vars',['ajaxurl'=>admin_url('admin-ajax.php')]);
}

add_action('wp_ajax_nopriv_dcms_ajax_readmore','dcms_enviar_contenido');
add_action('wp_ajax_dcms_ajax_readmore','dcms_enviar_contenido');

function dcms_enviar_contenido()
{
	$id_category=$_POST["id_category"];
	$temp='';
	$custom_query = new WP_Query('posts_per_page=7&cat='.$id_category); 
	$ind=0;
		while($custom_query->have_posts()) : $custom_query->the_post();
			$path=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$_cat=categoriaParent();
			if($ind==0 || $ind==1):

			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h2 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h2>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;
				if($ind==1 ):

					$banner='<div class="publicidad-320x250">'.
								'<div class="banner_large banner_pc" id="Middle4">'.
										    '<script>googletag.cmd.push(function() { googletag.display("Middle4"); });'.
										    '</script>'.
										'</div>'.
								'</div>';
								$temp=$temp.$banner;
				endif;
			elseif ($ind==2 || $ind==3) :
			$item='<article class="item-news item-type-4">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h2 class="title-news"><a href="'.get_home_url().'/'.$_cat->slug.'">'. code_short_text(get_the_title(),80) .'</a></h2>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==4) :
			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h2 class="title-news"><a href="'.get_home_url().'/'.$_cat->slug.'">'. code_short_text(get_the_title(),80) .'</a></h2>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==5 || $ind==6) :
			$item='<article class="item-news item-type-5">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h2 class="title-news"><a href="'.get_home_url().'/'.$_cat->slug.'">'. code_short_text(get_the_title(),80) .'</a></h2>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			endif;


			$ind++;
		endwhile; 
	wp_reset_postdata();

	
	echo $temp;
	wp_die();
	
}


function social_link(){
	 $box='<div class="box-redes">'.
					'<a href=""><img src="'.get_template_directory_uri().'/img/iconos/fbwhite.png" alt=""></a>'.
					'<a href=""><img src="'.get_template_directory_uri().'/img/iconos/twwhite.png" alt=""></a>'.
					'<a href=""><img src="'.get_template_directory_uri().'/img/iconos/whatswhite.png" alt=""></a>'.
				'</div>';


				return $box;
}

function get_destacada_seccion($categoria){
	$seccion="";
	switch ($categoria) {
		
		case 'noticias':
			$seccion="noticias_destacada";
			# code...
			break;
		case 'entretenimiento':
			# code...
			$seccion="entretenimiento_destacada";	
			break;

		case 'deportes':
			$seccion="deporte_destacada";
			# code...
			break;

		case 'tendencias':
			$seccion="tendencia_destacada";
			# code...
			break;
		case 'latina-play':
			$seccion="latina_play_destacada";
			# code...
			break;
		default:
			$seccion=false;
			# code...
			break;
	}
	return $seccion;
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opciones Generales',
		'menu_title'	=> 'Opciones',
		'menu_slug' 	=> 'opciones-generales',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Destacadas',
		'menu_title'	=> 'Destacadas',
		'menu_slug' 	=> 'destacadas',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Noticias',
		'menu_title'	=> 'Noticias',
		'parent_slug'	=> 'destacadas'
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Deporte',
		'menu_title'	=> 'Deporte',
		'parent_slug'	=> 'destacadas'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tendencias',
		'menu_title'	=> 'Tendencias',
		'parent_slug'	=> 'destacadas',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Entretenimiento',
		'menu_title'	=> 'Entretenimiento',
		'parent_slug'	=> 'destacadas',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Latina Play',
		'menu_title'	=> 'Latina Play',
		'parent_slug'	=> 'destacadas',
	));
	
}



function featuredtoRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
$content = '' . get_the_post_thumbnail( $post->ID, 'full', array( 'style' => 'float:left; margin:0 15px 15px 0;' ) ) . '' . $content;
}
return $content;
}

add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

