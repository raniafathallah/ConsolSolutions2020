<div class="container ">
      <?php  if (is_active_sidebar('contact_header' )) : ?>
                   <?php dynamic_sidebar( 'contact_header' ); ?>
      <?php endif; ?>       
</div>        
<style>
    .part{
        width:100%;
        padding:30px 0px;
        float:left;
        background: url(<?php bloginfo('template_url');?>/images/connectback.jpeg);
        background-attachment: fixed;
        
    }
    .part div{
        float: left;
        padding: 0px 27px;
    }

       .part2{
           width:100%;
           padding:30px;
           float:left;
           margin:auto;
           background: url(<?php bloginfo('template_url');?>/images/connectback.jpeg);
           background-attachment: fixed;
    }
    .overlaycont{
        width: 33.3333%;height:auto;
    }
    h4{
        margin:auto;
        color:#333;
        font-weight: 200;
        font-size: 1.5rem;
        color: #d7f7ff;   
    }
    .googlemap_div{
        background: rgba(0,0,0,.2);
    }
    /* form style */
    .form2 .wpcf7 .wpcf7-form >p{
    width: 100% !important;
    overflow: auto !important;
    margin: 0px !important !important;
    width: 100% !important;
    overflow: auto !important;
    margin: 0px !important;
  /*  background: rgba(0,0,0,.4) ;*/
    } 
    .form2 .wpcf7 .wpcf7-form >p textarea{
        height:120px;
        }
    .form2 .wpcf7 .wpcf7-form >p input, .form2 .wpcf7 .wpcf7-form >p textarea{
            width: 81% !important;
           float: right!important;
        margin-right: 36px !important;
        background: rgba(0,0,0,.4) ;
        border-radius: 6PX !IMPORTANT;
        color: #fff !important;
    }
    .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 10% !important;
    color: #fff;
    padding: 5px;
    float: right!important;
    background: #0382c5;
    border-radius: 6PX !IMPORTANT;
    }
    .form2 .wpcf7 .wpcf7-form >p label{
        width:100% !important;
    }
   .form2 form p label font
    {
    float: left !important;
    width: 7% !imortant;
    color: #fff !important;
    PADDING-TOP: 12PX;
    }
     .form2 .wpcf7 .wpcf7-form >p input:focus, .form2 .wpcf7 .wpcf7-form >p textarea:focus,
    .form2 .wpcf7 .wpcf7-form >p input:hover, .form2 .wpcf7 .wpcf7-form >p textarea:hover{
    color: #fff!important;
    }
         .form2 .wpcf7 .wpcf7-form >p input:visited, .form2 .wpcf7 .wpcf7-form >p textarea:visited
 {
    
        color: #fff !important;
    }
.screen-reader-response font,.wpcf7-response-output ,.wpcf7-validation-errors{
        color: #fff;
    }
   /* end form style */
 @media (min-width:300px) and (max-width:768px){
  .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 21% !important;
     }
     
h1,.h1 { 
    padding-top: -17px !important;
    font-size: 1.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}
.overlaycont{
   width: 100%;       
}
.content{
    font-size: 15px;
    padding: 0px;
}  
.part div {
    padding: 1px 13px;
}
.contact_us .headicon {
    font-size: 24px;
}
#part2 h4{
    font-size: 1.3rem;
}
.form-group label {
    width: 20%;
}
}

 @media (min-width:768px) and (max-width:1200px){
     .part div{
    padding: 1px 12px !important;
    
     }  
     .contact_us .headicon{
    position: relative;
    top: -14px;
     }
     
    }
    
    @media (min-width:650px) and (max-width:768px){

    }
    @media (min-width:769px) and (max-width:992px){
    .form2 .wpcf7 .wpcf7-form >p input[type="submit"]{
        width: 30% !important;
    }
        }
</style>  

<div class="container-fluid con">
    <div class="part" >
    <div style="width:100%;margin:auto;">
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                <?php  if (is_active_sidebar('contact_map1' )) : ?>
                   <div class="overlay"></div>
                               <?php dynamic_sidebar( 'contact_map1' ); ?>
                <?php endif; ?>
 
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv1' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv2' ); ?>
                                  <?php endif; ?>

                    </div>
              
                      
            </div>
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                <?php  if (is_active_sidebar('contact_map2' )) : ?>
                   <div class="overlay"></div>
                               <?php dynamic_sidebar( 'contact_map2' ); ?>
                <?php endif; ?>

                  <!-- contact email and phone -->
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv1' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv2' ); ?>
                                  <?php endif; ?>

                    </div>
                      
            </div>
           <div class="googlemap_div container-fluid overlaycont"  >
                    
                        <?php  if (is_active_sidebar('contact_footer' )) : ?>
                           <div class="overlay"></div>
                                       <?php dynamic_sidebar( 'contact_footer' ); ?>
                        <?php endif; ?>

                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv1' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv1' ); ?>
                                  <?php endif; ?>

                   </div>
                   <div class="con" style="padding:0px !important;">
                      <?php  if (is_active_sidebar('contactthreediv2' )) : ?>
                                            <?php dynamic_sidebar( 'contactthreediv2' ); ?>
                                  <?php endif; ?>

                    </div>
            </div>
    </div>
    </div>   
</div>


<div class="container-fluid form2 part2">
    
            <h4>Send Us Message</h4>

      <?php echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]'); ?>
</div>