<?php

add_filter('wpbc/filter/tokko/search_vars', function($defaults){

		if( isset( $_GET['operacion'] ) ){
			$tkv_operation_types = explode(',', $_GET['operacion']); 

			$temp_types = array();
			foreach ($tkv_operation_types as $type) {
				# code...
				if($type=='venta') $temp_types[] = 1;
				if($type=='alquiler') $temp_types[] = 2;
				if($type=='alquiler-temporario') $temp_types[] = 3;
			}

			$defaults['search_data']['operation_types'] = $temp_types;  
		} 

		return $defaults;

	});

	add_filter( 'nav_menu_css_class' , function ( $classes, $item, $args ) {
	 
	  //_print_code($item);
		if( isset( $_GET['operacion'] ) ){
			$tkv_operation_types = explode(',', $_GET['operacion']); 
			foreach ($tkv_operation_types as $type) {
				 
				if($type=='venta' && in_array('active_if_sale',$item->classes)){
					$classes[] = ' active ';
				}
				if($type=='alquiler' && in_array('active_if_rent',$item->classes)){
					$classes[] = ' active ';
				}
				if($type=='alquiler-temporario' && in_array('active_if_temporary_rent',$item->classes)){
					$classes[] = ' active ';
				}
			} 
		} 

	  return $classes;
	} , 10, 4 ); 


	/**/
	add_filter('wpbc/filter/tokko/properties/item/class', function($class){
		return 'col-md-4 gmb-2';
	},10,1);
	add_filter('wpbc/filter/tokko/property-single/classes', function($classes,$property){
		$classes = array(
			'content_class' => 'bg-bodylight gpt-3 gpb-3',
			'container_class' => 'container',
			'row_class' => 'row',
			'content_col_class' => 'col-md-9 gpr-lg-5',
			'aside_col_class' => 'col-md-3 pl-lg-0',
		);
		return $classes;
	},10,2);


/*

	form_filter s

*/


add_filter('wpbc/filter/tokko/form_filter/args/?id=property_prices', function($args){
	$args['options'] = array(
		array(
			'value' => '0|9999999999',
			'label' => 'Rango de precios'
		),
		array(
			'value' => '0|20000',
			'label' => 'Hasta US$ 20.000'
		),
		array(
			'value' => '20000|50000',
			'label' => 'De US$ 20.000 a US$ 50.000'
		),
		array(
			'value' => '50000|100000',
			'label' => 'De US$ 50.000 a US$ 100.000'
		),
		array(
			'value' => '100000|300000',
			'label' => 'De US$ 100.000 a US$ 300.000'
		),
		array(
			'value' => '300000|500000',
			'label' => 'De US$ 300.000 a US$ 500.000'
		),
		array(
			'value' => '500000|9999999999',
			'label' => 'Mayor a US$ 500.000'
		),
	);
	return $args;
},20,1);



add_action('tokko/property-single/content/aside', function($property){

	WPBC_get_template_part('parts/single-property-contact-form', $property);

},15,1);

add_action('tokko/development-single/content/aside', function($property){

	WPBC_get_template_part('parts/single-property-contact-form', $property);

},5,1);