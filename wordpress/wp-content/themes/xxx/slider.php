
<style>
#slider1 .readbtn,#slider1 h1,#slider2 .readbtn,#slider2 h1
{
    float: left;
}
#slider1 p{
    text-align: left
}
#slider2 p{
    float: left;
    text-align: left;
}
#slider1, #slider2{
    left: 7%;
}
.carousel-item,.carousel-inner {
    height: 600px !important;
}    
.overlaycont{
    position: relative;
}
.overlay{
    width:100%;
    height: 100%;
    position: absolute;
    background: rgba(0,0,0,.4);
    top: 0px;
    left: 0px;
}    
h1, .h1 {
    font-size: 2.5rem !important;
    color: #f7f7f9 !important ;
    font-weight: 400 !important;
}
p{
    margin: 0 0 20px !important;
    line-height: 1.7em !important;
    text-align: left !important;
    color: #f7f7f9 !important;
    text-transform: capitalize  !important;
    font-weight: 400   !important;
}
.readbtn{
    background: #e3a21a  !important;
    border: #e3a21a  !important;
}
    @media (min-width:992px) and (max-width:2000px)
    {
        .marginzero{
        margin-right: 70px !important;
    }   
    }
@media (min-width:300px) and (max-width:768px){
    #slider2{
        padding-top: 20px;
    }
h1,.h1 { 
    padding-top: -17px !important;
    font-size: 1.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}
#slider1 h1{
    font-size: 2rem !important;  
}
.marginzero{
    margin-right: 0px !important;
/*
    margin-left: 20px !important;
*/
}
.readbtn{
    padding: 5px 3px !important;
    font-size: 10px;
}
    
#slider1 .readbtn{
    margin-left: 20px !important;
}
.allfooterdivs{
    padding: 40px 0px 0px 0px !important;
}
.map-footer{
    padding: 0px  !important;
}
    
.carousel-control-prev-icon img, .carousel-control-next-icon img {
    width: 24px;
}
    
}    
</style>
<style>
  #myCarousel,.carousel-inner{
        background: #eff4ff;
    }

</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        
        <div class=" overlaycont carousel-item  active  fadeInDown zoomOut  ">  
           
            <img src="<?php bloginfo('template_url');?>/images/patientmointor2.jpg" class="bd-placeholder-img" width="100%" height="100%" >
             <div class="overlay">
                    <div class="container ">
                      <div class="carousel-caption text-left" id="slider1">

                           <?php  if (is_active_sidebar('slideritem1' )) : ?>
                               <?php dynamic_sidebar( 'slideritem1' ); ?>
                           <?php endif; ?>


                      </div>
                        </div>
        </div>
      </div>
        
        <div class="carousel-item  overlaycont   fadeInDown   " >
          
              <div class="container-fluid" style="margin: auto;height: 100%;">
                    
                    <img src="<?php bloginfo('template_url');?>/images/GETWAY.jpg" class="bd-placeholder-img" width="100%" height="100%" >
                   <div class="overlay" style="background:rgba(0,0,0,.2);">
              </div>
                   </div>
         </div>
            
        <div class="carousel-item  fadeInDown  ">        
        <img src="<?php bloginfo('template_url');?>/images/ecgsystem.jpg" class="bd-placeholder-img" width="100%" height="100%" >
                   <div class="overlay" style="background:rgba(0,0,0,.2);">
         
        <div class="container" id="slider2">
 
               <?php  if (is_active_sidebar('slideritem2' )) : ?>
                   <?php dynamic_sidebar( 'slideritem2' ); ?>
               <?php endif; ?>
       
        </div>
                            </div>
      </div>
        
        
    </div>
     
    
    
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
      <span class="carousel-control-prev-icon" aria-hidden="true"> <img src="<?php bloginfo('template_url');?>/images/leftarrow1.png"></span>
 
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><img src="<?php bloginfo('template_url');?>/images/rightarrow1.png"></span>
        
    </a>
  </div>    
<script>
$(document).ready(function(){
   $('.carousel-control-next,.carousel-control-prev').css('display','none'); 
/*    $('.logoicon').hover(function(){
         $('.carousel-control-next,.carousel-control-prev').css('display','block');   
    },function(){
       $('.carousel-control-next,.carousel-control-prev').css('display','none');     
    });*/
        $('#myCarousel').hover(function(){
         $('.carousel-control-next,.carousel-control-prev').css('display','block');  
           $('.carousel-control-prev-icon img,.carousel-control-next-icon img').css('top','400px');
    },function(){
       $('.carousel-control-next,.carousel-control-prev').css('display','none');     
    });

});
</script>    