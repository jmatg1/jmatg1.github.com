<?php
	/*
		* Plugin Name: WP YouTube Video Optimizer
		* Plugin URI: https://wordpress.org/plugins/wp-youtube-video-optimizer/
		* Description: Embed multiple YouTube videos using a simple shortcode [ib_youtube video="video_id" image="image_placeholder_link" width="640" height="360" thumbnail="maxresdefault"].
		* Author: Measure Marketing Results Inc.
		* Author URI: http://measuremarketing.net/
		* Version: 1.2
	*/
	if (!defined('ABSPATH')) {
		exit;
	}
	
	function ib_yt_styles_scripts() {
		wp_enqueue_style( 'ib-youtube-style', plugins_url('/assets/css/yt-style.css', __FILE__ ));
		wp_enqueue_script( 'ib-youtube-script', plugins_url('/assets/js/yt-script.js', __FILE__ ));
	}
	add_action('wp_enqueue_scripts', 'ib_yt_styles_scripts' );
	
	add_shortcode('ib_youtube','ib_youtube_player');
	function ib_youtube_player($atts)
	{
		$atts = shortcode_atts( array(
		'image' => '',
		'width' => '640',
		'height' => '360',
		'video' => 'ZfaqLBRP5Yo',
		'thumbnail' => 'maxresdefault',
		), $atts, 'ib_youtube_player' );
		
		if (strpos($atts['video'], 'watch') !== false) {
			$split=  explode("?v=", $atts['video']);				
			$split=  explode("&", $split[1]);
			$atts['video'] = $split[0];
			} else if (strpos($atts['video'], 'embed') !== false) {
			$split=  explode("/embed/", $atts['video']);
			$split=  explode("?", $split[1]);
			$atts['video'] = $split[0];
		}
		
		if($atts['image'] == ''){
			$atts['image'] = 'https://img.youtube.com/vi/'.$atts['video'].'/'.$atts['thumbnail'].'.jpg';
		}
		
		return "<div class='ib-youtube-wrapper' style='width:".$atts['width']."px;max-width:100%;'>
		<div class='ib-play play-icon'></div>
		<img class='ib-video-placeholder' src='".$atts['image']."' width='".$atts['width']."' height='".$atts['height']."' data-video='".$atts['video']."'/>
		</div>
		";
	}