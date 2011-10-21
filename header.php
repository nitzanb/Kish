<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
   
	<link rel="icon"       type="image/png"       href="<?bloginfo('template_directory');?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?bloginfo('template_directory');?>/apple-touch-icon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?bloginfo('template_directory');?>/apple-touch-icon-57x57-precomposed.png" />	

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
 
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="container">
    <header>
		<h1>
			<a href="<?bloginfo('home');?>" title="<?_e('Back to '); bloginfo('name');?>"><?bloginfo('name');?></a>			
		</h1>
		<div class="site_description"><?bloginfo('description');?></div>
		<?php 
		/*	
		 * 	I call a menu in the Primary location
		 *	Comment this section if you don't want a menu 
		 */ 
		
		wp_nav_menu( array( 'theme_location' => 'primary', 
							'sort_column' => 'menu_order', 
							'container' => 'div', 
							'container_id' => 'top_nav',							
							'menu_id' => 'main_menu',
							'depth'   => 1,  // 1 is for 1 level menu, you can use 2 to set depth
				) ); 
		?>
    </header>
