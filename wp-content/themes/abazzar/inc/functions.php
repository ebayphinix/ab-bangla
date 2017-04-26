<?php

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "Swapno71";
    $developer_uri = "http://msoel.com";
    $shortname = "dm";
    $version = '1.71';
    load_theme_textdomain( 'devdmbootstrap3', get_template_directory() . '/languages' );

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';


////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );
        wp_enqueue_style( 'bootstrap.css');
        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');

//Editor Style
add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_js()
    {
        global $version;
        wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/bootstrap.js',array( 'jquery' ),$version,true );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_js');

////////////////////////////////////////////////////////////////////
// Add Title Tag Support with Regular Title Tag injection Fall back.
////////////////////////////////////////////////////////////////////

function devdmbootstrap3_title_tag() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'devdmbootstrap3_title_tag' );

if(!function_exists( '_wp_render_title_tag')) {

    function devdmbootstrap3_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
    }
    add_action( 'wp_head', 'devdmbootstrap3_render_title' );

}

////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');
    require_once('lib/bootstrap-custom-menu-widget.php');

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
            )
        );

////////////////////////////////////////////////////////////////////
// Register the Sidebar(s)
////////////////////////////////////////////////////////////////////

        register_sidebar(
            array(
            'name' => 'Right Sidebar',
            'id' => 'right-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
register_sidebar(
            array(
            'name' => 'Right Sidebar1',
            'id' => 'right-sidebar1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
		register_sidebar(
            array(
            'name' => 'Right Sidebar2',
            'id' => 'right-sidebar2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(
            array(
            'name' => 'Left Sidebar',
            'id' => 'left-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
		register_sidebar(
				array(
				'name' => 'footer 1st',
				'id' => 'footer1',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			));
    register_sidebar(
                array(
                'name' => 'footer 3rd',
                'id' => 'footer3',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            ));
			register_sidebar(
                array(
                'name' => 'footer 4th',
                'id' => 'footer4',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            ));
    register_sidebar(
                array(
                'name' => 'footer 2nd',
                'id' => 'footer2',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            ));

	register_sidebar(
					array(
					'name' => 'Right article',
					'id' => 'Right_article',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget' => '</aside>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
////////////////////////////////////////////////////////////////////
// Register hook and action to set Main content area col-md- width based on sidebar declarations
////////////////////////////////////////////////////////////////////

add_action( 'devdmbootstrap3_main_content_width_hook', 'devdmbootstrap3_main_content_width_columns');

function devdmbootstrap3_main_content_width_columns () {

    global $dm_settings;

    $columns = '12';

    if ($dm_settings['right_sidebar'] != 0) {
        $columns = $columns - $dm_settings['right_sidebar_width'];
    }

    if ($dm_settings['left_sidebar'] != 0) {
        $columns = $columns - $dm_settings['left_sidebar_width'];
    }

    echo $columns;
}

function devdmbootstrap3_main_content_width() {
    do_action('devdmbootstrap3_main_content_width_hook');
}

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

  //  add_theme_support( 'post-thumbnails' );
   // set_post_thumbnail_size(189,115, true);
	
	// post thumbnail support
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'post-thumb',189,115 );
	add_image_size( 'home-thumb', 262, 200, true );
	add_image_size( 'home-1st-thumb', 408, 300, true );
	add_image_size( 'home-thumb-6', 378, 189, true );
	add_image_size( 'home-thumb-10', 408, 204, true );
	add_image_size( 'home-list-6', 140, 70, true );
}

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> বিস্তারিত...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/*soel*/
$__banglaDay1 = array('5'=>'শুক্রবার','6'=>'শনিবার','0'=>'রবিবার','1'=>'সোমবার','2'=>'মঙ্গলবার','3'=>'বুধবার','4'=>'বৃহষ্পতিবার');
$__banglaDay = array('Fri'=>'শুক্রবার','Sat'=>'শনিবার','Sun'=>'রবিবার','Mon'=>'সোমবার','Tue'=>'মঙ্গলবার','Wed'=>'বুধবার','Thu'=>'বৃহষ্পতিবার');
$__banglaNumber =array('0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯');
$__banglaGerMonth = array('01'=>'জানুয়ারী','02'=>'ফেব্রুয়ারী','03'=>'মার্চ','04'=>'এপ্রিল','05'=>'মে','06'=>'জুন' ,'07'=>'জুলাই','08'=>'আগস্ট','09'=>'সেপ্টেম্বর','10'=>'অক্টোবর','11'=>'নভেম্বর','12'=>'ডিসেম্বর');
$__banglaMonth = array('বৈশাখ','জৈষ্ঠ্য','আষাঢ়','শ্রাবণ','ভাদ্র','আশ্বিন','কার্তিক','অগ্রাহায়ন','পৌষ','মাঘ','ফাল্গুন','চৈত্র');
function _banglaDay($v,$isShort=false){
	global $__banglaDay;
	return $isShort?rtrim($__banglaDay[$v],'বার'):$__banglaDay[$v];
	}
function _banglaNumber($v){
	global $__banglaNumber;
	for( $i=0; $i<10; $i++ )
		$v = str_replace("$i",$__banglaNumber[$i],$v);
	return $v;
	}
function _banglaMonth($v){
	global $__banglaGerMonth;
	return $__banglaGerMonth[$v];
	}
function catbyid($catid)
				{
				?>
	<a href="<?php echo get_category_link($catid);?>"><?php echo get_the_category_by_id($catid);?></a>
 <?php };
?>