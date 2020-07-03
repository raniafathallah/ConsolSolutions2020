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
 * @package Consol Solutions
 * @subpackage Consol
 * @since   Consol 1.0
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


 
<?php get_template_part('TemplateParts/topnav'); ?>

<?php if(is_page('ev')){?>
   <?php get_header(); ?>
    <section class="home" id="home">

       <!-- <?php get_template_part('TemplateParts/customposts'); ?>-->
        <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
 <a href="<?php echo get_permalink(); ?>"> 

                <div class="nabiz_des " >
                    <div class="icon"> 
                  
                           <?php if( has_post_thumbnail() ): ?>		
			                        <div><?php the_post_thumbnail('full'); hhhhtt ?></div>
					       <?php endif; ?>
    
                           <h3> <?php the_title(); ?>ttttt</h3>
                    </div>
                    <!--<article>  <?php the_content(); ?></article>-->  
                    
                    <article>    <?php echo get_excerpt(); ?>nnnnnnn </article>
              </div>     
</a>
        <?php endwhile?>
<?php endif?>

    </section>
<?php } ?>
<?php if(is_page('Home')){?>
         <?php get_template_part('TemplateParts/aboutt'); ?>   
<?php } ?>

<?php if(is_page('Clients')){?>      
         <?php get_template_part('TemplateParts/Clients'); ?> 
<?php } ?>

 <?php if(is_page('Service')){?>
        
    <section  class="success_stories   wow lightSpeedIn " id="service">
           <?php get_template_part('TemplateParts/Service'); ?> 
     </section>
 <?php } ?> 

 <?php if(is_page('Contact')){?>
<!--    <section class="" id="contact">-->
        <?php get_template_part('TemplateParts/contact'); ?> 
  
    
<!--    </section>-->
<?php } ?>
 <?php if(is_page('Products')){?>
    <section class="our_clients  wow lightSpeedIn" id="clients">
        
         <?php get_template_part('TemplateParts/products'); ?> 
     
    </section>
  <?php } ?>  


 <?php if(is_page('ConBoard')){?>
    <section class="our_clients  wow lightSpeedIn" id="clients">
        
         <?php get_template_part('TemplateParts/products/ConBoard'); ?> 
     
    </section>
  <?php } ?> 

 <?php if(is_page('NtireVision')){?>
    <section class="our_clients  wow lightSpeedIn" id="NtireVision">
        
         <?php get_template_part('TemplateParts//products/NtireVision'); ?> 
     
    </section>
  <?php } ?> 







 <?php if(is_page('Connect')){?>
    <section class="our_clients  wow lightSpeedIn" id="Connect">
        
         <?php get_template_part('TemplateParts/products/Connect'); ?> 
     
    </section>
  <?php } ?> 

 <?php if(is_page('Smartambulance')){?>
    <section class="our_clients  wow lightSpeedIn" id="Smartambulance">
        
         <?php get_template_part('TemplateParts/products/Smartambulance'); ?> 
     
    </section>
  <?php } ?> 

 <?php if(is_page('Getway')){?>
    <section class="our_clients  wow lightSpeedIn" id="Getway">
        
         <?php get_template_part('TemplateParts/products/Getway'); ?> 
     
    </section>
  <?php } ?> 

 <?php if(is_page('Telemedicine')){?>
    <section class="our_clients  wow lightSpeedIn" id="Telemedicine">
        
         <?php get_template_part('TemplateParts/products/Telemedicine'); ?> 
     
    </section>
  <?php } ?> 

<!--MedicalConsultation
CompanyConsultation-->

 <?php if(is_page('MedicalConsultation')){?>
    <section class="our_clients  wow lightSpeedIn" id="MedicalConsultation">
        
         <?php get_template_part('TemplateParts/services/MedicalConsultation'); ?> 
     
    </section>
  <?php } ?> 

 <?php if(is_page('CompanyConsultation')){?>
    <section class="our_clients  wow lightSpeedIn" id="CompanyConsultation">
        
         <?php get_template_part('TemplateParts/services/CompanyConsultation'); ?> 
     
    </section>
  <?php } ?> 





























<?php get_template_part('TemplateParts/foot');?>
<?php get_footer();?>  