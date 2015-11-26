<?php
//*front-page.php

//remove genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

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
	<!-- Slider -->
	<div class="front-page-slider">
		<div class="slider" id="slider1">
			<div class="slider-text">
				<div class="slider-heading" id="slider1-heading">
					<h1>VESTIBULUM</h1>
				</div>
				<div class="slider-p">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
		<div class="slider" id="slider2">
			<div class="slider-text">
				<div class="slider-heading" id="slider2-heading">
					<h1>Quam tu ponis</h1>
				</div>
				<div class="slider-p">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
		<div class="slider" id="slider3">
			<div class="slider-text">
				<div class="slider-heading" id="slider3-heading">
					<h1>Negare non possum</h1>
				</div>
				<div class="slider-p">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END Slider -->

	<!-- Services Section -->
	<div class="top-services wrap">
		<div id="top-services-left">
			<h3>Some of our Top Services</h3>
			<p>Ex eorum enim scriptis et institutis cum omnis doctrina liberalis, omnis historia. Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. </p>
		</div>
		<div id="top-services-right"><h2><a href="#">View More</a></h2></div>
	</div>

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
	<?php
}
genesis();
