<?php
	
	if(isset($_GET['property_id']) || !empty(get_query_var('property_id'))){
		
		return;

	}

	$back_url = 'javascript:history.back()';
	$content_col_class = 'col-md-9 gpr-lg-5';
	$aside_col_class = 'col-md-3 pl-lg-0';

?>
<div id="ui-property" class="bg-bodylight gpt-3 gpb-3 ui-tokko-property-single">

	<div class="container">

		<!-- property header -->
		<div class="row">

			<div class="col-12 text-right">
				<a href="<?php echo $back_url; ?>" class="btn btn-link btn-sm"><i class="icon-arrow-left mr-2"></i> VOLVER A RESULTADOS</a>
			</div> 

		</div>

		<div class="row align-items-end">

			<div class="<?php echo $content_col_class; ?>">
				<h2 class="section-title xl m-0">Las Musas <sub class="ref text-primary font-size-12">REF. 12345</sub></h2>
				<h3 class="font-size-18 m-0">ARENAS DE JOSÉ IGNACIO</h3>
			</div>

			<div class="<?php echo $aside_col_class; ?> text-right">
				<a href="#" class="btn btn-link text-primary"><i class="icon-share mr-1"></i> <i>Compartir</i></a>
			</div>

		</div>
		<!-- property header END -->

		<hr class="border-primary gmt-1 gmb-2">

		<!-- property content -->
		<div class="row">

			<div class="<?php echo $content_col_class; ?>">
				 
				<?php WPBC_get_template_part('parts/single-property-slider'); ?>

				<?php WPBC_get_template_part('parts/single-property-features'); ?> 

				<?php WPBC_get_template_part('parts/single-property-content'); ?> 

			</div>

			<div class="<?php echo $aside_col_class; ?>">
				
				<div class="gmb-1">
					<?php WPBC_get_template_part('parts/single-property-contact-form'); ?>
				</div>
				<div class="gmb-2">
					<?php WPBC_get_template_part('parts/single-property-prices'); ?>
				</div>
				<div class="gmb-1">
					<?php WPBC_get_template_part('parts/single-property-map'); ?>
				</div>

			</div>

		</div>
		<!-- property content END -->

	</div>

</div>

<?php WPBC_get_template_part('parts/single-property-related'); ?>

<?php WPBC_get_template_part('theme/suscribite'); ?>