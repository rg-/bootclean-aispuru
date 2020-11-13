<?php
/* ################################################################################## */
/* ################################################################################## */
/**
 * Bootclean child custom functions
 *
 * @package Bootclean
 * @subpackage Child Theme
 * 
 */
/* ################################################################################## */
/* ################################################################################## */

/**
 * @subpackage Enable "theme_settings" options pages
 */

	add_filter('wpbc/filter/theme_settings/installed', '__return_true');
		
		/* Customs for theme settings here */
		
		include('functions/addon-theme_settings.php');

/* ################################################################################## */

/**
 * @subpackage Enable "is_inview" Addon JS/CSS
 */
	 
	add_filter('wpbc/filter/is_inview/installed', '__return_true',0,1);

/* ################################################################################## */

/**
 * @subpackage Enable "tokko" addon Tokko Broker PHP API 
 */

	add_filter('wpbc/filter/tokko/installed', '__return_true');

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
	
	// include('functions/addon-tokko.php');

/* ################################################################################## */

/**
 * @subpackage Enable "swup" addon JS/CSS
 */

	add_filter('wpbc/filter/swup/installed', '__return_true');
	include('functions/addon-swup.php');

/* ################################################################################## */

/**
 * @subpackage Enable "private_areas" addon WP PLUGIN
 */

	// add_filter('wpbc/filter/private_areas/installed', '__return_true');
	// include('functions/addon-private_areas.php');

/* ################################################################################## */

/**
 * @subpackage "theme-*" customs
 */

	include('functions/theme-textdomain.php'); 
	include('functions/theme-login.php'); 
	include('functions/theme-options.php');
	include('functions/theme-under-construction.php'); 
	//include('functions/theme-options-page-settings.php');
	include('functions/theme-scripts.php');
	include('functions/theme-fonts.php');
	// include('functions/theme-widgets.php');

/* ################################################################################## */

/* core */
// include('functions/core-theme_support.php'); 

/* ################################################################################## */

/* front-end layout */ 
include('functions/layout.php');
include('functions/layout-navmenus.php');

/* ################################################################################## */

/**
 * @subpackage WooCommerce
 */
if( class_exists( 'WooCommerce' ) ){
	include('functions/plugins-woocommerce.php');
}

/* ################################################################################## */

/**
 * @subpackage Template Landing
 */
	/* Disable template landing builder */
	add_filter('wpbc/filter/template-landing/installed', '__return_false');

/* ################################################################################## */


/* ################################################################################## */


/* ################################################################################## */


function WPBC_build_lazyloader_image($args=array()){

	// $attachment_id=null, $type=null, $embed='16by9', $size='full'
	$type = !empty($args['type']) ? $args['type'] : 'inview';
	$embed = !empty($args['embed']) ? $args['embed'] : '16by9';
	
	if(!empty($args['img_hi']) && !empty($args['img_low']) ){

		$img_hi = $args['img_hi'];
		$img_low = $args['img_low']; 
		 
		if($type=='slick-embed'){

			$attrs = ' data-lazybackground-spinner="false" data-lazybackground-target="parent" data-lazybackground="simple" data-lazybackground-src="'.$img_hi.'" ';
			$attrs .= ' style="background-image: none;"';
			$box_attrs = '';
			?>
			<div class="item">
				<div class="item-container image-cover lazyload-blured" style="background-image: url(<?php echo $img_low; ?>);">
					<div class="w-100 h-100 image-cover " <?php echo $attrs; ?>>

					</div>
				</div>
			</div>
			<?php
		}

		if($type=='inview'){

			$attrs = ' data-lazybackground-spinner="false" data-lazybackground-target="parent" data-lazybackground="simple" data-is-inview-lazybackground="'.$img_hi.'" ';
			$attrs .= ' style="background-image: none;"';
			$box_attrs = '';
			?>
<div class="embed-responsive embed-responsive-<?php echo $embed; ?>">
	<div class="embed-responsive-item image-cover lazyload-blured" style="background-image: url(<?php echo $img_low; ?>);">
		<div class="w-100 h-100 image-cover " <?php echo $attrs; ?>>

		</div>
	</div>
</div>
		<?php
		}
		

	}
}