<style>

#wpadminbar,#div#goog-gt-tt{
        display: none !important;
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
    font-size: 3.5rem !important;
    color: #f7f7f9 !important ;
    font-weight: 400 !important;
}
p {
    margin: 0 0 20px !important;
    line-height: 1.7em !important;
    text-align: left !important;
    color: #f7f7f9 !important;
    text-transform: capitalize  !important;
    font-weight: 400   !important;
}
.line {
    height: 2px  !important;
    width: 34%  !important;

    background: #00aba9  !important
    position: relative  !important;
    left: 35px  !important;
}
font{
        font-size: inhert;
    }
@media (min-width:300px) and (max-width:768px){
h1, .h1 { 
    padding-top: 0px !important;
    font-size: 2rem !important;
}
p{
    padding: 30px 0px 0px 0px !important;
    font-size: 15px !important;   
}
}
</style>

        
        
<div class="container-fluid"> 

   <?php get_template_part('topnav');  ?>
<div class="container-fluid overlaycont  " style="background:url('<?php bloginfo('template_url');?>/images/patientmointor.jpg') no-repeat; height:600px;background-size:100% 100%">
   <div class="overlay container-fluid" style="padding:0px !important;"> 
      <h1  style="padding:200px 0px 0px 100px"> TireVision Hastabaşı Monitörü</h1>
      <div class="line" style="background: #094d48 !important"></div>
      <p style="padding:30px 274px 0px 0px;">  
      Yeni Nesil Hastabaşı Monitör Dünyasına Açılan Pencere
      .Bir Hastabaşı Monitöründen beklenen en üst düzey konfigürasyon.Aynı ekran üzerinde</p>
    </div>
</div>    
<?php get_template_part('foot');  ?>   
<?php get_footer(); ?>       
  
    </div>




