

<style>
h1, .h1 {
    font-size: 3.5rem !important;
    color: #f7f7f9 !important;
    font-weight: 400 !important;
}
p{
    margin: 0 0 20px !important;
    line-height: 1.7em !important;
    text-align: left !important;
    color: #f7f7f9 !important;
    text-transform: capitalize  !important;
    font-weight: 400   !important;
    padding: 30px 190px 0px 0p
}
.box-tir .readbtn{
    background: no-repeat;
    color: #333;
    box-shadow: none;
    border: none;
}
.fa-eye{
    font-size: 26px;
    position: relative;
    top: 4px;
    color: #00aba9 !important;
}
h4,.fa-eye,.readbtn a{
    color: #f7f7f9 !important;
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
  .box-tir .readbtn{
      padding: 0px !important;
    }
}
</style>

<style>

</style>
<div class="container" style="padding-top:100px;">  
                <?php  if (is_active_sidebar('success_stories' )) : ?>
                   <?php dynamic_sidebar( 'success_stories' ); ?>
               <?php endif; ?>   
</div>     
<div class="container">
    <div class="box-tir">
                 <img src="<?php bloginfo('template_url');?>/images/clienttira2.png">
                 <h4>Tire Devlet Hastanesi</h4>
                 <button class="btn btn-default readbtn" style=" color: #f7f7f9 !important;padding:0px !important"> 
                     <a href="http://tiredh.saglik.gov.tr/" style="text-decoration: none"> 
                     <a class="fa fa-eye"></a>siteyi ziyaret et </a>
                 </button>             
    </div>
</div>
     
        