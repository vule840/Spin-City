
jQuery(document).ready(function($) {
    
  //SCROLL MAGIC
  // init controller
  // build scene
// init controller
  var controller = new ScrollMagic.Controller();

  // build scene
    var tween = TweenMax.fromTo("#animate1", 1,
                {left: -500},
                {left: 500,  ease: Circ.easeInOut}
              );
 
    var scene = new ScrollMagic.Scene({
              triggerElement: "#trigger1"
            })
            .setTween(tween) // trigger a TweenMax.to tween
            .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
            .addTo(controller);

     //***************************                         

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

/*var animated = false; //added variable to control the animation
  $(window).scroll(function() {
    var wS = $(this).scrollTop();
    if (animated && wS <= 10) {
      $("#test-box").animate({
        'right': 0
      }, 1200);
      animated = false; //animation ended
    }
    if (!animated && wS > 11) {
      $("#test-box").animate({
        'right': $('#main-container').width() - 0
      }, 1200);
      animated = true; //it was animated
    }
  });*/

 


    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
            $('.navbar').addClass('fixed-top');  
        } else {
            document.getElementById("myBtn").style.display = "none";
            $('.navbar').removeClass('fixed-top');
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        // For Chrome, Safari and Opera 
        document.documentElement.scrollTop = 0;
        // For IE and Firefox
    }



		
});



