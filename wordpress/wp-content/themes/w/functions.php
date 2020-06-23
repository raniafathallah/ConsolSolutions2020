 
<?php
require_once('wp_bootstrap_navwalker.php');
  // Theme Support
 //function wpb_theme_setup(){
 //  add_theme_support('post-thumbnails');
    // Nav Menus
  register_nav_menus(array(
     'primary' =>__('PRIMARY'),
       'footer' =>__('FOOTER'), 
       'twoelements' =>__('TWOELEMANTS')
   ));


add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));

function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
    /* start slider register */
  register_sidebar(array(
    'name'  => 'Slideritem1',
    'id'    => 'slideritem1',
    'before_widget' => '<div class="carousel-caption">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));

    
register_sidebar(array(
    'name'  => 'Slideritem2',
    'id'    => 'slideritem2',
    'before_widget' => '<div class="carousel-caption">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      /* end slider register */
      /* start about register */
    register_sidebar(array(
    'name'  => 'Aboutt',
    'id'    => 'aboutt',
    'before_widget' => '<div class="aboutt">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
  
      register_sidebar(array(
    'name'  => 'process_step1',
    'id'    => 'process_step1',
    'before_widget' => '<div class="abouttsteps">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));     
    
         register_sidebar(array(
    'name'  => 'process_step2',
    'id'    => 'process_step2',
    'before_widget' => '<div class="abouttsteps">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  )); 
         register_sidebar(array(
    'name'  => 'process_step3',
    'id'    => 'process_step3',
    'before_widget' => '<div class="abouttsteps">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  )); 
    
    /* end about register */
     /* start  success stories  register */
       register_sidebar(array(
    'name'  => 'Success_stories',
    'id'    => 'success_stories',
    'before_widget' => '<div class="Success_stories-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      /* end  success stories  register */
      /* start  contact register */
       register_sidebar(array(
    'name'  => 'Contact_header',
    'id'    => 'contact_header',
    'before_widget' => '<div class="con-head">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
       register_sidebar(array(
    'name'  => 'Contact_footer',
    'id'    => 'contact_footer',
    'before_widget' => '<div class="con-foot">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
    register_sidebar(array(
    'name'  => 'Contact_map1',
    'id'    => 'contact_map1',
    'before_widget' => '<div class="con-foot">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
    register_sidebar(array(
    'name'  => 'Contact_map2',
    'id'    => 'contact_map2',
    'before_widget' => '<div class="con-foot">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
/*    register_sidebar(array(
    'name'  => 'Contact_map3',
    'id'    => 'contact_map3',
    'before_widget' => '<div class="con-foot">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));*/
       register_sidebar(array(
    'name'  => 'Contactthreediv1',
    'id'    => 'contactthreediv1',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
       register_sidebar(array(
    'name'  => 'Contactthreediv2',
    'id'    => 'contactthreediv2',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
           register_sidebar(array(
    'name'  => 'Contactthreediv12',
    'id'    => 'contactthreediv12',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
       register_sidebar(array(
    'name'  => 'Contactthreediv22',
    'id'    => 'contactthreediv22',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
           register_sidebar(array(
    'name'  => 'Contactthreediv13',
    'id'    => 'contactthreediv13',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
       register_sidebar(array(
    'name'  => 'Contactthreediv23',
    'id'    => 'contactthreediv23',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
       register_sidebar(array(
    'name'  => 'Contactthreediv3',
    'id'    => 'contactthreediv3',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
   /* end  contact register */
   /* start product register */
  register_sidebar(array(
    'name'  => 'Product1',
    'id'    => 'product1',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      register_sidebar(array(
    'name'  => 'Product2',
    'id'    => 'product2',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      register_sidebar(array(
    'name'  => 'Product3',
    'id'    => 'product3',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      register_sidebar(array(
    'name'  => 'Product4',
    'id'    => 'product4',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      register_sidebar(array(
    'name'  => 'Product5',
    'id'    => 'product5',
    'before_widget' => '<div class="con-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      register_sidebar(array(
    'name'  => 'Product1',
    'id'    => 'product1',
    'before_widget' => '<div class="pro-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
    
    
    /* start  footer register */ 
    
         register_sidebar(array(
    'name'  => 'Footer_contact',
    'id'    => 'footer_contact',
    'before_widget' => '<div class="foot-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
register_sidebar(array(
    'name'  => 'Footer_map',
    'id'    => 'footer_map',
    'before_widget' => '<div class="foot-in-in">',
    'after_widget'  => '</div>',
    'before_title'  => '<i>',
    'after_title'   => '</i>'
  ));
      /* end  footer register */ 
}

add_action('widgets_init', 'wpb_init_widgets');


function consol_load_scripts(){
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery' , get_template_directory() . 'jquery-3.3.1.min.js', false, '1.11.3', true );
    wp_enqueue_script( 'jquery' );
    
}
add_action( 'wp_enqueue_scripts', 'consol_load_scripts' );

function enqueue_our_required_stylesheets(){
    /*	wp_register_style('font-awesome',get_template_directory() . '/css/fontawesome.min.css');
    	wp_enqueue_style('font-awesome');*/
   /* font_aws_modify*/
    wp_register_style('font-awesome_sty',get_template_directory() . '/css/font_aws_modify.css');
    	wp_enqueue_style('font-awesome_sty');
/*	wp_enqueue_style('font-awesome', get_stylesheet_directory().'/css/font-awesome.css');*/ 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

function remove_consol_generator(){
  
    return '';
}
add_filter('the_generator','remove_consol_generator');




/* expert change default value */

/*function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');
 */
// Changing excerpt more
/*
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 100);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a class="more" href="'.get_the_permalink().'">more</a>';
return $excerpt;
}



/* for security */

function remove_wordpress_version_number() {
return '';
}
add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_scripts');
add_filter( 'script_loader_src', 'remove_version_from_scripts');


