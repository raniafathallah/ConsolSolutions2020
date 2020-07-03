<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--    <title>Bootstrap 4 Multi Item Carousel Example</title>-->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--stylesheets / link tags loaded here-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/darkly/bootstrap.min.css">
<!--    <link rel="stylesheet" href="style.css">
    -->
    <style>
          .ClientsConBlock{
            background: url("<?php bloginfo('template_url');?>/images/clientsBack.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            text-align: center;
            overflow: auto;
        }
        .ClientsConBlock>h3
        {
            color: #f2f2f2;
            font-size: 32px;
            font-weight: bold;
        }
        .ClientsConBlock>h2
        {
            color: #ffffff;
            font-size: 40px;
            font-weight: bold;
        }
        .clientsContainer{
            height: auto;
            overflow: auto;
            padding-top: 10%;
        }
        .clientBlock{
            background: #fff;
            min-height: 400px;
            width: 33.333333%;
            padding: 2%;
            float: left;
            margin: 2%;
        }
          .clientBlock>img
        {
            border-radius: 50%;
            border: 10px solid #e6e6e6;
            margin-bottom: 10%;
            margin-top: -45%;
            z-index: 1000000;
            background: #fff;
            height: 170px;
        }
        .clientBlock>h5
        {
        font-size: 24px;font-weight: bold;color: #337d7f;
        font-family: Century Gothic !important;
        }
        .clientBlock>span
        {
        font-size: 18px;color: #000;
        font-family: Century Gothic !important;
        }
        .changeColor{
            color: #14908f;font-weight: bold;
        }
        .clientBlock>p{
            font-weight: bold;
            color: #000;
            font-size: 24px;
        }.container { margin: 50px auto; }
        
        
        .carousel-inner{padding-top: 18% !important}
    
    </style>
    <style>
        
 #jquery-script-menu{display:none}

.topmenu{position:fixed}
    
    /*********************************************************************/
/* Bootstrap 4 Multiple Item Carousel */
/*********************************************************************/
/* medium - display 2  */
@media (min-width: 768px) {

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
        transform: translateX(50%);
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-inner .carousel-item-prev {
        transform: translateX(-50%);
    }
}

/* large - display 3 */
@media (min-width: 992px) {

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
        transform: translateX(33%);
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-inner .carousel-item-prev {
        transform: translateX(-33%);
    }
}

@media (max-width: 768px) {
    .carousel-inner .carousel-item>div {
        display: none;
    }

    .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
    transform: translateX(0);
}
    </style>
    <style>
        .container { margin: 150px auto; }
    </style>
    <style>    
          .bg-dark {
            background-color: #000!important;}
     
        .carousel-control-prev, .carousel-control-next{
            position: static!important;
            float: left;
            background: #f2f2f2 !important;
            width: 52px !important;
            height: 52px !important;
            border-radius: 50%;
        }
        
        .arrowContainer{
            position: absolute;
            right: 50%;
            top: 16%;
            transform: translate(55%,0px);
   
        }
        .carousel-control-next-icon{}
        .arrowContainer .carousel-control-next-icon{
            background-image:  url("<?php bloginfo('template_url');?>/images/clientsRightArrow.png") !important; 
            
        }
        .carousel-control-prev-icon{
            background-image:  url("<?php bloginfo('template_url');?>/images/clientsRightArrow.png") !important; 
        
            
        }
          .carousel-control-prev
        {    transform: rotate(180deg);}
        .carousel-control-prev:hover, .carousel-control-next:hover{opacity: 1;background: #fff !important}
        a.bg-dark:hover, a.bg-dark:focus, button.bg-dark:hover, button.bg-dark:focus{background: #fff !important;}
      /*  .active .carousel-control-prev{display: none !important;opacity: 0 !important}*/
       /*s*/
        
        
  
    </style>
    
</head>

<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/slider/responsive-bootstrap-carousel-multiple-items.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul><div id="carbon-block"></div>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
    <div class="container-fluid ClientsConBlock">
    <div class="container text-center ">
        <h3>Gain More Clients’s </h3> 
        <h2> See Our Client Implementations   </h2>

        
          <div class="arrowContainer" style="">
                    <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        
<!--        <h1 class="font-weight-light mb-5">Bootstrap 4 Multi Item Carousel Example</h1>-->
        <div class="row mx-auto my-auto">
            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                       <div class="col-lg-4 col-md-4">
                            <div class="clientBlock" style="width: 100%;">
                               <img src="<?php bloginfo('template_url');?>/images/clientsWazaratElSaha.png">
                               <h5> MINISTRY OF HEALTH</h5>
                               <span>had implemented <span class="changeColor">getway </span> project and
                                   <span class="changeColor">telemedicine </span>
                                   </span>
                                <p> I am very impressed by the talent levels of
                                     consol consultants. In my experience, 
                                    everyone has had graduate levels of 
                                    engineering, and niche skill sets.With consol 
                                    I have had great flexibility, Scaling up and 
                                    down when needed. They have allowed 
                                    me to be reactive in my projects and I’m 
                                    always confident when working with them.</p>
                            </div>
                        </div> 
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-4 ">
                          <div class="clientBlock " style="width: 100%">
                           <img src="<?php bloginfo('template_url');?>/images/clientsUnaba.png">
                           <h5>   Yanbu General Hospital</h5>
                           <span>had implemented <span class="changeColor">getway </span> project and
                               <span class="changeColor">telemedicine </span>
                               </span>
                            <p> I am very impressed by the talent levels of
                                 consol consultants. In my experience, 
                                everyone has had graduate levels of 
                                engineering, and niche skill sets.With consol 
                                I have had great flexibility, Scaling up and 
                                down when needed. They have allowed 
                                me to be reactive in my projects and I’m 
                                always confident when working with them.</p>
                            </div>
                       
                        </div>
                    </div>
                    <div class="carousel-item">
                           <div class="col-lg-4 col-md-4 ">
                         <div class="clientBlock" style="width:100%;">
                                   <img src="<?php bloginfo('template_url');?>/images/clientsBezmialim.jpg">
                                   <h5>     BEZMIALIM</h5>
                                   <span>had implemented <span class="changeColor">getway </span> project and
                                       <span class="changeColor">telemedicine </span>
                                       </span>
                                    <p> I am very impressed by the talent levels of
                                         consol consultants. In my experience, 
                                        everyone has had graduate levels of 
                                        engineering, and niche skill sets.With consol 
                                        I have had great flexibility, Scaling up and 
                                        down when needed. They have allowed 
                                        me to be reactive in my projects and I’m 
                                        always confident when working with them.</p>
                                </div>
                        
                           </div>
                    </div>
                    <div class="carousel-item">
                           <div class="col-lg-4 col-md-4 ">
                        <div class="clientBlock" style="width: 100%">
                           <img src="<?php bloginfo('template_url');?>/images/clientSa%C4%9Fl%C4%B1kb.jpg">
                           <h5>   sağlık bakanlığı</h5>
                           <span>had implemented <span class="changeColor">getway </span> project and
                               <span class="changeColor">telemedicine </span>
                               </span>
                            <p> I am very impressed by the talent levels of
                                 consol consultants. In my experience, 
                                everyone has had graduate levels of 
                                engineering, and niche skill sets.With consol 
                                I have had great flexibility, Scaling up and 
                                down when needed. They have allowed 
                                me to be reactive in my projects and I’m 
                                always confident when working with them.</p>
                        </div>
                        
                            </div>
                    </div>
                    <div class="carousel-item">
                            <div class="col-lg-4 col-md-4 ">
                         <div class="clientBlock" style="width: 100%;">
                           <img src="<?php bloginfo('template_url');?>/images/clientsSawad.jpg">
                           <h5>  King Saud Medical City </h5>
                           <span>had implemented <span class="changeColor">getway </span> project and
                               <span class="changeColor">telemedicine </span>
                               </span>
                            <p> I am very impressed by the talent levels of
                                 consol consultants. In my experience, 
                                everyone has had graduate levels of 
                                engineering, and niche skill sets.With consol 
                                I have had great flexibility, Scaling up and 
                                down when needed. They have allowed 
                                me to be reactive in my projects and I’m 
                                always confident when working with them.</p>
                        </div>
                            
                            
                            
                        </div>
                        
                        
                    </div>
            
                </div>
        <!--        <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>
        </div>
    </div>
    </div>
    
    <script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
    <!--scripts loaded here-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/carousel.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>
