<style>
p{
    margin: 0 0 20px !important;
    line-height: 1.7em !important;
    text-align: left !important;
    text-transform: capitalize  !important;
    font-weight: 400   !important;
    padding: 30px 190px 0px 0p;
}   
.timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}
.timeline:before {
      top: 0;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 3px;
      background-color: #eeeeee;
      left: 50%;
      margin-left: -1.5px;
}
.timeline > li {
      margin-bottom: 20px;
      position: relative;
}
.timeline > li:before,
.timeline > li:after {
      content: " ";
      display: table;
}
.timeline > li:after {
    clear: both;
}
.timeline > li:before,
.timeline > li:after {
      content: " ";
      display: table;
}
.timeline > li:after {
    clear: both;
}
.timeline > li > .timeline-panel {
      width: 50%;
      float: left;
      border-radius: 2px;
      padding: 20px;
      position: relative;
      -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li.timeline-inverted + li:not(.timeline-inverted),
.timeline > li:not(.timeline-inverted) + li.timeline-inverted {
     margin-top: -60px;
}

.timeline > li:not(.timeline-inverted) {
    padding-right:90px;
}

.timeline > li.timeline-inverted {
    padding-left:90px;
}
.timeline > li > .timeline-panel:before {
      position: absolute;
      top: 26px;
      right: -15px;
      display: inline-block;
      border-top: 15px solid transparent;
      border-left: 15px solid #ccc;
      border-right: 0 solid #ccc;
      border-bottom: 15px solid transparent;
      content: " ";
}
.timeline > li > .timeline-panel:after {
      position: absolute;
      top: 27px;
      right: -14px;
      display: inline-block;
      border-top: 14px solid transparent;
      border-left: 14px solid #fff;
      border-right: 0 solid #fff;
      border-bottom: 14px solid transparent;
      content: " ";
}
.timeline > li > .timeline-badge {
      color: #fff;
      width: 50px;
      height: 50px;
      line-height: 50px;
      font-size: 1.4em;
      text-align: center;
      position: absolute;
      top: 16px;
      left: 50%;
      margin-left: -25px;
      background-color: #999999;
      background-color: #EEE;
      BORDER: 2PX SOLID #EEE;
      z-index: 100;
      border-top-right-radius: 50%;
      border-top-left-radius: 50%;
      border-bottom-right-radius: 50%;
      border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
     float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
}
.timeline-badge.primary {
      background-color: #2e6da4 !important;
}
.timeline-badge.success {
      background-color: #3f903f !important;
}
.timeline-badge.warning {
     background-color: #b91d47 !important
}
.timeline-badge.danger {
     background-color: #eee !important;
}
.timeline-badge.info {
    background-color: #5bc0de !important;
}
.timeline-title {
        margin-top: 0;
        color: inherit;
        color: #6d6a6a;
}
.timeline-body > p,
.timeline-body > ul {
       margin-bottom: 0;
}
.timeline-body > p + p {
      margin-top: 5px;
}  
.timeline-panel{
     background: rgba(0,0,0,.3);
}
.timeline-inverted .timeline-panel{
    background: rgba(0,0,0,0);
}
  
.timeline-panel .timeline-heading h4 , .timeline-panel .timeline-body p{
    color: #d2efff !important;
}
.timeline-inverted .timeline-panel .timeline-heading h4 , .timeline-inverted .timeline-panel .timeline-body p{
    color: #d2efff !important;
}
.timeline-badge.success{
    background:#b91d47 !important;
}
.timeline-inverted .timeline-badge success{
    background:#b91d47 !important; 
}
.fa-close{
    position: absolute;
    top: -4px;
    right: -22px;
    color: #eee !important;
    border: none;
    background: transparent;
}
.modal-content{
    height: 80%;
    margin: 60px 0px;}
.modal-body img{
    width: 100%;
    height: 100%;
    }
.img-fluid {
    height: 300px;
}
.textt {
    cursor: pointer;
    position: absolute;
    top: 0px;
    width: 93%;
    height: 100%;
    font-size: 35px;
    color: #efe5e5 !important;
    background: rgba(0,0,0,.5);
    margin: 0 auto;
    text-align: center;
    opacity: 0;
}
.textt a{
    font-size: 35px;
  
    display: block;
    padding: 40px;
}
.textt:hover{
    opacity: 1;
}
.line {
    height: 2px;
    width: 7%;
    background: #eee;
    position: relative;
    left: 35px;
    margin: 20px auto 20px 43%;
}
@media (min-width:300px) and (max-width:767px){
h1,.h1 { 
    padding-top: -17px !important;
    font-size: 1.5rem !important;
}
p{
    font-size: 12px !important;   
    padding: 0px !important;
}
.aboutus {
    height: auto;
    background-size: 100% 100%;
}
h4, .h4 {
    font-size: .7rem;
}

     .timeline > li > .timeline-panel {
    width: 100%;
     }
        .timeline:before {
      right:6% !important;
        left: inherit !important;
}
    .timeline > li > .timeline-badge {
      right:0% !important;
        left: inherit !important;
}
    .stitle{
       font-size: 32px; 
        
    }
    .aboutus {
    height: auto !important;
    }
}

    
@media (min-width:768px) and (max-width:992px){
   .timeline > li > .timeline-badge {
    right: 3% !important;
    }
}
   
    
    .timeline-badge.success{
        background: transparent !important;
    }
</style>
   
<section class="aboutus container-fluid wow flipInX "  id="about" style=" animation-name: flipInX;height:1300px;">
     
<div class="container-fluid" style="height:auto;">
    <?php  if (is_active_sidebar('aboutt' )) : ?>
          <?php dynamic_sidebar( 'aboutt' ); ?>
    <?php endif; ?>
</div>
        
        <!-- start images section -->
  
<div style="margin-top:50px;text-align:center;height:auto;width:100%;">  
    <h4 class="timeline-title stitle" style="color:#b91d47">Hizmetler </h4>         
</div> 
<div class="line"></div>
<div class="row container-fluid">
  <div class="col-lg-4 col-md-6 mb-4 ">
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-body mb-0 p-0">
             <img src="<?php bloginfo('template_url'); ?>/images/connect.png" alt="consol connect ">
          </div>
          <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
        </div>
      </div>
    </div>
 
    <a class="">
        <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/connect.png" alt="consol connect"
        data-toggle="modal" data-target="#modal1">
        <div  class="textt"   data-toggle="modal" data-target="#modal1"> <a  style="">  Consol Connect   </a> </div>
    </a>
  </div>
    
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-body mb-0 p-0">
             <img src="<?php bloginfo('template_url'); ?>/images/patientmointor.jpg" alt="patientmointor"/>
          </div>
          <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
        </div>
      </div>
    </div>
    <a>
        <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/patientmointor.jpg" alt="patientmointor"
        data-toggle="modal" data-target="#modal6">
         <div  class="textt"   data-toggle="modal" data-target="#modal6"> <a  style="">  Patient Mointor   </a> </div>
      </a>

  </div>
    
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body mb-0 p-0">
             <img src="<?php bloginfo('template_url'); ?>/images/patientimages.jpg" alt="patient images"/>
          </div>
          <button type="button" class="fa fa-close" data-dismiss="modal"></button>
        </div>
      </div>
    </div>
    <a>
        <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/patientimages.jpg" alt="patient images"
        data-toggle="modal" data-target="#modal4">
        <div  class="textt"   data-toggle="modal" data-target="#modal4"> <a  style="">  patients mointor   </a> </div>
      
    </a>

  </div>
<!--
</div>

<div class="row container-fluid">

-->

<div class="col-lg-4 col-md-6 mb-4">
    <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-body mb-0 p-0">
             <img src="<?php bloginfo('template_url');?>/data1/images/getway.jpg"/>
          </div>
          <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
        </div>
      </div>
    </div>
    <a><img class="img-fluid z-depth-1" src="<?php bloginfo('template_url');?>/data1/images/getway.jpg" alt="consol getway"
        data-toggle="modal" data-target="#modal8">
       <div  class="textt"   data-toggle="modal" data-target="#modal8"> <a  style="">  Getway  </a> </div>
      </a>
  </div>

<div class="col-lg-4 col-md-6 mb-4">
    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body mb-0 p-0">
             <img src="<?php bloginfo('template_url');?>/images/consolsuite.jpg"/>
          </div>
          <button type="button" class="fa fa-close" data-dismiss="modal"></button>
        </div>
      </div>
    </div>
    <a>
        <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url');?>/images/consolsuite.jpg" alt="consolsuite"
        data-toggle="modal" data-target="#modal10">
         <div  class="textt"   data-toggle="modal" data-target="#modal10"> <a  style="">  Consol Suite   </a> </div>
    </a>
</div>
<!--</div>  -->     
</section>  
    </div> 
