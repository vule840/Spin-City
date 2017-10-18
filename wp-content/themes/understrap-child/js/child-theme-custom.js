jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    var figure = $(".video").hover( hoverVideo, hideVideo );

		function hoverVideo(e) {  
		    $('video', this).get(0).play(); 
		}

		function hideVideo(e) {
		    $('video', this).get(0).pause(); 
		}




		
});



