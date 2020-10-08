<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Setup Theme.
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
function genesis_sample_localization_setup(){
	load_child_theme_textdomain( 'genesis-sample', get_stylesheet_directory() . '/languages' );
}

// Add the helper functions.
include_once( get_stylesheet_directory() . '/lib/helper-functions.php' );

// Add Image upload and Color select to WordPress Theme Customizer.
require_once( get_stylesheet_directory() . '/lib/customize.php' );

// Include Customizer CSS.
include_once( get_stylesheet_directory() . '/lib/output.php' );

// Add WooCommerce support.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php' );

// Add the required WooCommerce styles and Customizer CSS.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php' );

// Add the Genesis Connect WooCommerce notice.
include_once( get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php' );

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Genesis Sample' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.3.0' );

// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
function genesis_sample_enqueue_scripts_styles() {

	wp_enqueue_style( 'genesis-sample-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 'genesis-sample-responsive-menu', get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'genesis-sample-responsive-menu',
		'genesis_responsive_menu',
		genesis_sample_responsive_menu_settings()
	);

}

// Define our responsive menu settings.
function genesis_sample_responsive_menu_settings() {

	$settings = array(
		'mainMenu'          => __( 'Menu', 'genesis-sample' ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', 'genesis-sample' ),
		'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'       => array(
			'combine' => array(
				'.nav-primary',
				'.nav-header',
			),
			'others'  => array(),
		),
	);

	return $settings;

}

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add Accessibility support.
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for custom header.
add_theme_support( 'custom-header', array(
	'width'           => 600,
	'height'          => 160,
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'flex-height'     => true,
) );

// Add support for custom background.
add_theme_support( 'custom-background' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

// Add Image Sizes.
add_image_size( 'featured-image', 720, 400, TRUE );

// Rename primary and secondary navigation menus.
add_theme_support( 'genesis-menus', array( 'primary' => __( 'After Header Menu', 'genesis-sample' ), 'secondary' => __( 'Footer Menu', 'genesis-sample' ) ) );

// Reposition the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

// Modify size of the Gravatar in the author box.
add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
function genesis_sample_author_box_gravatar( $size ) {
	return 90;
}

// Modify size of the Gravatar in the entry comments.
add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;

	return $args;

}



remove_action('wp_head', 'wp_generator');


add_filter('ampforwp_modify_author_name','prefix');
  function prefix($author_name ){
	  $author_name = 'Redacción Latina';
	  return $author_name ;
  }

function canoncail_amp_custom(){
	echo '<link rel="canonical" href="'.get_permalink().'" />'; 
}
  add_action("amp_meta","canoncail_amp_custom");

  
function code_short_list($valor){
	//return substr($valor,0,61)."..";
return $valor;

}

function code_short_text($valor,$long){
	mb_internal_encoding("UTF-8");
	//return mb_substr($valor,0,$long)."..";
	return $valor;
}

function print_destacada_portada($destacada,$id){

$value = get_field($destacada,$id);
	

$id_post=$value->ID;
$sumilla= get_field("sumilla",$value->ID);
$url = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
$link=get_permalink($value->ID);
$title=$value->post_title;
$listado=get_the_category($value->ID);

$padre_categoria="";
foreach($listado as $key => $value) {

			if($value->category_parent==0){
			//$categoria_parent=$value;
			//$categoria_parent_=$value;
			$padre_categoria=$value->term_id;
		}
		else{
			$padre_categoria=$value->category_parent;
		}



}

$padre=get_category($padre_categoria);
			$contenido='<article class="item-news item-type-1">'.
				'<a  href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
				'<div class="detail-news">'.
				
					'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
					'<div class="sumary-news">'.
					'<p><a href="'.$link.'">'.$sumilla.'</a></p></div>'.
					'<div class="lyt-fecha-categoria">'.
					'<span class="category-news cat-'.$padre->slug.'"><a href="'.$link.'">'.$padre->name.'</span>'.
					'<time class="date-news">'.get_the_date('j F, Y',$id_post).'</time>'.
					'</div>'.
				'</div>'.
			'</article></a>';
			

	return $contenido;
}


function print_destacada_portada_seccion($ind,$categoria){
  
                            
	$args = array(
		'post_type' => 'post',
		'posts_per_page'=>1,
		/*'tag'=>"destacado" ,*/
		"category_name"=>$categoria
	);


	// The Query
	$the_query = new WP_Query($args);
	
	// The Loop
	if ( $the_query->have_posts() ) {
	   
		while ( $the_query->have_posts() ) {

			$the_query->the_post();

			$idvalue=get_the_ID(); 


			$sumilla= get_field("sumilla",$idvalue);
			$url = wp_get_attachment_url( get_post_thumbnail_id($idvalue) );
			$link=get_permalink($idvalue);
			$title=get_the_title();;
			$listado=get_the_category($idvalue);

			$padre_categoria="";
			foreach($listado as $key => $value) {

						if($value->category_parent==0){
						//$categoria_parent=$value;
						//$categoria_parent_=$value;
						$padre_categoria=$value->term_id;
					}
					else{
						$padre_categoria=$value->category_parent;
					}



			}

			$padre=get_category($padre_categoria);
				
			$contenido='<article class="item-news item-type-1">'.
			'<a  href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
			'<div class="detail-news">'.
			
				'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
				'<div class="sumary-news">'.
				'<p><a href="'.$link.'">'.$sumilla.'</a></p></div>'.
				'<div class="lyt-fecha-categoria">'.
				'<span class="category-news cat-'.$padre->slug.'"><a href="'.$link.'">'.$padre->name.'</span>'.
				'<time class="date-news">'.get_the_date('j F, Y',$value->ID).'</time>'.
				'</div>'.
			'</div>'.
		'</article></a>';
		



		
		  }                       
		} else {
			// no posts found
		
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		
		return $contenido;

}


function print_destacada_portada_small_seccion($ind,$categoria){
	$args = array(
		'post_type' => 'post',
		'posts_per_page'=>$ind,
		/*'tag'=>"destacado" ,*/
		"category_name"=>$categoria
	);


	// The Query
	$the_query = new WP_Query($args);
	
	// The Loop
	if ( $the_query->have_posts() ) {
	   
		while ( $the_query->have_posts() ) {

			$the_query->the_post();

			$idvalue=get_the_ID(); 


			$sumilla= get_field("sumilla",$idvalue);
			$url = wp_get_attachment_url( get_post_thumbnail_id($idvalue) );
			$link=get_permalink($idvalue);
			$title=get_the_title();;
			$listado=get_the_category($idvalue);

			$padre_categoria="";
			foreach($listado as $key => $value) {

						if($value->category_parent==0){
						//$categoria_parent=$value;
						//$categoria_parent_=$value;
						$padre_categoria=$value->term_id;
					}
					else{
						$padre_categoria=$value->category_parent;
					}



			}

			$padre=get_category($padre_categoria);
				
			$contenido='<article class="item-news item-type-2">'.
			'<a href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
			'<div class="detail-news">'.
				'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
				'<div  class="lyt-fecha-categoria">'.
				'<span class="category-news cat-'.$padre->slug.'"><a href="">'.$padre->name.'</a></span>'.
				'<time class="date-news">'.get_the_date('j F, Y',$value->ID).'</time>'.
				'</div>'.
			'</div>'.
		'</article>';
		



		
		  }                       
		} else {
			// no posts found
		
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		
		return $contenido;
}


function print_destacada_portada_small($destacada,$id){
$value = get_field($destacada,$id);
$sumilla= get_field("sumilla",$value->ID);
$id_post=$value->ID;
$url = wp_get_attachment_url( get_post_thumbnail_id($value->ID) );
$link=get_permalink($value->ID);
$title=$value->post_title;
$listado=get_the_category($value->ID);



/*foreach($listado as $key => $value) {

			if($value->category_parent==0){
			$categoria_parent=$value;
		}
}*/
$padre_categoria="";
foreach($listado as $key => $value) {
			if($value->category_parent==0){
			$padre_categoria=$value->term_id;
		}
		else{
			$padre_categoria=$value->category_parent;
		}
}

$padre=get_category($padre_categoria);


			$contenido='<article class="item-news item-type-2">'.
				'<a href="'.$link.'"><img class="pic-news" src="'.$url.'"></a>'.
				'<div class="detail-news">'.
					'<h2 class="title-news"><a href="'.$link.'">'.$title.'</a></h2>'.
					'<div  class="lyt-fecha-categoria">'.
					'<span class="category-news cat-'.$padre->slug.'"><a href="">'.$padre->name.'</a></span>'.
					'<time class="date-news">'.get_the_date('j F, Y',$id_post).'</time>'.
					'</div>'.
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
        $items=$items."<li  data-id='".get_sub_field('categoria')."'><h2>".get_sub_field('nombre_a_mostrar')."</h2></li>";

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
	$custom_query = new WP_Query('posts_per_page=3&cat='.$id_category); 
	$ind=0;
		while($custom_query->have_posts()) : $custom_query->the_post();
			$path=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$_cat=categoriaParent();
			if($ind==0 || $ind==1):

			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
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
			/*$item='<article class="item-news item-type-4">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';*/
			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==4) :
			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==5 || $ind==6) :
			$item='<article class="item-news item-type-5">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
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

function nuevo_bloques($id_categoria){

	$id_category=$id_categoria;
	$temp='';
	$custom_query = new WP_Query('posts_per_page=3&cat='.$id_category); 
	$ind=0;
		while($custom_query->have_posts()) : $custom_query->the_post();
			$path=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$_cat=categoriaParent();
			if($ind==0 || $ind==1):

			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;
				if($ind==1 ):

					$banner='<div class="publicidad-320x250">'.
								'<div class="banner_large banner_pc" id="Middle4">'.
								'<img src="https://wordpress-150511-986519.cloudwaysapps.com/wp-content/themes/genesis-latina/img/banner/Banner1_300x250.jpg">'.
										    '<script>googletag.cmd.push(function() { googletag.display("Middle4"); });'.
										    '</script>'.
										'</div>'.
								'</div>';
								$temp=$temp.$banner;
				endif;
			elseif ($ind==2 || $ind==3) :
			/*$item='<article class="item-news item-type-4">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';*/
			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==4) :
			$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			elseif ($ind==5 || $ind==6) :
			$item='<article class="item-news item-type-5">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';
			$temp=$temp.$item;

			endif;


			$ind++;
		endwhile; 
	wp_reset_postdata();
		echo $temp;
}




add_action('wp_ajax_nopriv_dcms_ajax_load','load_favoritos');
add_action('wp_ajax_dcms_ajax_load','load_favoritos');
function load_favoritos(){
	$slug_category=$_POST["slug_cat"];


	$temp='';
	
	$custom_query = new WP_Query('posts_per_page=6&category_name='.$slug_category); 

	while($custom_query->have_posts()) : $custom_query->the_post();
	$path=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$_cat=categoriaParent();
		$item='<article class="item-news item-type-3">'. 
				'<a href="'.get_permalink().'"><img class="pic-news" src="'.$path.'"></a>'.
				'<div class="detail-news">'.
					'<time class="date-news">'. get_the_date('j F, Y') .'</time>'.
					'<h3 class="title-news"><a href="'.get_permalink().'">'. code_short_text(get_the_title(),80) .'</a></h3>'.
					
					'<span class="category-news cat-'.$_cat->category_nicename.' "><a href="'.get_home_url().'/'.$_cat->slug.'">' . $_cat->cat_name .'</a></span>'.
					
				'</div>'.
			'</article>';

		$temp=$temp.$item;

	
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
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Latina Play',
		'menu_title'	=> 'Latina Play',
		'parent_slug'	=> 'destacadas',
	));*/
	
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Latina Play',
		'menu_title'	=> 'Latina Play',
		'menu_slug' 	=> 'opciones-latinaplay',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
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


