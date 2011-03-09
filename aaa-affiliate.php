<?php
/**
 * Plugin name: AAA Affiliate Plugin
 *
 */

/* FIXME: Use the WP call instead of the constant. */ 
$css_url = WP_PLUGIN_URL.'/aaa-affiliate/css/pwtips.css';
$css_file = WP_PLUGIN_DIR.'/aaa-affiliate/css/pwtips.css';

$image_base_url = WP_PLUGIN_URL.'/aaa-affiliate/images/';
$image_base_dir = WP_PLUGIN_DIR.'/aaa-affiliate/images/';

$bluehost_link = "http://www.bluehost.com/track/doolin";
 

/**
 * http://wordpress.org/support/topic/shortcode-output-always-appearing-at-top-of-page-content
 */

 
/**
 * TODO: get rid of the "echo" calls.
 */
 
 
function bluehost_banner_300x50_05() {
  global $image_base_url;
  global $bluehost_link;
  $image = $image_base_url . "bh_300x50_05.gif";
?>
<a href="<?php echo $bluehost_link ?>">
<img src="<?php echo $image_base_url . "bh_300x50_05.gif"?>" 
title="Host your WordPress website at Bluehost!" />
</a>
<?php  
}
add_shortcode('bhb', 'bluehost_banner_300x50_05');



function bluehost_banner1_300x50_05() {
  global $image_base_url;
  global $bluehost_link;
  $image = $image_base_url . "bh_300x50_05.gif";
  
  $ad = <<<EOF
<div class="banner center" style="text-align: center;">
<a href=$bluehost_link><img src=$image /></a>
</div>
EOF;

  return $ad;  
}
add_shortcode('bhb2', 'bluehost_banner1_300x50_05');


?>
