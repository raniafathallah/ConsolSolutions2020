<style>
    .fa-eye{
        color: #fff !important;
    }
h1, .h1 {
    font-size: 1.5rem !important;
    font-weight: 500 !important;
     color: #8c8c8c !important;
}
p{
    margin: 0 0 20px !important;
    line-height: 1.3em !important;
    text-transform: capitalize  !important;
    font-weight: 400   !important;
    font-size: 2rem;
    color: #8c8c8c !important;
    }
.textt {
    cursor: pointer;
    position: absolute;
    top: 0px;
    width: 77%;
    height: 100%;
    font-size: 35px;
    color: #efe5e5 !important;
    background: rgba(0,0,0,.5);
    margin: 0px 23px;
    text-align: center;
    opacity: 0;
}
.textt a{
    font-size: 24px;
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
.modal-body img{
    height: 80%;
    width: 80%;
}
.modal-body,.modal-content{
  background: transparent; 
    border: none;
}
.fa-close{
    height: 0px;
    background: transparent;
    border: none;
    position: absolute;
    color: #fff !important;
    right: 54px;
    top: -57px;
    outline: none;
    border: none;
    margin-top: 27px !important;
    outline: none !important;
}
button{
    outline: none;
    border: none;
}
@media (min-width:300px) and (max-width:768px){
 h1, .h1 {
     font-size: 1rem !important;
 
}
.clients_block,.our_clients{
    height: auto;
}
.clients_block .cli{
    height: auto;
}
.fa-close {
    right: 16px;
    top: -57px;
}

}  
    


</style>       
<div class="container" style="text-align:center">
    <h1>Başarı hikayeleri </h1>
    <p> Neden bizi seçmelisiniz?    </p>
</div>   
<div class="container-fluid">
    <div class="line"></div>
    <div class="row container-fluid">
      <div class="col-lg-3 col-md-6 mb-4 ">
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
              <div class="modal-body mb-0 p-0">
                 <img src="<?php bloginfo('template_url'); ?>/images/cli1.png"/>
              </div>
              <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
            </div>
          </div>
        </div>
        <a class="">
            <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/cli1.png" alt="video"
            data-toggle="modal" data-target="#modal1">
            <div  class="textt"   data-toggle="modal" data-target="#modal1">   <a  class="fa fa-eye" >  </a>  </div>
        </a>
    </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
              <div class="modal-body mb-0 p-0">
                 <img src="<?php bloginfo('template_url'); ?>/images/cli2.png"/>
              </div>
              <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
              </div>

          </div>
          </div>
          <a>
            <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/cli2.png" alt="video"
            data-toggle="modal" data-target="#modal6">
             <div  class="textt"   data-toggle="modal" data-target="#modal6">   
             <a  class="fa fa-eye" >  </a>    
            </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body mb-0 p-0">
                 <img src="<?php bloginfo('template_url'); ?>/images/cli3.png"/>
              </div>
              <button type="button" class="fa fa-close" data-dismiss="modal"></button>
            </div>
          </div>
        </div>
        <a>
            <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url'); ?>/images/cli3.png" alt="video"
            data-toggle="modal" data-target="#modal4">
            <div  class="textt"   data-toggle="modal" data-target="#modal4">   <a  class="fa fa-eye" >  </a> </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-6 mb-4"> 
        <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
              <div class="modal-body mb-0 p-0">
                 <img src="<?php bloginfo('template_url');?>/images/cli4.png"/>
              </div>
              <button type="button" class="fa fa-close" data-dismiss="modal" ></button>
            </div>
          </div>
        </div>
        <a>
            <img class="img-fluid z-depth-1" src="<?php bloginfo('template_url');?>/images/cli4.png" alt="video"
            data-toggle="modal" data-target="#modal8">
           <div  class="textt"   data-toggle="modal" data-target="#modal8"> <a  class="fa fa-eye" >  </a> </div>
          </a>
      </div>
    </div>
</div>