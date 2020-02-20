<?php
add_action( 'wp_register_scripts', 'startertheme_register_scripts' );
function startertheme_register_scripts(){
    

    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js' );
    wp_register_script( 'skeleton-js', get_template_directory_uri() . '/js/script.js' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Public+Sans:400,700&display=swap');
    wp_register_style( 'fontawesome-css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style( 'skeleton-css', get_template_directory_uri() . '/style.css');
}

//Enqueue scripts and styles for use
add_action( 'wp_enqueue_scripts', 'startertheme_load_scripts' );
function startertheme_load_scripts(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Public+Sans:400,700&display=swap');
    wp_enqueue_style( 'fontawesome-css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'skeleton-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'skeleton-js', get_template_directory_uri() . '/js/script.js' );
    wp_enqueue_script( 'skeleton-home-js', get_template_directory_uri() . '/js/homeScript.js' );
    
}


//Register menus
add_action( 'init', 'startertheme_register_menus' );
function startertheme_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('utility-menu',__( 'Utility Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}


add_theme_support( 'post-thumbnails', array( 'post', 'slider' ) ); // Posts and Movies
add_image_size( 'slider', 1000, 400, array( 'center', 'top' ) ); // Hard crop left top




function skeleton_custom_logo_setup() {
    $defaults = array(
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'skeleton_custom_logo_setup' );




//Add widget support
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Widgetized Area',
        'id'   => 'widgetized-area',
        'description'   => 'This is a widgetized area.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}



//Custom Post Types
function starter_slider_cpt() {

    $post_type = 'slider';
  

        $labels = array(
            'name'=> __( 'Sliders' ),
            'singular_name' => __( 'Slider' ),
            'add_new' => __('Add New Slider'),
            'add_new_item' => __('Add New Slider'),
            'edit_item' => __('Edit Slider'),
            'new_item' => __('Add New Slider'),
            'view_item' => __( 'View Slider' ),
            'view_items' => __('View Sliders'),
            'search_items' => __('Search Sliders'),
            'not_found' => __('Sliders Not Found'),
            'not_found_in_trash' => __('No Sliders Found in Trash')
        );


          $args = array(
            'labels'        => $labels,
            'description'   => 'Slides that are featured in the bootstrap carousel',
            'public'        => true,
            'menu_position' => 3,
            'supports'      => array( 'title', 'editor', 'thumbnail' ),
            'has_archive'   => false,

    );

    register_post_type($post_type, $args);


}
add_action( 'init', 'starter_slider_cpt' );



;?>