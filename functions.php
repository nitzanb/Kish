<?php
//Setting localization
load_theme_textdomain( 'kish', TEMPLATEPATH . '/languages' );


/*
 * 	Thumbs
 */ 
 
add_theme_support( 'post-thumbnails' );
 

/*
 * 	Setting menus
 */ 
 

add_theme_support( 'menus' );
register_nav_menus( array(
						'primary' => __( 'Primary Navigation', 'kish' ),
						'sidebar'=> __('Sidebar Navigation', 'kish'),
						'footer'=> __('Footer Sidebar', 'kish'),	
					) );

/*
 * 	Setting sidebars
 */ 
 
register_sidebar( array(
	'name' => __( 'Main Sidebar', 'kish' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'kish' ),
	'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) ); 

/*
 *	Some extra settings
 */
 
add_theme_support( 'automatic-feed-links' ); 

/**
 * 	Managing all needed scripts 
 * 
 */ 
add_action('wp_enqueue_scripts', 'my_scripts_method');

function my_scripts_method() {
	/*
	 * Using the TRUE or FALSE at the last parameter sets if the script loads at the header or the footer
	 * docs: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 */
	
    wp_deregister_script( 'jquery' ); // I prefer jquery from cdn, comment this section if you need local jQuery
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', FALSE, FALSE, TRUE);
    wp_enqueue_script( 'jquery' );
    
    wp_register_script( 'modernizr', get_bloginfo('template_directory').'/js/libs/modernizr-2.0.6.min.js', FALSE, FALSE, FALSE);
    wp_enqueue_script( 'modernizr' );
    
    wp_register_script( 'loc_plugins', get_bloginfo('template_directory').'/js/plugins.js', FALSE, FALSE, TRUE);
    wp_enqueue_script( 'loc_plugins' );
    
    wp_register_script( 'loc_scripts', get_bloginfo('template_directory').'/js/script.js', FALSE, FALSE, TRUE);
    wp_enqueue_script( 'loc_scripts' );  
    
}    


/**
 * 	I use this function to add to the body class the browser engine (geco, webkit, etc)
 */ 

add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}
 


