<footer>

<style> 
#footerlinks  #menu-primary-1 {
    list-style: none !important;
}  
#footerlinks ul li:hover {
}
#footerlinks #menu-primary-1 li:hover  #footerlinks #menu-primary-1 li {
    background: #fff !important;
}
#footerlinks #menu-primary-1 li:hover  #footerlinks #menu-primary-1 li a{
    color: #000;  
}

#footerlinks #menu-primary-1 li a{
    color: #333;
    text-decoration: none;
}        
#footerlinks #menu-primary-1 li a:hover{
    color: #00aba9;
}
.map_footer {
    padding: 10px 0px;
}
    ul{
        list-style: none;
    }
ul a{
    font-size: 15px;
    color: #333;
    text-decoration: none;
}
ul a:hover{
    color: #00aba9;
       text-decoration: none;
}
.page-head{
    font-size: 18px    
}
    .allfooterdivs{
        height: auto;
        overflow: auto;
    }
    .widget_text.foot-in-in{
        width:100% !important;
    }
    
    #footerlinks .menu-primary-container{
        background: #fbfafb;
    }
    @media (min-width:300px) and (max-width:767px)
    {
        .contact-short div{
            font-size: 10px;
        }
  /*      .map_footer,.map_footer>div {
            float: none !important;
        }*/
        .allfooterdivs div{
/*
            float: none;
*/
        }
        ul{
            width: 100%;
            padding: 0px;
            margin: 0px;
        }
        .contact-short{
            padding-left: 30px;
        }
        .allfooterdivs{
            padding: 0px;
        }
      .textwidget.custom-html-widget{
            width:100% !important; 
        }
      .allfooterdivs{
            padding: 0px;
        }
        #footerlinks{
            padding-left: 16px !important;
            padding-top: 18px !important;
        }
       #footerlinks ul a {
           font-size: 11px;
        }
        .navlinks {
            padding-top: 12px !important;
        }
/*
        .navlinks .menu-primary-2{
            padding-top: 15px !important;
        }
*/
        .contact-short h2{
            padding-top: 0px !important;
        }
         .smallview{
            float: left !important;
            padding: 0px !important;
            margin: 0px !important;
             width:50% !important;
        }
        .map_footer iframe{
            height: 110px !important;
        }
        .map_footer {
    padding: 10px 10px !important;
}
    }
    @media (min-width:768px) and (max-width:992px){
   
      .allfooterdivs{
            padding: 0px;
        }
      .allfooterdivs div{
            float: left;
            padding-bottom: 2px;
            margin: 0px;
            padding: 0px !important;
        }
        .map_footer iframe{
           /* height: 122px !important;*/
            height: 165px !important;
            padding: 23px 39px !important;
        }
        .widget_text.foot-in-in,.textwidget.custom-html-widget{
            width:100% !important; 
        }
        .map_footer{
            margin-left: 45px;
            margin-top: 23px;  
            padding: 26px 39px !important;
        }
        #menu-primary-2{
            padding-top: 20px;
        }
    }
</style>
    
    

        <div class="container-fluid  allfooterdivs" style="height:300px; display:none;">
            <div class="navlinks col-lg-4 col-md-5 col-sm-5 col-xs-12 smallview" id="footerlinks" style="padding-top: 31px;">
 

                    <?php  $args=array('themelocation'=>'primary') ?>
                    <?php  wp_nav_menu( $args);  ?>



            </div>
            
            <div class="contact-short col-lg-4 col-md-3 col-sm-5 col-xs-12 smallview">
                
                
                 <?php  if (is_active_sidebar('footer_contact' )) : ?>
                   <?php dynamic_sidebar( 'footer_contact' ); ?>
               <?php endif; ?>
           
            </div>

            <div class="map_footer col-lg-4 col-md-3 col-sm-12 col-xs-12">


            <?php  if (is_active_sidebar('footer_map' )) : ?>
                           <?php dynamic_sidebar( 'footer_map' ); ?>
                       <?php endif; ?>
            </div>
    </div>
</footer>
