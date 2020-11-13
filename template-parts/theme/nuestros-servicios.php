<div class="gpt-6 gpb-6 bg-light ui-section">

	<div class="container gpt-4 gpb-4 position-relative">

		<div class="row">

			<div class="col-md-6 gpt-3">

				<span class="ui-section-circle"><i class="icon-circle-hose-tree text-primary xl"></i></span>

				<div class="row">
					<div class="col-md-7">

						<h2 class="section-title xl gmb-3 ui-overlay-marcas">Nuestros Servicios</h2> 

						<p class="font-size-14 gmb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Enimad minim veniam, quis nostrud tion.</p>

						<p class="text-primary"><i class="font-Vollkorn">Lorem ipsum dolor</i></p>
						
						<p><a href="#" class="btn btn-icon text-primary"><i class="icon-arrow-right lg"></i></a></p>

						<p class="text-primary">LOREM IPSUM DOLOR NORI POL IT NARQUE  SOL LOREM IT NOREM POLISN.</p>

					</div>
				</div>

			</div>

			<div class="col-md-6 pl-md-0">

				<div class="ui-slick-component gml-md-n-1">

					<?php
					$slick_id = 'section-slider';
					$slick = array(
						'dots' => false,
						'arrows' => false,
						'autoplay' => false,
						'fade' => false,
						'accessibility' => false,
					); 
					$slick = json_encode($slick); 
					?>
					<div id="<?php echo $slick_id; ?>" data-has-pager="true" class="theme-slick-slider shadow-lg" data-slick='<?php echo $slick; ?>' data-disable-affix-offset="true">
						
						<div class="item">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/theme/servicios-slide-1.jpg"/>
						</div>

						<div class="item">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/theme/servicios-slide-1.jpg"/>
						</div>

						<div class="item">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/theme/servicios-slide-1.jpg"/>
						</div>

					</div>
					<div class="ui-slick-pager">
						<button target="#<?php echo $slick_id; ?>" class="btn btn-icon prev" data-toggle="slick-prev">
				      <i class="icon-arrow-left"></i>
				    </button> 
						<div class="pager" data-pager="#<?php echo $slick_id; ?>">
							<span class="current">01</span>
							<i class="sep">/</i>
							<span class="total">03</span>
						</div>
						<button target="#<?php echo $slick_id; ?>" class="btn btn-icon next" data-toggle="slick-next">
				      <i class="icon-arrow-right"></i>
				    </button>
					</div>

				</div> 

			</div>

		</div>

		<div class="ui-section-box col-lg-3">
			<p class="font-size-20 font-weight-600">ARQUITECTURA PAISAJISMO</p>
			<p class="small font-Vollkorn m-0"><i>Lorem ipsum dolor noris pol it narque  sol lorem it norem polisn.</i>
		</div>

	</div>

</div>