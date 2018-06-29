jQuery(document).on('click','.ib-play',function(){
	var video_width = jQuery(this).siblings('.ib-video-placeholder').attr('width');
	var video_height = jQuery(this).siblings('.ib-video-placeholder').attr('height');
	var video_link = jQuery(this).siblings('.ib-video-placeholder').attr('data-video');
	var htm = '<iframe width="'+video_width+'" height="'+video_height+'" src="https://www.youtube.com/embed/'+video_link+'?rel=0&showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';
	jQuery(this).parent('.ib-youtube-wrapper').html(htm);
});