<?php

$section_args = $args['section_args'];

if( is_home() || is_front_page() ){
	$sec_class = '';
	$title_class = 'section-title xl';
}else{
	$sec_class = 'border-bottom border-primary';
	$title_class = 'section-title lg';
} 
?>

<div class="<?php echo $sec_class; ?> gpt-4 gmb-2">
	<?php if(!empty($args['search']->get_properties()) ) { ?> 

	<?php if(!empty($section_args['linked_results_id'])){ ?>
 
		<div class="row">

			<div class="col-md-8">
				<h2 class="<?php echo $title_class; ?>"><?php echo $section_args['section_header']['field_ui-tokko-properties_section_title']; ?></h2>
			</div>

			<div class="col-md-4">
				<div class="row row-half-gutters">
					<div class="col-6">
						<?php WPBC_tokko_form_order_by(array( 
							'search_data' => $args['search']->search_data, 
							'trigger_to' => $section_args['linked_results_id'],
							'options' => array(
								'price' => 'Precio',
								'id' => 'ID', 
								'room_amount' => 'Abitaciones',
								'suite_amount' => 'Dormitorios',
								'bathroom_amount' => 'Baños',
							),
						)); ?>
					</div>
					<div class="col-6">
						<?php WPBC_tokko_form_order(array( 
							'search_data' => $args['search']->search_data, 
							'trigger_to' => $section_args['linked_results_id']
						)); ?>
					</div> 
				</div>
			</div> 

		</div> 

	<?php } else { ?>
		<h2 class="<?php echo $title_class; ?>"><?php echo $section_args['section_header']['field_ui-tokko-properties_section_title']; ?></h2>
	<?php } ?>

	<?php } else { ?>
		<h2 class="section-title lg">No se encuentran propiedades</h2>
	<?php } ?>
</div>