function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');




/*
add_action( 'rest_api_init', function () {
  
    $object_type = 'post';
	$meta_args = array( // Validate and sanitize the meta value.
		// Note: currently (4.7) one of 'string', 'boolean', 'integer',
		// 'number' must be used as 'type'. The default is 'string'.
		'type'=> 'string',
		// Shown in the schema for the meta key.
		'description'=> 'Datos ACF',
		// Return a single value of the type.
		'single'=> true,
		// Show in the WP REST API response. Default: false.
		'show_in_rest'=> true
	);  
register_meta( $object_type,'codigo_video',$meta_args);
register_meta( $object_type,'sumillla',$meta_args);


} );
*/


add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post'),
        'url_imagen',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

function get_rest_featured_image( $object, $field_name, $request ) {

    if( $object['featured_media'] ){
      $img = wp_get_attachment_image_src( $object['featured_media'], 'full' );
      return $img[0];
    }
    return false;
}



function getTemplateSubcategory($id_categoria){
	if($id_categoria==44){
		echo "pertenece a latina play";
	}
	

}






function loadcustomajax(){
	wp_enqueue_script("customajax",get_theme_file_uri("js/ajaxcustom.js"),array(),"",true);

    wp_localize_script( 'customajax', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
        'action' => 'post-next'
    ) );


}

