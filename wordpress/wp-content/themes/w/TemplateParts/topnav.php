
<style>
    .trp-language-switcher > div
    {
        border: none !important;
    }
.custom-select {
    float: right;
    display: inline-block;
    height: auto;
    width: 100%;
    border: none;
     padding: 0.175rem 1.75rem 0.375rem 0.75rem; */
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
}    
.menu-primary-container{
        background: #fff;
        height: 35px;
    }
.menu-primary-container,.navva{
        width: 80%;
    }
 #navbarTogglerDemo01  #menu-primary {
    list-style: none !important;
    width: 100%;
    padding: 0px;
     overflow: auto;
     height: 44px !important;
}  
#navbarTogglerDemo01 #menu-primary li {
    float: left !important;
    outline: none !important;
}
/*#menu-item-7 a{
     border-bottom: 2px solid #80252c;
    }*/
#navbarTogglerDemo01 #menu-primary li a,.menu-primary-container  #menu-primary-1 li a{
    color: #027170;
    color: #03599d !important;
    text-decoration: none;
  /*  padding:7px 9px  !important;*/
    padding: 7px 1px !important;
    margin: 0px 9px;
    text-transform: capitalize;
    font-size: 13px;
    font-weight: 600;
    
}
    
#navbarTogglerDemo01 #menu-primary li a:hover,.menu-primary-container  #menu-primary-1 li a:hover{
             border-bottom: 2px solid #80252c;

}    
    
#navbarTogglerDemo01 #menu-primary li a:hover, .menu-primary-container  #menu-primary-1 li a:hover{
    color: #333;
}   
body{
    padding-top: 0px !important;
}
.fa{
    color: #0a7f7f !important;
    padding-top: 27px !important;
}
.topmenu img{
    float: left;
}
.topmenu i{
    font-size: 12px;
    float: right;
/*    padding: 20px 10px 0px 10px;*/
}
.fa-angle-down{
    position: relative;
    top: 4px;
}
select{
    float: right;
    background: transparent;
    border: none;
    color: #00b4c1;
}
select:active, select option:active,  select:hover, select option:hover{
    background: #ffffff;
    border: #ffffff;
    outline: none;
}
select option{
    border: none;
    color: #00b4c1;
    background: #ffffff;
    border: #ffffff;
    color: #333;
}
select:active, select option:active, select:hover, select option:hover {
    background: #fff !important;
    border: #fff !important;
    outline: none;
    }
select option:hover,select option:focus,select option:active,select option:visited{
}
#menu-primary-1{
    padding-left: 10px;
}
.showed{
    display: block;
    background: transparent;
    outline: none;
    border: none;
}
.collap{
    display: none;
    background: transparent;
    outline: none;
    border: none;
}
.navbar-togglered,.navbar-togglered:focus,.navbar-togglered:active,.navbar-togglered:visited{
    background: transparent;
    outline: none;
    border: none;
}
.navbar-togglered i{
    padding: 5px;
}
.trp-ls-shortcode-language{
    z-index: 10000000000000000;    
}
    .trp-language-switcher .trp-ls-shortcode-language{
        display: none;
    }
    .trp-ls-shortcode-language{
        width:55px;
    }
    .trp-flag-image{
        display: none !important;
    }
    .trp-language-switcher a{
        font-style: normal;
        font-size: 12px;
        font-weight: 600 !important;
    }
    #mynav{
         padding: 41px 0px !important;
    }
    .trp-ls-shortcode-language a:hover{
        color: #000;
    }
/*.trp-ls-shortcode-language{
      display: none !important;  
    }
    .trp-language-switcher .trp-ls-shortcode-current-language {
    display: inline-block;
    position: relative;
    width: 108px;
    }*/
@media (min-width:300px) and (max-width:768px){
.menu-primary-container{
        height: auto;
}
.topmenu,#mynav{
    padding: 0px 10px !important;
}
.topmenu .logoicon  img{
    width:103px !important;
}
#mynav{
    background: #ffffff;
    height: auto;  
   
}
#mynav button{
    padding:0px;
}
ul li {
    padding: 0px ;
}

/*ul li a{
font-size: 12px;
    }*/
.dispmobil{
    display: block !important;
}
.hiddenmobil{
    display: none;
}
.contact-short {
    padding-left: 60px !important;
    padding-top: 40px !important;
}
#footerlinks{
    padding-left: 60px !important;     
}
.allfooterdivs{
    padding: 40px 0px 0px 0px !important;
}
.map_footer {
    padding: 38px 0px 0px 0px !important;
}
}
@media (min-width:768px) and (max-width:992px){
.menu-primary-container{
        height: auto;
}
}
</style>

<style>  

@media (min-width:992px) and (max-width:1024px){
    #navbarTogglerDemo01 #menu-primary li a, .menu-primary-container #menu-primary-1 li a{
        font-size: 11px !important;
        margin: 0px 3px !important;
    }

    }
</style>


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<div class="container-fluid" style="background:#052b52;height:14px"></div>
<div class="container-fluid topmenu" style="background:#ffffff;display:block;top: 0px;
           z-index: 1000;height: 83px;padding: 0px 40px !important;" >
      <div class="logoicon" style="margin:0px auto;width:14%;float:left">
        <img src="<?php bloginfo('template_url');?>/images/consollogo6.png" style=" height: 68px;
           width: 168px;"  >
      </div> 
    

   <!--     <i class="fa fa-facebook"></i>
        <i class="fa fa-linkedin"></i>
        <i style="wiwth:100px">  <?php echo do_shortcode('[language-switcher]'); ?>  </i>
-->



    <nav id="mynav" class="navbar navbar-expand-lg navbar-light    fadeInLeft hiddenmobil" style="
           z-index: 1000;float:right;height:23px;width:70%" >

    
            <div class="collapsedd navbar-collapsedd " id="navbarTogglerDemo01" style="width:100%;float:right;">
      
             
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navva" >
    

                    <?php  $args=array('themelocation'=>'primary') ?>
                    <?php  wp_nav_menu( $args);  ?>
                       <li>   <i style="wiwth:100px">  <?php echo do_shortcode('[language-switcher]'); ?>  </i></li>
                </ul>
           
           
            </div>
    </nav>
    
      

</div>
<nav id="mynav" class="navbar navbar-expand-lg navbar-light  container-fluid  fadeInLeft dispmobil" style="
           z-index: 1000;padding:0px 40px;display:none;" >

            <button class="navbar-togglered" type="button" data-toggle="collapsed" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-togglered-icon" style="background: none"> <i class="fa fa-bars" style="padding-top:0px !important;"></i></span>
                
            </button>
            <div class="collapsed navbar-collapsed " id="navbarTogglerDemo02">
      
         
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navva" >
    

                    <?php  $args=array('themelocation'=>'primary') ?>
                    <?php  wp_nav_menu( $args);  ?>
                </ul>
            </div>
</nav>

</div>
<?php get_footer();   ?>
<script>
$(document).ready(function(){

$('.collapsed').addClass('collap');    
$('.navbar-togglered').click(function(){
     /*   debugger;*/

if($('.collapsed').hasClass('showed')){
$('.collapsed').removeClass('showed');
$('.collapsed').addClass('collap');
}else{
$('.collapsed').addClass('showed');
$('.collapsed').removeClass('collap');
}

  });
    
    
});
</script>
