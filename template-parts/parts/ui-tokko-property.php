<div class="col-lg-4 gmy-2">
	<?php 
	$single_page = WPBC_get_field('field_wpbc_tokko_post_object_single_property','options'); 
	?>
	<a href="<?php echo get_permalink($single_page); ?>" class="ui-tokko-property">

		<div class="ui-tokko-property-image">

			<div class="embed-responsive embed-responsive-4by3">
				<div class="embed-responsive-item bg-light image-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/theme/property-loop-thumb.jpg');"></div>
			</div>
			
			<span class="ref">REF: 875554</span>

			<span class="icon"><i class="icon-arrow-right lg"></i></span>

			<div class="ui-tokko-property-header">
				<small class="meta"><span class="operation">Alquiler</span> / <span class="price">U$S 2.300</span></small>
				<h3 class="title font-Vollkorn">Casa del Faro con un título medio largo para probar a ver como quedaría</h3>
				<small class="zone">PINAR DEL FARO</small>
			</div>
		
		</div>

		<div class="ui-tokko-property-features font-Vollkorn">
		
			<span class="feature"><i class="icon-room_amount lg text-primary"></i> 4 dorm</span>
			<span class="feature"><i class="icon-bathroom lg text-primary"></i> 3 baños</span>
			<span class="feature"><i class="icon-area lg text-primary"></i> 450 m2</span>
		
		</div>

	</a>

</div>