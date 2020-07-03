<!--
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/productsStyle.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
-->

<footer style="display:none">

    

        <div class="container-fluid  allfooterdivs" style="">
            <div class="navlinks col-lg-4 col-md-5 col-sm-5 col-xs-12 smallview" id="footerlinks" style="padding-top: 31px;">
 

                    <?php  $args=array('themelocation'=>'primary') ?>
                    <?php  wp_nav_menu( $args);  ?>



            </div>
            
            <div class="contact-short col-lg-4 col-md-3 col-sm-5 col-xs-12 smallview">
                
                
                 <?php  if (is_active_sidebar('footer_contact' )) : ?>
                   <?php dynamic_sidebar( 'footer_contact' ); ?>
               <?php endif; ?>
           
            </div>

            <div class="map_footer col-lg-4 col-md-3 col-sm-12 col-xs-12" style="padding:35px 0px 0px 0px">


            <?php  if (is_active_sidebar('contact_map1' )) : ?>
                           <?php dynamic_sidebar( 'contact_map1' ); ?>
                       <?php endif; ?>
            </div>
    </div>
</footer>



<!-- start new footer -->
<style>
    
    #menu-primary-2 .sub-menu,#menu-primary-2 .sub-menu{display: none !important;}

    #menu-primary-2 li{}
    #menu-primary-2 li a{
        display: block;
        font-weight: bold;
        font-size: 18px;
        letter-spacing: 2px;
        cursor: pointer; 
        letter-spacing: 2px;
        color: #fff;
        text-decoration: none;
    }
    .footerMenu2,#menu-primary-2{padding: 0px !important;}
    .footerMenu2>.menu-primary-container{background: transparent !important;}
    
/*    .footerMenu2 .menu-item-44,.footerMenu2 .menu-item-23{display: none;}*/
</style>


   
    <footer>
        <div class="leftBar">
        <h2>OUR OFFICES</h2>
        <h3> Turkey</h3>
        <p> 
        Ivedik OSB Mahallesi 2224 Cad. Ankara 
        Teknopark Kampüsü C Blok No:1/416 06370 
        Yenimahalle, Ankara Türkiye</p>
        
        <h3>    Egypt</h3>
        <p> 
         
            30 Alferdaws street Smoha , Alexandria</p>
        
        <h3>  Saudia Arabia</h3>
        <p> P O Box 286952, Riyadh 11323</p>
        
        <div class="footerIcons">
        
      
            <a> <img src="<?php bloginfo('template_url');?>/images/facebookIcon.png)" ></a>
            <a> <img src="<?php bloginfo('template_url');?>/images/linkedinIcon.png" ></a>
            <a> <img src="<?php bloginfo('template_url');?>/images/whatsIcon.png" ></a>
            <a> <img src="<?php bloginfo('template_url');?>/images/googleplusIcon.png" ></a>
        </div>
    </div>
        <div class="centerBar">
        <div style="float: left;width: 50%">
              <h2>QUICK LINKS</h2>
              <!--   <span> Home</span>
                 <span> Clients</span>
                 <span> Medical Services</span>
                 <span> Company Services</span>
                 <span> Contact</span>-->
            
            
            <div class=" " id="" style="width:100%;float:right;">
                <ul class="footerMenu2" >
                    <?php  $args=array('themelocation'=>'footer2') ?>
                    <?php  wp_nav_menu( $args);  ?>
                </ul>
            </div>   
        </div>
  
 
<!--        <div class="requestDemo">Request Demo </div>-->
        <div style="height:auto;overflow:auto;">
           <div class="requestDemo">Request Demo </div>
           <div class="branchBlock branchSaudi" style="background: #14908f;float: left;width: 80%;margin-right: 20%">
       
          <h3> Saudia Arabia
 </h3>
          <div>
              <img src="<?php bloginfo('template_url');?>/images/messageIcon.png">
              <p>info@consol.com.tr  <br>
                 support@consol.com.tr</p>
          </div>
          <div>
              <img src="<?php bloginfo('template_url');?>/images/phoneIcon.png">
              <p>info@consol.com.tr  <br>
                 support@consol.com.tr</p>
          </div>
        </div>
            
        </div>
      
    </div>
        <div class="rightBar">     
          
            <div class="branchBlock" style="float: left;width: 40%;margin-right: 10%;border-bottom: 2px solid #21bfbe; background: #107373 !important">
              <h3> Turkey </h3>
              <div>
                  <img src="<?php bloginfo('template_url');?>/images/messageIcon.png">
                  <p>info@consol.com.tr  <br>
                     support@consol.com.tr</p>
              </div>
              <div>
                  <img src="<?php bloginfo('template_url');?>/images/phoneIcon.png">
                  <p>info@consol.com.tr  <br>
                     support@consol.com.tr</p>
              </div>
            </div>
            <div class="branchBlock" style="float: left;width: 40%;background: #14908f">
              <h3>   Egypt</h3>
              <div>
                  <img src="<?php bloginfo('template_url');?>/images/messageIcon.png">
                  <p>info@consol.com.tr  <br>
                     support@consol.com.tr</p>
              </div>
              <div>
                  <img src="<?php bloginfo('template_url');?>/images/phoneIcon.png">
                  <p>info@consol.com.tr  <br>
                     support@consol.com.tr</p>
              </div>
            </div>
    </div>
    </footer>
    