add_action("wp_enqueue_scripts","loadcustomajax");

function ajaxNextPost(){
	$post=get_post(4598);
	//var_dump($post);
	//$post=get_next_post(4598);
	//var_dump($post);
	$contenido=`<section>
		<article class="item-detail-news">
			<header>
				<h1 class="title-item-news">$post->post_title</h1>
				<span class="sumary-item-news"><?php echo get_field("sumilla",$post->ID); ?> </span>
				<div class="bar-detail-news">
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$post->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_template_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo  get_permalink($post->ID);?>">
							<img id="shared-twitter" src="<?php echo get_template_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo  get_permalink($post->ID);?>">
							<!--<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_template_directory_uri();?>/img/iconos/whats.png" alt="">-->
							   

   
						</div>
						
					</div>
				</div>
			</header>
			<div class="lyt-interna">
			<section class="content-item-news">
				<div class="over-content-item">
				
				<div class="bloque-type-item">
					<?php $tipo=get_post_format();?>
			
					<?php if(get_field("codigo_youtube")!="" || get_field("codigo_video",$post->ID)) :?>
							<?php get_template_part( 'template-parts/content', "video" );?>
					<?php else : ?>
							<?php get_template_part( 'template-parts/content', $tipo );?>
					<?php
						endif;	
					?>

					<?php // $id=0;?>
					<?php // get_template_part( 'template-parts/content', $tipo );?>
				

					
				</div>
				<div class="detail">
						
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $id=get_the_ID();?>
		
						<?php htmlentities(the_content()); ?>
	

						<?php endwhile; ?>

					<?php endif; ?>

				
				</div>
				</div>
			</section>
			<aside class="sidebar-item-news">
				<div class="over-content-sidebar">
					<div>
						<div class="publicidad-320x600">
							
							<div class="banner_large banner_pc" id="Middle">
						    <script>
						        googletag.cmd.push(function() { googletag.display('Middle'); });
						    </script>
							</div>
						</div>
						
					</div>
				 	<?php get_template_part( 'template-parts/content', "taboola-right" );?>	

					<div>
						<div class="publicidad-320x250">
						<div class="banner_large banner_pc" id="Middle3">
					    <script>
					        googletag.cmd.push(function() { googletag.display('Middle3'); });
					    </script>
						</div>
						</div>
						
					</div>

			
					<?php get_template_part( 'template-parts/content', "relacionadas" );?>
					

			
				</div>
			</aside>

			<div class="clear"></div>
			</div>
		</article>
			<div id="bar-bottom_detail-news" class="bar-detail-news">
					<div>
					<span class="author-news">Redacción Latina</span>
					<time class="date-item-news"><?php echo get_the_date('j F Y / g:i a',$value->ID)?></time>
					</div>
					<div>
						<div class="box-compartir">
							<img id="shared-facebook" src="<?php echo get_template_directory_uri();?>/img/iconos/fb.png" alt="" data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>">
							<img id="shared-twitter" src="<?php echo get_template_directory_uri();?>/img/iconos/tw.png" alt="" data-url="https://twitter.com/intent/tweet?text=<?php echo the_permalink();?>">
							<!--<img  id="shared-whats" data-url="whatsapp://send?text=https%3A%2F%2Fwww.example.com" src="<?php echo get_template_directory_uri();?>/img/iconos/whats.png" alt="">-->
							   

   
						</div>
					</div>
			</div>


		<div class="publicidad-970">
			<div class="banner_large banner_pc" id="Top2">
		    <script>
		        googletag.cmd.push(function() { googletag.display('Top2'); });
		    </script>
		</div>

		</div>

		<div class="bloque-tag">
			<h2 class="title-info">Tags:</h2>
				
				<?php // $next=get_next_post(); var_dump($next);?>
			
			<?php $_tags=wp_get_post_tags($id);?>
				
				<?php if($_tags): ?>
			<ul class="list-tag">
				
						<?php foreach ( $_tags as $key => $value) { ?>
							<li><a href="<?php echo get_home_url()."noticias-sobre/".$value->slug;?>"><?php echo $value->name;?></a></li>
						<?php }  ?>
			
					
			
			
			
			</ul>
				<?php else : ?>
							<span>No se encontraron tags registrados para esta noticia.</span>
				<?php endif ;?>
		</div>
		<div>
			<?php get_template_part( 'template-parts/content', "notas_relacionadas" );?>

		</div>

		</div>
	</section>`;
	echo "aqui".$contenido;
	wp_die();
}

add_action('wp_ajax_nopriv_post-next','ajaxNextPost');
add_action('wp_ajax_post-next','ajaxNextPost');


function cargarS3( $post_ID, $post, $update){
	if($update){
		//actualizando post;
		/*echo "<pre>".get_post_permalink($post_ID)."</pre>";
		echo "<pre>".var_dump($post_ID)."</pre>";
		echo "<pre>".var_dump($post)."</pre>";
		echo "<pre>".var_dump($update)."</pre>";*/
		//wp_die();
	}
	else{
		// creando nuevo post;
	}
	
}
//add_action("save_post","cargarS3",10,3);
function head_amp($data){		
	
	return $data;

}
add_filter("amp_post_template_head","head_amp",1,1);





add_filter('genesis_breadcrumb_args', 'remove_breadcrumbs_yourarehere_text');

function remove_breadcrumbs_yourarehere_text( $args ) {
	$args['home'] = 'Inicio';
    $args['labels']['prefix'] = '';
    return $args;
}
