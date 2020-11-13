<?php

$property = $args;

$id = $property->get_field('id'); 
 
$single_page = WPBC_get_field('field_wpbc_tokko_post_object_single_property','options');  
$propiedad_url = get_permalink($single_page).WPBC_get_tokko_rewrite_property_url($property);

?>
<a href="<?php echo $propiedad_url;?>" class="ui-tokko-property" data-is-inview="detect">

	<div class="ui-tokko-property-image">

		<?php
		$get_cover_picture = $property->get_cover_picture(); 
		if(!empty($get_cover_picture)){
			$img = $get_cover_picture->thumb;
			$img_lg = $get_cover_picture->original;
		}else{
			$img = get_stylesheet_directory_uri().'/images/theme/placeholder.png';
			$img_lg = $img;
		}

		WPBC_build_lazyloader_image(array(
			'img_hi' => $img_lg, 
			'img_low' => $img,
		));
		?>
		<!--
		<div class="embed-responsive embed-responsive-4by3 bg-secondary">
			<div data-is-inview-lazybackground="<?php echo $img_lg; ?>" class="embed-responsive-item image-cover" style="background-image: url(<?php echo $img; ?>);"></div>
		</div>
		-->
		<span class="ref">REF: <?php echo $property->get_field('reference_code')?></span>

		<span class="icon"><i class="icon-arrow-right lg"></i></span>

		<div class="ui-tokko-property-header">

			<?php
			$address = $property->get_field('address');
			$publication_title = $property->get_field('publication_title'); 
			$operations = $property->get_available_operations_names(); 
			?>

			<small class="meta"><span class="operation"><?php echo $property->get_field("type")->name; ?></span> / <span class="price"><?php echo $property->get_field('web_price') ? implode(" <br>",$property->get_available_operations()): "Consulte precio;" ?></span></small>
			<h3 class="title font-Vollkorn"><?php echo $address; ?></h3>
			<small class="zone"><?php echo strtoupper($property->get_field("location")->name); ?></small>
		</div>
	
	</div>

	<div class="ui-tokko-property-features font-Vollkorn">
		
		<?php 

		$def_features = array(

			array(
				'key' => 'suite_amount',  
				'icon' => 'icon-suite_amount'
			),

			array(
				'key' => 'bathroom_amount',  
				'icon' => 'icon-bathroom_amount'
			),

			array(
				'key' => 'total_surface',  
				'icon' => 'icon-total_surface'
			), 

		); 

		WPBC_tokko_property_features( array(

			'property' => $property,
			'features' => $def_features

		)); ?>
	
	</div>

</a>