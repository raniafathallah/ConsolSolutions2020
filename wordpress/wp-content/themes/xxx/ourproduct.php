
<style>
h1, .h1 {
    font-size: 3.5rem !important;
    font-weight: 400 !important;
}
@media (min-width:300px) and (max-width:768px){
 h1, .h1 {
    font-size: 1.5rem !important;
}
.text{
    font-size: 15px;
}
.our_products container{
    width: 100% !important;
}        
}
</style>
<style>
.line {
    height: 2px;
    width: 13%;
    background: #00aba9;
    margin-bottom: 37px;
    position: relative;
    left: 44%;
}
        
@media (min-width:300px) and (max-width:768px){
h1,.h1 {
    padding-top: -17px !important;
    font-size: 1.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}
h4, .h4 {
    font-size: .7rem;
}
#wowslider-container3 .ws-title{
    padding: 10px 27px;
    top:0 !important;
    bottom: unset !important;
    }
    #wowslider-container3 .ws-title span{
    font-size: .5rem !important;        
}
#wowslider-container3 a.ws_next {
    bottom: 11em;
}
#wowslider-container3 a.ws_next, #wowslider-container3 a.ws_prev {
    opacity: .4;
}
    .our_products{
        height: 490px;
    }
    #wowslider-container3 a.ws_next, #wowslider-container3 a.ws_prev{
        background-color: #eee !important;
    }
    
}
@media (min-width:300px) and (max-width:400px){
    .our_products {
        height: 350px;
    }

}
  @media (min-width:400px) and (max-width:450px){  
        #wowslider-container3 a.ws_next {
    bottom: 6.3em !important;
}
    }
</style>
   <div class="container">
    <section class="our_products container-fluid  wow lightSpeedIn " id="products">
       <div class="container" style="">
        <h4  class=" " style="color:#8c8c8c !important;padding:15px 0px;">   Hizmetlerimiz </h4>
           <div class="line"></div>
           <?php get_template_part('wowslider2'); ?>
       </div>
    </section>
   </div>



      


  