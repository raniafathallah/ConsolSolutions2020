<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since  x 1.0
 */

get_header(); ?>

<style>
        body> font{
        display: none !important;
    }
@media (min-width:300px) and (max-width:768px){
h1,.h1 { 
    padding-top: -17px !important;
    font-size: 2.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}

}
  

</style>


 
<?php get_template_part('topnav'); ?>

<?php if(is_page('ev')){?>
   <?php get_header(); ?>
    <section class="home" id="home">
        <?php get_template_part('slide'); ?>   
    </section>
<?php } ?>
<!--<?php if(is_page('eev')){?>
    <section class="home" id="home">
        <?php get_template_part('slider'); ?>   
    </section>
<?php } ?>-->

<?php if(is_page('Consol Hakkında')){?>      
         <?php get_template_part('aboutt'); ?> 
<?php } ?>

 <?php if(is_page('müşteri hikayeleri')){?>
        
    <section  class="success_stories   wow lightSpeedIn " id="successstories">
           <?php get_template_part('successstories'); ?> 
     </section>
 <?php } ?> 

 <?php if(is_page('Hizmetler')){?>
    <section class="our_products container-fluid  wow lightSpeedIn " id="products">
        <?php get_template_part('ourproduct'); ?> 
  
    
    </section>
<?php } ?>
 <?php if(is_page('ne yapıyoruz biz')){?>
    <section class="our_clients  wow lightSpeedIn" id="clients">
        
         <?php get_template_part('clients'); ?> 
     
    </section>
  <?php } ?>  
 <?php if(is_page('bize bağla')){?>
    <section class="contact_us  wow lightSpeedIn " id="contact">
      <?php get_template_part('contact'); ?>
        </section>
<?php } ?>
<?php get_template_part('foot');?>
<?php get_footer();?>  