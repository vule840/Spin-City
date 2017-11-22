<?php
/**
 * Template Name: Kontakt
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<!-- ************************
			
			HEADER BG

	*************************** -->

	<!-- <div class="cover-container">

       
          <div class="inner cover">
           
          	 <h1 style="text-align: center;"><span style="color: #ffffff;">Zakorači u novu eru urbane mobilnosti</span></h1>

          </div>

        </div> -->
	

	<!-- ************************
			
			KONTAKT_NAŠA VIZIJA

	*************************** -->

	<div class="fluid-conteiner" id="vizija">
		<!-- PRVI RED -->

		<div class="row ponude hidden-lg-down">
			<div class="col-xl-6 col-sm-12 centar">
				<div class="centriran">
					<h2 class="naslov2">Naša vizija</h2>	

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. </p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc lobortis elit at tortor sagittis dictum. </p>

				</div>
				
		
				</div>
			<div class="col-xl-6 col-sm-12 lijevo"><img style="float:right" class="srednja_slika" src="../wp-content/uploads/2017/11/naša-vizija.jpg" alt=""></div>	
		</div>

		<!-- DRUGI RED -->

		<div class="row ponude hidden-lg-down">	
		<div class="col-xl-6 col-sm-12">

			<img src="../wp-content/uploads/2017/11/Korisnicka-podska.jpg" alt="">
		</div>

			<div class="col-xl-6 col-sm-12 centar">
				
					<div class="centriran1">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin mollis sodales maximus. Duis vitae tortor commodo sapien lacinia pellentesque vitae non quam. Nunc commodo justo nisi, sed ullamcorper ex tincidunt at.  </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis elit at tortor sagittis dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  </p>
					<h3 class="naslov2">Korisnička podrška</h3>
						<p>email: zagreb@spincity.hr</p>
						<p>tel: 01/444 0051</p>
					<h3 class="naslov2">Prijava štete</h3>
						<p>tel: 01/444 0051</p>
				</div>
					
			</div>	
			
		</div>


	</div>	
		
	<!-- ************************
			
			KONTAKT_KONTAKTIRAJTE

	*************************** -->
		<div class="fluid-conteiner" id="kontaktirajte">

			<h2 class="text-center py-5 tekst_bj_boja">Kontaktirajte nas</h2>
			<div class="container">

					<div class="row kontakt">
						<!-- <div class="col-xl-12 col-sm-12">
						ssdf
					</div> -->
					
					    <div style="padding-left:0;" class="col-4">
					    <input type="text" class="form-control" placeholder="Vaše ime">
					  </div>
					  <div class="col-4">
					    <input type="text" class="form-control" placeholder="Vaš email">
					  </div>
					  <div style="padding-right:0;" class="col-4">
					    <input type="text" class="form-control" placeholder="Naziv poruke">
					  </div>
					  


					
						   <!-- <label for="exampleTextarea">Example textarea</label>--> 
						    <textarea placeholder="Poruka" class="form-control my-4" id="exampleTextarea" rows="3"></textarea>
				<div class="col-md-12 text-center py-4"> <button type="submit" class="btn btn-primary">Pošalji</button></div>
					


				</div>

			</div>
		
		</div>
	<!-- ************************
			
			KONTAKT_MAPA

	*************************** -->
		<div class="fluid-conteiner" id="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.3084839690564!2d15.921689315856751!3d45.80507997910636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d1344b349acb%3A0x727904eafcb968d4!2sSpin+City+-+car+sharing!5e0!3m2!1shr!2shr!4v1507634549112" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>
		
	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
