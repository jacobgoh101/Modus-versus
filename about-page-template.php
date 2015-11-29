<?php
//* Template Name: About Page

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//enqueue Slick
function enqueue_script_slick(){
	//GSAP
	wp_enqueue_script( 'slick');
	wp_enqueue_style( 'slick-css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_script_slick');

//enqueue front-page.css and slick-theme.css
function enqueue_front_page_css()
{
	wp_register_style( 'front-page-css', get_stylesheet_directory_uri() . '/css/front-page.css', array(), null, 'all' );
	wp_register_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null, 'all' );

	//front-page.css comes later for overwriting purpose
	wp_enqueue_style( 'slick-theme-css' );
	wp_enqueue_style( 'front-page-css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_css' );

//enqueue front-page.js
function enqueue_front_page_script()
{
	wp_register_script( 'front-page-script', get_stylesheet_directory_uri() . '/js/front-page.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( 'front-page-script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_script' );

add_action('genesis_after_header','front_page_html');
function front_page_html(){
	?>
	<style type="text/css">
		.content {
			display: none;
		}
	</style>
	

	<!-- About Section -->
	<div class="about-why">
		<h1>Why MODUS Versus</h1>
		<p>Scio enim esse quosdam, qui quavis lingua philosophari possint; Negat enim summo bono afferre incrementum diem. </p>
		<img src="http://localhost/modus-versus/wp-content/themes/modus-versus/images/front-page/why_choose_modus_versus.jpg" alt="why_choose_modus_versus">
	</div>

	<!-- Services Section -->
	<br/><br/>
	<div class="wrap">
		<div class="service-column">
			<i class="fa fa-thumbs-o-up"></i>
			<h3>Service 1</h3>
			<p>Duo Reges: constructio interrete. Quamquam id quidem, infinitum est in hac urbe.</p>
			<h5><a href="#">Read More</a></h5>
		</div>
		<div class="service-column">
			<i class="fa fa-key"></i>
			<h3>Service 2</h3>
			<p>Quo tandem modo? Nihilne est in his rebus, quod dignum libero aut indignum esse ducamus? </p>
			<h5><a href="#">Read More</a></h5>
		</div>
		<div class="service-column">
			<i class="fa fa-flag"></i>
			<h3>Service 3</h3>
			<p>Duo Reges: constructio interrete. Quamquam id quidem, infinitum est in hac urbe.</p>
			<h5><a href="#">Read More</a></h5>
		</div>
		<div class="service-column">
			<i class="fa fa-flask"></i>
			<h3>Service 4</h3>
			<p>Quo tandem modo? Nihilne est in his rebus, quod dignum libero aut indignum esse ducamus? </p>
			<h5><a href="#">Read More</a></h5>
		</div>
	</div>
	<!-- END Services Section -->

	<div class="about-more">
			<div class="about-more-testimonial">
				<h3>What Clients say</h3>
				<blockquote>At hoc in eo M. Sin aliud quid voles, postea. Quorum sine causa fieri nihil putandum est. Equidem, sed audistine modo de Carneade? Urgent tamen et nihil remittunt.</blockquote>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;</p><h4>John Doe</h4>
			</div>
		<div class="about-more-bottom">
			<div class="about-more-bottom-skill">
				<h2><span class="js-counter">50</span></h2>
				<h5>SUSPEISSE</h5>
			</div>
			<div class="about-more-bottom-skill">
				<h2><span class="js-counter">70</span></h2>
				<h5>MAECENAS</h5>
			</div>
			<div class="about-more-bottom-skill">
				<h2><span class="js-counter">80</span></h2>
				<h5>ALIQUAM</h5>
			</div>
			<div class="about-more-bottom-skill">
				<h2><span class="js-counter">100</span></h2>
				<h5>HABITASSE</h5>
			</div>
		</div>
	</div>
	<!-- END About Section -->


	<!-- Out Client Section -->
	<h1 id="our-client">Our Happy Clients</h1>
	<div class="our-client">
		<div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div><div id="our-client-logo-1"></div><div id="our-client-logo-2"></div><div id="our-client-logo-3"></div><div id="our-client-logo-4"></div><div id="our-client-logo-5"></div><div id="our-client-logo-6"></div><div id="our-client-logo-7"></div><div id="our-client-logo-8"></div>
	</div>
	<!-- END Our Client Section -->
	<?php
}
genesis();
