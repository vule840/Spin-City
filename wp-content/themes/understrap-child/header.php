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
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
 
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

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


				        </div>



					  <!-- video from http://evb.com, I hope they don't mind much :) -->
					  <video loop preload autoplay>
					    <source id="source_polar_mp4" src="wp-content/uploads/2017/11/Spin City_animacija.mp4" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
					    <source id="source_polar_webm" src="https://d2pxo8g26zv991.cloudfront.net/wp-content/uploads/2014/10/HomeVideo_v04_1.webm" type="video/webm;codecs=&quot;vp8, vorbis&quot;">
					  </video>


					  <div class="inner cover">

									<h1 class="cover-heading"><?php the_title();?></h1>
							            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. </p>

							            <!-- <p class="scroll-auto"> </p> -->
							             
							            	<div id="main-container">
											  <div id="test-box">test</div>
											</div>	
        
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

      <!--   <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div> -->  

        </div>

      </div>

    </div>
	<?php endif ?>



	</div><!-- .wrapper-navbar end -->