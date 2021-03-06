<?php

/*

	Disable option page for this addon

*/

add_filter('wpbc/filter/swup/option_page', function(){
	return false;
},10,1); 

/*

	Disable default css used 
	See theme styles

*/
add_filter('wpbc/filter/swup/usecss', function($usecss){
	return false;
},10,1);


/*
	
	Plugins used

*/

add_filter('wpbc/filter/swup/plugins', function($theme){
	/*
	'SwupFadeTheme' default
	'SwupSlideTheme'
	'SwupOverlayTheme'
	*/
	$theme = 'SwupFadeTheme';

	return $theme;
},10,1 ); 

add_filter('wpbc/filter/swup/plugins/SwupOverlayTheme/args', function($args){
	$args = array(
		'color' => 'rgba(0,0,0,.5)',
		'duration' => 600,
		'direction' => 'to-top'
	);
	return $args;
},10,1 );

add_filter('wpbc/filter/swup/SwupFormsPlugin',function(){
	return true;
},10,1);

add_filter('wpbc/filter/swup/SwupScrollPlugin',function(){
	return false;
},10,1);

/*

	Container elements to be loaded

*/

add_filter('wpbc/filter/swup/containers', function($containers){ 
	//$containers = '#main-content, #simulate-body-tags';
	$containers = '#main_navbar_container, #main-content-wrap, #ui-tokko-modals';
	return $containers;
},20,1 );
add_filter('wpbc/filter/swup/plugins/mainElement', function($mainElement){ 
	//$mainElement = '#main-content';
	$mainElement = '#main-content-wrap'; 
	return $mainElement;
},20,1 );

/*

	JS actions NO <script> tags needed, see js/custom.js functions

*/
add_action('wpbc/action/swup/clickLink', function(){ 
?>
swup_theme_clickLink();
<?php 
},10); 

add_action('wpbc/action/swup/pageView', function(){ 
?>
swup_theme_pageView();
<?php

},10); 

add_action('wpbc/action/swup/contentReplaced', function(){ 
?> 
swup_theme_contentReplaced();
<?php 
},10); 

/*

	Disable acf form on front end if page use pjax

	Reason: form is not re-loaded the right way, tabs, conditionals... not working.

*/
add_filter('wpbc/filter/acf/enable_acf_form', function(){ 
	if( WPBC_is_swup_enabled() ){
		return false;
	}

},10,1);

/*

	Disable lazyload on slick component

*/
add_filter('wpbc/slick/args', function($slider_args, $post_id){

	//$slider_args['lazyload'] = false;

	return $slider_args;
},10,2);
 

add_action('wpbc/layout/start',function(){

	remove_action('wpbc/layout/start','WPBC_layout_struture__main_pageheader',20);
	add_action('wpbc/layout/start', 'WPBC_layout_struture__main_pageheader',31); 

},0);

add_filter('wpbc/html/class',function($class){

	// $class .= ' swup-theme-reverse ';

	return $class;

},10,1);