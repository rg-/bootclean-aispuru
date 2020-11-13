<?php WPBC_get_template_part('theme/contacto'); ?>

<footer id="main-footer" class="bg-secondary text-white gpt-2 gpb-4 font-size-14">

	<div class="container">

		<div class="row align-items-end">

			<div class="col-lg-4 text-center text-lg-left">
				<p class="text-primary m-0">INMOBILIARIA HABILITADA</p>
				<p class="text-darklight m-0">©2019 Aispurú Bienes Raíces.</p>
			</div>

			<div class="col-lg-4 text-center">
				<?php
				$logo = get_stylesheet_directory_uri().'/images/theme/logo-aispiru-white@2x.png';
				?>
				<img src="<?php echo $logo; ?>" width="229" alt="AISPIR"/>
			</div>

			<div class="col-lg-4 text-center text-lg-right">
				<p class="text-darklight m-0 font-size-12">Diseño y Desarrollo by Nomade Estudio.</p>
			</div>

		</div>
	
	</div>

</footer>