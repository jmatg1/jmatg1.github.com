=== WP YouTube Video Optimizer ===
Contributors: sourabh.asct, measuremarketing
Donate link: https://measuremarketing.net/
Tags: YouTube,video,performance,embed,speed,multiple YouTube video, YouTube video, optimised YouTube video,
Requires at least: 3.0.0
Tested up to: 4.9.6
Requires PHP: 5.2.4
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The #1 wordpress plugin that helps you optimize the YouTube videos on your site by using simple shortcode(s). 

== Description ==

This plugin gives you the ability to optimize the YouTube videos on your website. By default if you use the direct embeded code in your website, then it downloads the YouTube player on every occurance of YouTube video.

This plugin show a video thumbnail to your viewer and loads the YouTube video only when user click on the play icon. 


= How does it work? =
Untill the user click on the play button, the YouTube will not load on the website.

<p style="padding-top:1em;">Short code Pattern: </p>
`[ib_youtube video="<video_id>" image="<image_placeholder_link>" width="640" height="360" thumbnail="maxresdefault"]`

<p style="padding-top:1em;">Example 1 - With Embed Link and Custom Banner: </p>
`[ib_youtube video="https://www.youtube.com/embed/ZfaqLBRP5Yo" image="http://example.com/image.jpg"]`

<p style="padding-top:1em;">Example 2 - With a normal YouTube watch link and no banner(Thumbnail generated automatically): </p>
`[ib_youtube video="https://www.youtube.com/watch?v=ZfaqLBRP5Yo"]`

<p style="padding-top:1em;">Example 3 - With customized width and height for your Video: </p>
`[ib_youtube video="https://www.youtube.com/watch?v=ZfaqLBRP5Yo" width="560" height="315"]`


= Parameters =

**- video (Required)**: You can use either YouTube video id or directly add the url.

**- image (Optional)**: Full URL of the thumbnail url. By default it shows the thumbnail of the video.

**- width (Optional)**: Width of the image/video. Default value is 640px.

**- height (Optional)**: Height of the image/video. Default value is 360px.

**- thumbnail (Optional)**: Manage the thumbnail of the video image. you can follow the instruction below to choose the size:

<p>Each YouTube video has generated 4 images. They are predictably formatted as follows:</p>
`[ib_youtube video="<video_id>" thumbnail="0" height="360"] 
[ib_youtube video="<video_id>" thumbnail="1" height="360"]
[ib_youtube video="<video_id>" thumbnail="2" height="360"]
[ib_youtube video="<video_id>" thumbnail="3" height="360"]`
	
<p>You can also choose different sizes of the images:</p>
`Default Size: [ib_youtube video="<video_id>" thumbnail="default" height="360"]
SD quality: [ib_youtube video="<video_id>" thumbnail="sddefault" height="360"]
HD quality: [ib_youtube video="<video_id>" thumbnail="hqdefault" height="360"]
Medium quality: [ib_youtube video="<video_id>" thumbnail="mqdefault" height="360"]
Maximum resolution: [ib_youtube video="<video_id>" thumbnail="maxresdefault" height="360"]`

**Contributors**
* This plugin was developed by <a href="https://measuremarketing.net/">Measure Marketing Results Inc.</a>.

== Installation ==

1. Upload the plugin folder to the /wp-content/plugins/ directory.
2. Activate the plugin through the Plugins menu in WordPress.
3. Thats it! you can now use the shortcode to use this plugin.

== Screenshots ==

1. Usage of shotcode
2. Hover effect

== Changelog ==

= 1.2 =
* Fix bugs

= 1.1 =
* Major changes

= 1.0.3 =
* Performance Optimization.

= 1.0.2 =
* Removed Console logs.

= 1.0.0 =
* Initial commit.

== Upgrade Notice ==

= 1.0.2 =
* Essential Commit.