<?php
function chetan() {
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
}

add_action('wp_enqueue_scripts', 'chetan');
  
//Theme Setup

function Theme_setup() {

    //Navigation Menus
    register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
   
	
    ));
	
add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

}

add_action('after_setup_theme', 'Theme_setup');

//menu
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
} 

register_nav_menus( array(
    'primary'           => 'main manu',
    'footer_menu' => 'footer manu'
    
) );

//end

function phpinfotect_scripts(){

wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),null,'all');
wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', array(),null,'all');
wp_enqueue_style('web-fonts', get_template_directory_uri().'/css/aos.css', array(),null,'all');
wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css', array(),null,'all');


/*js-ragister*/


wp_enqueue_script('jquery-2.1.1', get_theme_file_uri('/js/jquery-2.1.1.js'), array(),false);
wp_enqueue_script('aos', get_theme_file_uri('/js/aos.js'), array(),false);
wp_enqueue_script('owl.carousel', get_theme_file_uri('/js/owl.carousel.js'), array(),false);
wp_enqueue_script('sticksy', get_theme_file_uri('/js/sticksy.js'), array(),false);
wp_enqueue_script('tab-content', get_theme_file_uri('/js/tab-content.js'), array(),false);

}
add_action('wp_enqueue_scripts','phpinfotect_scripts');


/*test*/

function testimonials_post_type() {

 $labels = array(

  'name'                => _x( 'testimonials', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'testimonials', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'testimonials', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent testimonials', 'acsweb' ),

  'all_items'           => __( 'All testimonials', 'acsweb' ),

  'view_item'           => __( 'View testimonials', 'acsweb' ),

  'add_new_item'        => __( 'Add New testimonials', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit testimonials', 'acsweb' ),

  'update_item'         => __( 'Update testimonials', 'acsweb' ),

  'search_items'        => __( 'Search testimonials', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'testimonials', 'acsweb' ),

  'description'         => __( 'testimonials news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-groups',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'testimonials', $args );

}

add_action( 'init', 'testimonials_post_type', 0 );



/*Gallery-image*/


function Gallery_post_type() {

 $labels = array(

  'name'                => _x( 'Gallery', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'Gallery', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent Gallery', 'acsweb' ),

  'all_items'           => __( 'All Gallery', 'acsweb' ),

  'view_item'           => __( 'View Gallery', 'acsweb' ),

  'add_new_item'        => __( 'Add New Gallery', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit Gallery', 'acsweb' ),

  'update_item'         => __( 'Update Gallery', 'acsweb' ),

  'search_items'        => __( 'Search Gallery', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'Gallery', 'acsweb' ),

  'description'         => __( 'Gallery news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-groups',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'Gallery', $args );

}

add_action( 'init', 'Gallery_post_type', 0 );

/*Team */

function Team_post_type() {

 $labels = array(

  'name'                => _x( 'Team', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'Team', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent Team', 'acsweb' ),

  'all_items'           => __( 'All Team', 'acsweb' ),

  'view_item'           => __( 'View Team', 'acsweb' ),

  'add_new_item'        => __( 'Add New Team', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit Team', 'acsweb' ),

  'update_item'         => __( 'Update Team', 'acsweb' ),

  'search_items'        => __( 'Search Team', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'Team', 'acsweb' ),

  'description'         => __( 'Team news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-groups',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'Team', $args );

}

add_action( 'init', 'Team_post_type', 0 );



/*jobs opening */

function jobs_post_type() {

 $labels = array(

  'name'                => _x( 'jobs', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'jobs', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'jobs', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent jobs', 'acsweb' ),

  'all_items'           => __( 'All jobs', 'acsweb' ),

  'view_item'           => __( 'View jobs', 'acsweb' ),

  'add_new_item'        => __( 'Add New jobs', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit jobs', 'acsweb' ),

  'update_item'         => __( 'Update jobs', 'acsweb' ),

  'search_items'        => __( 'Search jobs', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'jobs', 'acsweb' ),

  'description'         => __( 'jobs news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-groups',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'jobs', $args );

}

add_action( 'init', 'jobs_post_type', 0 );

/*Certifications*/

function Certifications_post_type() {

 $labels = array(

  'name'                => _x( 'Certifications', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'Certifications', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'Certifications', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent Certifications', 'acsweb' ),

  'all_items'           => __( 'All Certifications', 'acsweb' ),

  'view_item'           => __( 'View Certifications', 'acsweb' ),

  'add_new_item'        => __( 'Add New Certifications', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit Certifications', 'acsweb' ),

  'update_item'         => __( 'Update Certifications', 'acsweb' ),

  'search_items'        => __( 'Search Certifications', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'Certifications', 'acsweb' ),

  'description'         => __( 'Certifications news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-groups',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'Certifications', $args );

}

add_action( 'init', 'Certifications_post_type', 0 );

/*Clients*/



function Clients_post_type() {

 $labels = array(

  'name'                => _x( 'Clients', 'Post Type General Name', 'acsweb' ),

  'singular_name'       => _x( 'Clients', 'Post Type Singular Name', 'acsweb' ),

  'menu_name'           => __( 'Clients', 'acsweb' ),

  'parent_item_colon'   => __( 'Parent Clients', 'acsweb' ),

  'all_items'           => __( 'All Clients', 'acsweb' ),

  'view_item'           => __( 'View Clients', 'acsweb' ),

  'add_new_item'        => __( 'Add New Clients', 'acsweb' ),

  'add_new'             => __( 'Add New', 'acsweb' ),

  'edit_item'           => __( 'Edit Clients', 'acsweb' ),

  'update_item'         => __( 'Update Clients', 'acsweb' ),

  'search_items'        => __( 'Search Clients', 'acsweb' ),

  'not_found'           => __( 'Not Found', 'acsweb' ),

  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),

 );

 $args = array(

  'label'               => __( 'Clients', 'acsweb' ),

  'description'         => __( 'Clients news and reviews', 'acsweb' ),

  'labels'              => $labels,

  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),

  'taxonomies'          => array( 'genres' ), 

  'hierarchical'        => false,

  'public'              => true,

  'show_ui'             => true,

  'show_in_menu'        => true,

  'show_in_nav_menus'   => true,

  'show_in_admin_bar'   => true,



  'menu_position'       => 5,

  'menu_icon'           => 'dashicons-video-alt2',

  'can_export'          => true,

  'has_archive'         => true,

  'exclude_from_search' => false,

  'publicly_queryable'  => true,

  'capability_type'     => 'page',

  'taxonomies'          => array( 'category' ),

 );

 register_post_type( 'Clients', $args );

}

add_action( 'init', 'Clients_post_type', 0 );

/*for-feature image*/
add_theme_support( 'post-thumbnails' );

/*for-widged*/
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

/*acf*/




?>