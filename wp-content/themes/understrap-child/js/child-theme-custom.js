jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
    var figure = $(".video").hover( hoverVideo, hideVideo );

		function hoverVideo(e) {  
		    $('video', this).get(0).play(); 
		}

		function hideVideo(e) {
		    $('video', this).get(0).pause(); 
		}


//primjer za ovaj dolje video sa ovim gore kodom

 var figure = $(".video").hover( hoverVideo, hideVideo );

		function hoverVideo(e) {  
		    $('video', this).get(0).play(); 
		}

		function hideVideo(e) {
		    $('video', this).get(0).pause(); 
		}


//https://stackoverflow.com/questions/42575394/animate-to-right-on-scroll-down-and-animate-back-to-the-left-on-scroll-up

var animated = false; //added variable to control the animation
  $(window).scroll(function() {
    var wS = $(this).scrollTop();
    if (animated && wS <= 10) {
      $("#test-box").animate({
        'left': 700
      }, 800);
      animated = false; //animation ended
    }
    if (!animated && wS > 11) {
      $("#test-box").animate({
        'left': $('#main-container').width() - 50
      }, 800);
      animated = true; //it was animated
    }
  });





		
});



