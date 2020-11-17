<?php
	
	$development = $args; 
	$api_key = tokko_config('api_key'); 
	$auth = new TokkoAuth($api_key); 
 
?>

<?php
$get_cover_picture = $development->get_cover_picture(); 
if(!empty($get_cover_picture)){
	$img = $get_cover_picture->thumb;
	$img_lg = $get_cover_picture->original;
}else{
	$img = get_stylesheet_directory_uri().'/images/theme/placeholder.png';
	$img_lg = $img;
}

$single_page = WPBC_get_field('field_wpbc_tokko_post_object_single_development','options');  
$development_url = get_permalink($single_page).WPBC_get_tokko_rewrite_development_url($development);
?>

<div id="wpbc-tokko-development-<?php echo $development->get_field("id"); ?>" class="wpbc-tokko-development gpb-4 gmb-4 gmb-1 border-bottom border-primary" data-is-inview="detect">

	<div class="row gpx-4">

		<div class="col-md-7">
			<?php WPBC_build_lazyloader_image(array(
				'img_hi' => $img_lg, 
				'img_low' => $img,
				'embed' => '4by3',
			)); ?>
		</div>

		<div class="col-md-5">

			<div class="gpx-2">
				<div class="ui-title-box">
					<h2 class="font-size-20 font-weight-600 gmb-1"><?php echo strtoupper($development->get_field('name')); ?></h2> 
					<?php $location = $development->get_field("location"); ?>
					<p class="m-0 font-Vollkorn"><i><?php echo $location->name; ?></i></p>
				</div>

				<?php $description = $development->get_field('description'); ?>

				<div class="gmt-4 font-size-14"><?php $excerpt = WPBC_excerpt(array(
					'text' => $description,
					'length' => 60,
					'readmore' => false, 
					), false); echo apply_filters('the_content', $excerpt);?></div>

				<p class="gmt-2 mb-0"><a href="<?php echo $development_url;?>" class="btn btn-link d-flex align-items-center text-dark"><b>VER MAS</b> &nbsp;&nbsp;<span class="icon-circular border-primary text-primary"><i class="icon-arrow-right"></i></span></a></p>

			</div>

		</div>

	</div>  

</div>