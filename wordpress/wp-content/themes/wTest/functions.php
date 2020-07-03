 
<?php
require_once('wp_bootstrap_navwalker.php');
  // Theme Support
 //function wpb_theme_setup(){
 //  add_theme_support('post-thumbnails');
    // Nav Menus
  register_nav_menus(array(
     'primary' =>__('PRIMARY'),
       'footer' =>__('footer'), 
   ));




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


