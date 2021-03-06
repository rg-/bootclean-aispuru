<?php

/*

	Filter main-navbar settings

*/
	
add_filter('wpbc/filter/layout/main-navbar/defaults', function($args){


	global $post;
	$affix = true;
	$simulate = true; 
	$navbar_type = 'navbar-simple'; 
	if(WPBC_if_has_page_header($post->ID)){
		$simulate = false; 
		$navbar_type = 'navbar-transparent '; 
		//$args['class'] .= ' affix-simulate-hide ';
	}

	
	$args['class'] = 'navbar navbar-expand-aside collapse-right navbar-expand-lg transition '.$navbar_type; 
	//$args['nav_attrs'] = ' data-affix-removeclass="" data-affix-addclass="" ';

	$args['container_class'] = 'container gpx-2 gpx-md-1';

	$args['navbar_brand']['class'] = 'transition';
	$args['navbar_brand']['attrs'] = ' data-affix-removeclass="" data-affix-addclass="" ';  
 
	$logo = '[WPBC_get_stylesheet_directory_uri]/images/theme/logo-aispiru@2x.png';
	$args['navbar_brand']['title'] = '<img width="311" src="'.$logo.'" alt="AISPIRU" data-affix-addclass=""/>'; 

	$args['navbar_toggler']['class'] = 'toggler-primary toggler-open-primary';
	$args['navbar_toggler']['type'] = 'animate';
	$args['navbar_toggler']['effect'] = 'close-arrow'; 
	//$args['navbar_toggler']['attrs'] = 'data-affix-addclass="toggler-white" data-affix-removeclass="toggler-white"'; 

	$args['wp_nav_menu']['container_class'] = 'collapse navbar-collapse flex-row-reverse mx-auto order-3';
	$args['wp_nav_menu']['menu_class'] = 'navbar-nav nav font-Raleway transition'; 
	
	// $simulate_target = '#main-content'; 

	$args['affix'] = $affix;
	
	$args['affix_defaults']['simulate'] = $simulate;
	$args['affix_defaults']['simulate_target'] = $simulate_target;
	$args['affix_defaults']['breakpoint'] = 'xs';
	$args['affix_defaults']['scrollify'] = false;  
  $args['affix_defaults']['position'] = 'top'; 
  $args['affix_defaults']['target'] = '#main-content'; 
	// $args['nav_attrs'] = ' data-affix-target="#main-content-wrap" '; 

	//$args['nav_attrs'] .= ' data-affix-show="scroll-up" ';
	
	// $args['nav_attrs'] = ' data-toggle="nav-affix" data-affix-position="top" data-affix-breakpoint="xs" data-affix-target="#main-content-wrap" data-affix-simulate="false" data-affix-scrollify="true" data-affix-showXX="scroll-up" data-affix-addclassXX="bg-white" data-affix-removeclassXX="bg-transparent" ';
	 
	//$args['wp_nav_menu']['before_menu'] = '[WPBC_get_template name="parts/something"]'; 

	/* wp_nav_menu */
	//$args['wp_nav_menu'] = ''; // use this to replace wp_nav_menu with "collapse-custom" one
	//$args['wp_nav_menu_custom'] = '[WPBC_get_template name="parts/wp_nav_menu_custom"]';
	//$args['navbar_toggler']['data_toggle'] = 'data-toggle="collapse-custom"';
	//$args['navbar_toggler']['target'] = 'collapse-custom';

	return $args;
},10,1);  

/*
	Alter output html for menus
*/
function nav_replace_wpse_189788($item_output, $item) {  
	return $item_output; 
}
add_filter('walker_nav_menu_start_el','nav_replace_wpse_189788',10,2);


/*
	Disable main-navbar from templates
*/
add_filter('wpbc/filter/layout/main-navbar/defaults',function ($params){
	//$params['use_custom_template'] = 'none';
	return $params;
},10,1); 


/*
	Add items into menus
*/
// add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary' ){
        $items .= '<li class="nav-item menu-item">'; 
    		$items .= 'something';
    		$items .= '</li>';
    }
    return $items;
}


/* 
	Disable dropdown markup on BootstrapNavWalker 
*/
// add_filter('nav_menu_use_dropdown',function(){ return false; });


/*

	Make dropdown hover default for navbar

	Later use this to manage from admin

*/

add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth){ 
	$atts['data-scrollify-target'] = '#main-navbar';
	//$atts['class'] = $atts['class'].' scroll-to ';
	if ( isset( $args->has_children ) && $args->has_children && 0 === $depth && $args->depth > 1 ) {
		//$atts['data-target'] = '#dm';
		$atts['data-hover'] = 'dropdown';
		$atts['data-hover-respond'] = 'lg';
	}  
	return $atts;
}, 10, 4); 