
<!--<?php ?>-->

<!DOCTYPE html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
<!--      Tiny slider-->
    </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/TemplateParts/tiny/demo/css/prism.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/TemplateParts/tiny/dist/tiny-slider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/TemplateParts/tiny/demo/css/styles.css">
      <!--[if (IE 8)&!(IEMobile)]><script src="../dist/tiny-slider.helper.ie8.js"></script><![endif]-->
      <style>
          button [data-controls=prev]{
    color:red !important;
              background: red !important;
       }
/*          #lazyload_wrapper .tns-outer{
              display: none;
          }*/
         #lazyload_wrapper .tns-outer button,#lazyload_wrapper .tns-outer .tns-controls,#lazyload_wrapper .tns-outer .tns-nav{
              display: none !important;
          }
          .tns-lazy-img.tns-complete{
              width:100% !important;
              height:393px !important;
          }
           @media (min-width:300px) and (max-width:768px)
          {
              .tns-inner{
        margin: 0px !important ;
        margin: 63px !important;
    }
    #lazyload-iw {
          margin: 0px !important ;
        margin: -23px !important;
    }
          }
      </style>
  </head>
  <body>
    <div class="slider-container">
      <div id="lazyload_wrapper">

        <div class="lazyload" id="lazyload">
          <div>
            <div>
                 <img class="tns-lazy-img" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="   
                data-src="<?php bloginfo('template_url');?>/TemplateParts/tiny/demo/images/cli1.png"      
                      alt="" width="600" height="600">
            </div>
  
          </div>
          <div>
            <div>
               <img class="tns-lazy-img" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="    data-src="<?php bloginfo('template_url');?>/TemplateParts/tiny/demo/images/cli2.png" alt="" width="600" height="600">
            </div>
  
          </div>
          <div>
            <div>
                 <img class="tns-lazy-img" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="    data-src="<?php bloginfo('template_url');?>/TemplateParts/tiny/demo/images/cli3.png" alt="" width="600" height="600">
            </div>

          </div>
          <div>
            <div>
              <img class="tns-lazy-img" src="data:image/gif;base64,R0lGODlhAQABAPAAAMzMzAAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="    data-src="<?php bloginfo('template_url');?>/TemplateParts/tiny/demo/images/cli4.png" alt="" width="600" height="600">
            </div>

          </div>
 
        </div>
      </div>
    
    </div>
    <script src="<?php bloginfo('template_url');?>/TemplateParts/tiny/demo/js/prism.js"></script> 
    <script>

    var doc = document,
      slideList = doc.querySelectorAll('.slider-container > div'),
      pageNavContainer = doc.querySelector('.nav'),
      pageNav = doc.querySelector('.nav ul'),
      toggleHandle = doc.querySelector('.nav-toggle-handle'),
      divider = window.innerHeight / 2,
      scrollTimer,
      resizeTimer;

    toggleHandle.onclick = function () {
    var classN = pageNavContainer.className;
    pageNavContainer.className = (classN.indexOf(' active') > 0) ? classN.replace(' active', '') : classN + ' active';
    };

    if (window.addEventListener) {
    window.addEventListener('scroll', function () {
      clearTimeout(scrollTimer);

      scrollTimer = setTimeout(function () {
        [].forEach.call(slideList, function (el) {
          var rect = el.getBoundingClientRect(),
              navLink = pageNav.querySelector('[href="#' + el.id + '"]');
          if (rect.top <= divider && rect.bottom > divider) {
            if (navLink.className !== 'active') { navLink.className = 'active'; }
          } else {
            if (navLink.className !== '') { navLink.className = ''; }
          }
        });
      }, 100);
    });

    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);

      resizeTimer = setTimeout(function () {
        divider = window.innerHeight / 2;
      }, 100);
    });

    pageNav.addEventListener('click', function () {
      var classN = pageNavContainer.className;
      if (classN.indexOf(' active') > 0) { pageNavContainer.className = classN.replace(' active', ''); }
    });
    }

    var mobile = 'false',
      isTestPage = false,
      isDemoPage = true,
      classIn = 'jello',
      classOut = 'rollOut',
      speed = 400,
      doc = document,
      win = window,
      ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
      fw = getFW(ww),
      initFns = {},
      sliders = new Object(),
      edgepadding = 50,
      gutter = 10;

    function getFW (width) {
    var sm = 400, md = 900, lg = 1400;
    return width < sm ? 150 : width >= sm && width < md ? 200 : width >= md && width < lg ? 300 : 400;
    }
    window.addEventListener('resize', function() { fw = getFW(ww); });
    </script> 
      

    <script src="<?php bloginfo('template_url');?>/TemplateParts/tiny/dist/tiny-slider.js"></script> 
    <script>

    // <script type="module">
    // import { tns } from '../src/tiny-slider.js';

    var options = {
   
    'lazyload': {
      container: '',
      items: 3,
      edgePadding: 50,
      lazyload: true,
      "autoplay": true,
       loop:true,
      "autoplayTimeout": 2000,
    }
    };

    for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    item.swipeAngle = false;
    if (!item.speed) { item.speed = speed; }

    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);

      // call test functions
      if (isTestPage && initFns[i]) { initFns[i](); }

      // insert code
      if (isDemoPage) {
        doc.querySelector('#' + i + '_wrapper').insertAdjacentHTML('beforeend', '<pre><code class="language-javascript">' + JSON.stringify(item, function (key, value) {
          if (typeof value === 'object') {
            if (value.id) {
              return "document.querySelector('#" + value.id + "')";
            }
          }
          return value;
        }, '  ') + '<\/code><\/pre>');
      }

    // test responsive pages
    } else if (i.indexOf('responsive') >= 0) {
      if (isTestPage && initFns[i]) { initFns[i](); }
    }
    }

    // goto
    if (doc.querySelector('#base_wrapper')) {
    var goto = doc.querySelector('#base_wrapper .goto-controls'),
        gotoBtn = goto.querySelector('.button'),
        gotoInput = goto.querySelector('input');

    gotoBtn.onclick = function (event) {
      var index = gotoInput.value;
      sliders['base'].goTo(index);
    };
    }
    </script>
  </body>
</html>
