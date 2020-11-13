<?php
$slick_id = 'slick-property';
$slick = array(
	'dots' => false,
	'arrows' => false,
	'infinite' => true,
	'adaptiveHeight' => false,
	'accessibility' => false,
); 
$slick = json_encode($slick); 
?>
<div class="ui-slick-property">

	<div id="<?php echo $slick_id; ?>" class="theme-slick-slider shadow-lg" data-slick='<?php echo $slick; ?>'>

		<div class="item">
			<div class="embed-responsive embed-responsive-4by3">
				<div class="embed-responsive-item bg-light image-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/theme/property-loop-thumb.jpg');"></div>
			</div>
		</div>

		<div class="item">
			<div class="embed-responsive embed-responsive-4by3">
				<div class="embed-responsive-item bg-light image-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/theme/property-loop-thumb.jpg');"></div>
			</div>
		</div>

		<div class="item">
			<div class="embed-responsive embed-responsive-4by3">
				<div class="embed-responsive-item bg-light image-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/theme/property-loop-thumb.jpg');"></div>
			</div>
		</div>

	</div>

	<div class="ui-slick-pager">
		<button target="#<?php echo $slick_id; ?>" class="btn btn-icon prev" data-toggle="slick-prev">
	    <i class="icon-arrow-left"></i>
	  </button>
		<button target="#<?php echo $slick_id; ?>" class="btn btn-icon next" data-toggle="slick-next">
	    <i class="icon-arrow-right"></i>
	  </button>
	</div>

</div>