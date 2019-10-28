<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');

/*-------------------------------------

Adds style sheet and JavaScript files

-----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');

  /*-------------------------------------

  Custom Header Logo -- creates the option to add a header image in the WordPress dashboard

  -----------------------------------------*/

  $custom_image_header = array(
    'width' => 225,
    'height' => 120,
    'uploads' => true,
  );

  add_theme_support('custom-header', $custom_image_header);

  /*-------------------------------------

  Add menus to theme

  -----------------------------------------*/

  function register_my_menus(){
    register_nav_menus(
      array(
        'top-menu' => ('Top Menu'),
        'footer-left' => ('Left footer menu'),
        'footer-middle' => ('Middle footer menu'),
        'footer-right' => ('Right footer menu')
        )
      );
  }

  add_action('init', 'register_my_menus');

  /*-------------------------------------

  Add widget areas to theme

  -----------------------------------------*/

  function blank_widgets_init(){

    register_sidebar(array(
      'name'            =>    ('Hero Image'),
      'id'              =>    'hero-image',
      'description'     =>    'Hero image on the home page',
      'before_widget'   =>    '<div class="widget-hero-image">',
      'after_widget'    =>    '</div',
      'before_title'    =>    '<h3 class="hero-image-widget-title">',
      'after_title'     =>    '</h3'
    ));

    register_sidebar(array(
      'name'            =>    ('About Us'),
      'id'              =>    'about-us',
      'description'     =>    'Home page about us section',
      'before_widget'   =>    '<div class="widget-about-us">',
      'after_widget'    =>    '</div',
      'before_title'    =>    '<h3 class="about-us-widget-title">',
      'after_title'     =>    '</h3'
    ));

    register_sidebar(array(
      'name'            =>    ('Bottom left home page'),
      'id'              =>    'bottom-left-home-page',
      'description'     =>    'Bottom left section on the home page',
      'before_widget'   =>    '<div class="widget-bottom-left">',
      'after_widget'    =>    '</div',
      'before_title'    =>    '<h3 class="bottom-left-widget-title">',
      'after_title'     =>    '</h3>'
    ));

    register_sidebar(array(
      'name'            =>    ('Bottom middle home page'),
      'id'              =>    'bottom-middle-home-page',
      'description'     =>    'Bottom middle section on the home page',
      'before_widget'   =>    '<div class="widget-bottom-middle">',
      'after_widget'    =>    '</div',
      'before_title'    =>    '<h3 class="bottom-middle-widget-title">',
      'after_title'     =>    '</h3'
    ));

    register_sidebar(array(
      'name'            =>    ('Bottom right home page'),
      'id'              =>    'bottom-right-home-page',
      'description'     =>    'Bottom right section on the home page',
      'before_widget'   =>    '<div class="widget-bottom-right">',
      'after_widget'    =>    '</div',
      'before_title'    =>    '<h3 class="bottom-right-widget-title">',
      'after_title'     =>    '</h3'
    ));

    //Sidebar Widget
    register_sidebar(array(
      'name'          => ('Right Sidebar'),
      'id'            => 'right-sidebar',
      'description'   => 'Right sidebar widget area',
      'before_widget' => '<div class="widget-right-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="right-sidebar-widget-title">',
      'after_title'   => '</h3>'
    ));

    //Left footer widget
    register_sidebar(array(
      'name'          => ('Left Footer'),
      'id'            => 'left-footer',
      'description'   => 'Left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Middle footer widget
    register_sidebar(array(
      'name'          => ('Middle Footer'),
      'id'            => 'middle-footer',
      'description'   => 'Middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-middle">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Right footer widget
    register_sidebar(array(
      'name'          => ('Right Footer'),
      'id'            => 'right-footer',
      'description'   => 'Right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }
  add_action('widgets_init', 'blank_widgets_init');

?>
