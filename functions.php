<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//enqueues our external font awesome stylesheet
function enqueue_font_awesome_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_font_awesome_stylesheets');

//edit content of footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'custom_footer' );
function custom_footer(){
	?>
	<style type="text/css">
	.site-footer i{
		font-size: 30px;
		margin: 0 5px;
	}
	</style>
	<div>
		<span class="alignleft">
			MODUS Versus &copy;	 <?php echo date('Y'); ?>
		</span>
		<span class="alignright">
			<a href="#"><i class="fa fa-facebook-official"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-rss"></i></a>
		</span>
	</div>
	<?php
}

// Register JS Scripts and CSS: Slick
function register_script_slick()
{
    wp_register_script( 'slick', 'https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array( 'jquery' ), null, true);
    wp_register_style( 'slick-css', 'https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), null, 'all' );
}
add_action( 'wp_enqueue_scripts', 'register_script_slick' );