<?php


add_filter('wpbc/body/data',function($attrs){

	$attrs .= 'data-offset="0" data-scroll-time-1="800" data-scroll-ease-1="easeInCubic" data-loader-delay="1000" data-inview-me-offset="300" data-inview-me-offsetBottom="200"';

	return $attrs;

},10,1);

/* 
	This will run if no Theme Settings or custom used. 
	Use it if no Theme Settings used, and to set defaults
*/
add_filter('wpbc/filter/layout/locations', function($locations){ 
	// $locations['page']['id'] = 'a1';
	return $locations;  
}, 20, 1 );


/* 
	This will run at the last, last, last 
*/
add_filter('wpbc/filter/layout/location', function($layout, $template, $using_theme_settings, $using_page_settings){
	if($template == 'page'){
		//$layout = 'a2-ml';
	}
	return $layout;
},10,4);
/* 
	And same thing for the container type
*/
add_filter('wpbc/filter/layout/container_type', function($container_type, $template, $using_theme_settings, $using_page_settings){
	if($template == 'page'){
		//$container_type = 'fixed-left';
	}
	return $container_type;
},10,4);


add_action('wpbc/layout/start', function(){?><?php
}, 40 );

add_filter('wpbc/filter/layout/start/defaults', function($args){  
	// $args['main_content']['wrap']['class'] = 'gpy-1';
	return $args;
}); 

add_filter('WPBC_post_header_title_class', function($title_class){ 
	/*
	default
	$title_class = 'entry-title';
	*/
	// $title_class .= ' gmb-2';
	return $title_class;  
}, 20, 1 ); 

add_filter('wpbc/filter/layout/go-up', function(){

	return '<a href="#" class="btn btn-icon btn-light"><i class="icon-angle-up"></i></a>';

},10,1);



add_filter('wpbc/slick/args', function($slider_args, $post_id){

	$slider_args['lazytype'] = 'lazybackground_inner';
	$slider_args['lazytype_fx'] = 'blured';

	return $slider_args;

},10,2);