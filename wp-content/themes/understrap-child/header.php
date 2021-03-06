<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- SCROLLMAGIX -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TimelineMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script> -->
	
</head>

<body <?php body_class(); ?>>

<!-- BUTTON TO TOP -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
         document.getElementsByClassName('site-wrapper').classList.add(fixed-top);
    } else {
        document.getElementById("myBtn").style.display = "none";
    }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


</script>


<div class="hfeed site" id="page">
 
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		
		<button  onclick="topFunction()" class="btn-primary btn" id="myBtn" title="Go to top" style="display: none;"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		
	

<!-- *****************************
		COVER_home
***************************** -->
	<div class="site-wrapper">


      <div class="site-wrapper-inner">
 			
			
          <?php if (is_front_page()): ?>
		    
				<!-- <video autoplay loop muted poster="screenshot.jpg" id="background">
			    	<source src="wp-content/uploads/2017/11/Spin City_animacija.mp4" type="video/mp4">
				</video> --> 
				<section class="red">
					  <div class="container">
							<nav class="navbar navbar-expand-md navbar-dark ">

						<?php if ( 'container' == $container ) : ?>
							<div class="container">
						<?php endif; ?>

									<!-- Your site title as branding in the menu -->
									<?php if ( ! has_custom_logo() ) { ?>

										<?php if ( is_front_page() && is_home() ) : ?>

											<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
											
										<?php else : ?>

											<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
										
										<?php endif; ?>
										
									
									<?php } else {
										the_custom_logo();
									} ?><!-- end custom logo -->

								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<!-- The WordPress Menu goes here -->
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'navbar-nav',
										'fallback_cb'     => '',
										'menu_id'         => 'main-menu',
										'walker'          => new WP_Bootstrap_Navwalker(),
									)
								); ?>
								
							<?php if ( 'container' == $container ) : ?>
							</div><!-- .container -->
							<?php endif; ?>
							
							
							<!--  <li id="" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a class=" nav-link" href="#">POSTANI ČLAN</a></li> -->


							<!-- <a class="postani_clan" href="#">POSTANI ČLAN</a> -->
								
						
							
							<button type="button" class="btn btn-primary prijava mt-4">PRIJAVA</button>
							
						</nav><!-- .site-navigation -->



							<!-- https://codepen.io/AllThingsSmitty/pen/NbLLjb -->	
					  <!-- video from http://evb.com, I hope they don't mind much :) -->
					  <video poster="../spincity/wp-content/uploads/2018/01/spin_pocetna.jpg" loop preload autoplay>
					    <source id="source_polar_mp4" src="wp-content/uploads/2017/11/Spin City_animacija.mp4" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
					    <source id="source_polar_webm" src="https://d2pxo8g26zv991.cloudfront.net/wp-content/uploads/2014/10/HomeVideo_v04_1.webm" type="video/webm;codecs=&quot;vp8, vorbis&quot;">
					  </video>


					  		

				        </div><!-- conainter -->

						<div class="inner cover">

									<h1 class="cover-heading"><?php the_title();?></h1>
							            <p class="lead">SAZNAJ VIŠE  <!-- <i class="fa fa-play fa-2x text-center" aria-hidden="true"></i> --> 
											<div class="hi-icon-wrap hi-icon-effect-8">
												<a href="#kako" class="hi-icon hi-icon-chat">Archive</a>
											</div>
							            </p>

							            <!-- <p class="scroll-auto"> </p> -->
							          
					  <div class="spacer s2"></div>
<div id="trigger1" class="spacer s0"></div>
<div id="animate1" class="box2 skin">
	<p>You wouldn't like me, when I'm angry!</p>
	<a href="#" class="viewsource">view source</a>
</div>
<div class="spacer s2"></div>

						 </div>
						 	
				         <div class="container">
				         	
				      
				         	<!-- <div id="main-container">
										
										<img style="position: relative;" src="wp-content/uploads/2017/10/mali_auto1.png" alt="">

										<div id="test-box"><img src="http://localhost/spincity/wp-content/uploads/2017/11/auto_animacija.png"></div> 
											
										<?xml version="1.0" encoding="utf-8"?>

											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="185.5 383 603 7.5" style="enable-background:new 185.5 383 603 7.5;" xml:space="preserve">
											<style type="text/css">
												
													.st0{fill:#E21010;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0,6;}
												
													.st1{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:0,10;}
											</style>
											<rect x="171.5" y="521" class="st0" width="694.5" height="44.5"/>
											<line id="XMLID_27_" class="st1" x1="185.5" y1="386.6" x2="793" y2="386.6"/>
											</svg>

											
											<div class="hi-icon-wrap hi-icon-effect-8">
												<a href="#set-8" class="hi-icon hi-icon-archive">Archive</a>	
											</div>																		 	 
								</div>	 -->
								
      

				         </div>
						
					</section>
			

			<?php endif ?> 

      </div>

    </div>


<!-- *****************************
		COVER2 page
***************************** -->
<?php if (is_page() && !is_front_page() ): ?>	
	<div class="site-wrapper">

      <div class="site-wrapper-inner">

	
        <div class="container">
			<nav class="navbar navbar-expand-md navbar-dark ">

				<?php if ( 'container' == $container ) : ?>
					<div class="container">
				<?php endif; ?>

							<!-- Your site title as branding in the menu -->
							<?php if ( ! has_custom_logo() ) { ?>

								<?php if ( is_front_page() && is_home() ) : ?>

									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
									
								<?php else : ?>

									<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								
								<?php endif; ?>
								
							
							<?php } else {
								the_custom_logo();
							} ?><!-- end custom logo -->

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>
						
					<?php if ( 'container' == $container ) : ?>
					</div><!-- .container -->
					<?php endif; ?>
			
			
			<!--  <li id="" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a class=" nav-link" href="#">POSTANI ČLAN</a></li> -->


			<!-- <a class="postani_clan" href="#">POSTANI ČLAN</a> -->
		
			
			<button type="button" class="btn btn-primary prijava">PRIJAVA</button>
			
		</nav><!-- .site-navigation -->



 <div class="inner cover">
			<h1 class="cover-heading"><?php the_title();?></h1>
	            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. </p>
	            <p class="lead">

	             <!-- <a href="#" class="btn btn-lg btn-secondary">Learn more</a> --> 
	            </p>
	
          </div>

        </div>

      </div>

    </div>
 <?php endif ?>





</div><!-- .wrapper-navbar end -->