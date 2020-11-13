<?php

/* Adding custom google fonts 

<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600&family=Raleway:wght@400;500;600;700&family=Vollkorn:wght@400;600;700&display=swap" rel="stylesheet">

*/

add_filter('WPBC_enqueue_google_fonts', 'wpbc_child_enqueue_google_fonts', 10, 1);

function wpbc_child_enqueue_google_fonts($fonts){ 

	$fonts = array(
		array(
			'base' => 'Raleway', // css class base name .font-[base]{}
			'href' => 'https://fonts.googleapis.com/css?family=Raleway:wght@400;500;600;700&display=swap',
			'font-family' => "'Raleway', serif;",
			'primary' => true // will be "body" font on inline style
		), 
		array(
			'base' => 'Archivo', // css class base name .font-[base]{}
			'href' => 'https://fonts.googleapis.com/css?family=Archivo:wght@400;600&display=swap',
			'font-family' => "'Archivo', serif;", 
		), 
		array(
			'base' => 'Vollkorn', // css class base name .font-[base]{}
			'href' => 'https://fonts.googleapis.com/css?family=Vollkorn:wght@400;600;700&display=swap',
			'font-family' => "'Vollkorn', serif;", 
		), 
	);

	return $fonts; 

}



/*

	- Custom font used, see https://transfonter.org/ to transform any font file into web font-family one

	- Use priority 0 to put code on very top position (load first of any other css used)
	- Notice the "body.using-theme-fonts" definition
	- Add body class
	- You could include here any kind of code in fact, but keep for fonts.

 */

add_filter('wpbc/body/class', 'wpbc_child_body_class__fonts',		0,	1);
add_action('wp_head', 				'wpbc_child_wp_head__fonts', 			0); 

function wpbc_child_body_class__fonts($body_class){
	$body_class .= ' using-theme-fonts';
	return $body_class;
}

function wpbc_child_wp_head__fonts() {
	$theme_uri = CHILD_THEME_URI.'/fonts/theme/';
 	echo "<style> 
 		body.using-theme-fonts{
 			letter-spacing:1px;
 		}
		body.using-theme-fonts .section-title{
			font-family: 'Vollkorn', serif!important;
			font-weight:500; 
		}
		body.using-theme-fonts .section-subtitle{
			font-family: 'Vollkorn', serif!important;
			font-weight:500; 
		}

		</style>";
}  



add_filter('BC_enqueue_scripts__fonts', 'wpbc_child_enqueue_custom_font_awesome'); 

function wpbc_child_enqueue_custom_font_awesome($fonts){ 


	/* Embed Font Awesome 
	$fonts['fontawesome-all'] = array( 
		'src'=>'css/fontawesome/all.min.css'
	); 
	*/
	return $fonts; 
}


/* Remove default iconmoon fonts */
add_filter('wpbc/filter/enqueue/iconmoon/uri',function($iconmoon_uri){
	return false;
},10,1);

/* Add custom iconmoon fonts */
add_filter('WPBC_enqueue_scripts__head_styles', function($styles){
	$styles['iconmoon-weisz'] = array( 
		'src'=>'fonts/extra/icomoon.css'
	);
	return $styles;
},10,1);