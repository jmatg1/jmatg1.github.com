<?php
/*
Plugin Name: IFRAME Embed For YouTube
Plugin URI: http://www.clickonf5.org/iframe-embed-for-youtube
Description: IFRAME Embed For YouTube will add a quicktag on WordPress Post Editor which will add the capability to embed Youtube Videos thru IFRAME, just you need to input the URL of the youtube video.
Version: 1.1	
Author: Tejaswini, Sanjeev
Author URI: http://www.clickonf5.org/
WordPress version supported: 3.5 and above
*/

/*  Copyright 2010-2014  Internet Techies  (email : tedeshpa@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function iefy_url( $path = '' ) {
	global $wp_version;
	if ( version_compare( $wp_version, '2.8', '<' ) ) { // Using WordPress 2.7
		$folder = dirname( plugin_basename( __FILE__ ) );
		if ( '.' != $folder )
			$path = path_join( ltrim( $folder, '/' ), $path );

		return plugins_url( $path );
	}
	return plugins_url( $path, __FILE__ );
}
//on activation, your IFRAME Embed For YouTube options will be populated. Here a single option is used which is actually an array of multiple options
function activate_iefy() {
	$iefy_opts1 = get_option('iefy_options');
	$iefy_opts2 =array('width' => '640',
	                   'height' => '385');
	if ($iefy_opts1) {
	    $iefy = $iefy_opts1 + $iefy_opts2;
		update_option('iefy_options',$iefy);
	}
	else {
		$iefy_opts1 = array();	
		$iefy = $iefy_opts1 + $iefy_opts2;
		add_option('iefy_options',$iefy);		
	}
}

register_activation_hook( __FILE__, 'activate_iefy' );
global $iefy;
$iefy = get_option('iefy_options');
define("IEFY_VER","1.1",false);
define('IEFY_URLPATH', trailingslashit( WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) ) );
include_once (dirname (__FILE__) . '/tinymce/tinymce.php');
//External CSS in the header
function iefy_scripts_styles() {
global $iefy;
	wp_enqueue_style( 'iefy_css_file', iefy_url( 'css/iefy.css' ),
		false, IEFY_VER, 'all'); 
}
// add_action( 'init', 'iefy_scripts_styles' );

function iefy_get_youtube_iframe($video_url) {
   preg_match('@^(?:https?://)?([^/]+)@i',$video_url, $matches);
   $host = $matches[1];
   
   $tube_search_pos = strpos($host,".youtube.com");
   $tube_watch_pos = strpos($video_url,"/watch?");
   if($tube_search_pos != '' and isset($tube_search_pos) and $tube_search_pos != 0 and $tube_watch_pos != '' and isset($tube_watch_pos) and $tube_watch_pos != 0) {
      parse_str(parse_url($video_url, PHP_URL_QUERY), $qstring);
   }
   else {
      return null;
   }
   global $iefy;

   $code = '<iframe width="'.$iefy['width'].'" height="'.$iefy['height'].'" src="http://www.youtube.com/embed/'.$qstring['v'].'" frameborder="0" type="text/html"></iframe>';
   return $code;
}

// [yframe url="video url"]
function iefy_yframe_shortcode($atts) {
	extract(shortcode_atts(array(
		'url' => 'abc',
	), $atts));
	
	$insert_code=iefy_get_youtube_iframe($url);
	return $insert_code;
}
add_shortcode('yframe', 'iefy_yframe_shortcode');

// function for adding settings page to wp-admin
function iefy_settings() {
    // Add a new submenu under Options:
    add_options_page('IFRAME Embed For YouTube', 'IFRAME Embed For YouTube', 9, basename(__FILE__), 'iefy_settings_page');
}

function iefy_admin_head() {?>

<?php }

add_action('admin_head', 'iefy_admin_head');
// This function displays the page content for the IFRAME Embed For YouTube Options submenu
function iefy_settings_page() {
?>
<div class="wrap">
<h2>IFRAME Embed For YouTube</h2>
<a href="http://www.clickonf5.org/go/donate-wp-plugins/" target="_blank" rel="nofollow"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" /></a>
<div style="clear:both;"></div>
<form  method="post" action="options.php">
<div id="poststuff" class="metabox-holder has-right-sidebar"> 

<div style="float:left;width:55%;">
<?php
settings_fields('iefy-group');
$iefy = get_option('iefy_options');
?>
<h2>Dimensions of the Video</h2> 
<p>Enter the dimensions of the Youtube Video depending upon the width of your theme</p> 

<table class="form-table">

<tr valign="top">
<th scope="row"><label for="iefy_options[width]">Width</label></th> 
<td><input type="text" name="iefy_options[width]" class="small-text" value="<?php echo $iefy['width']; ?>" />&nbsp;px</td>
</tr>

<tr valign="top">
<th scope="row"><label for="iefy_options[height]">Height</label></th> 
<td><input type="text" name="iefy_options[height]" class="small-text" value="<?php echo $iefy['height']; ?>" />&nbsp;px</td>
</tr>

</table>

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</div>

   <div id="side-info-column" class="inner-sidebar"> 
			<div class="postbox"> 
			  <h3 class="hndle"><span>About this Plugin:</span></h3> 
			  <div class="inside">
                <ul>
                <li><a href="http://www.clickonf5.org/iframe-embed-for-youtube" title="IFRAME Embed For YouTube Homepage" >Plugin Homepage</a></li>
                <li><a href="http://www.clickonf5.org/" title="Visit Internet Techies" >Plugin Parent Site</a></li>
                <li><a href="http://www.clickonf5.org/about/tejaswini" title="IFRAME Embed For YouTube Author Page" >About the Author</a></li>
                <li><a href="http://www.clickonf5.org/go/donate-wp-plugins/" title="Donate if you liked the plugin and support in enhancing this plugin and creating new plugins" >Donate with Paypal</a></li>
                </ul> 
              </div> 
			</div> 
     </div> 

</div> <!--end of poststuff -->

</form>
</div> <!--end of float wrap -->
<?php	
}
// Hook for adding admin menus
if ( is_admin() ){ // admin actions
  add_action('admin_menu', 'iefy_settings');
  add_action( 'admin_init', 'register_iefy_settings' ); 
} 
function register_iefy_settings() { // whitelist options
  register_setting( 'iefy-group', 'iefy_options' );
}

?>