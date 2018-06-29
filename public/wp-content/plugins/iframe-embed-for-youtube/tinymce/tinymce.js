function init() {
	tinyMCEPopup.resizeToInnerSize();
}

function insertIEFYLink() {
	
	var tagtext;
	
		var videourl = document.getElementById('videourl').value;
		if (videourl != '' )
			tagtext = "[yframe url='" + videourl + "']";
		else
			tinyMCEPopup.close();
	
	if(window.tinyMCE) {
		//TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
		//execInstanceCommand is undefined from tinymce version 4
		if (typeof window.tinyMCE.execInstanceCommand != 'undefined') {
			window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext);
        }
		else {
			if (typeof window.tinyMCE.execCommand != 'undefined') {
				window.tinyMCE.get('content').execCommand('mceInsertContent', false, tagtext);
			}
        }
		//window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext);
		//Peforms a clean up of the current editor HTML. 
		//tinyMCEPopup.editor.execCommand('mceCleanup');
		//Repaints the editor. Sometimes the browser has graphic glitches. 
		tinyMCEPopup.editor.execCommand('mceRepaint');
		tinyMCEPopup.close();
	}
	return;
}
