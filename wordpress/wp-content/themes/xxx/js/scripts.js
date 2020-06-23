/*global $,document,window*/
$(document).ready(function () {
/*    debugger;*/
    'use strict';
    $('.navva li a').click(function () {
        $('html,body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - 100
        }, 2000);

});
/*
   
    $(document).scroll(function() {
     
  var y = $(this).scrollTop();
  if (y > 800) {
   $('#mynav').css('background','rgba(0,0,0,.8) ');

  } else {
    $('#mynav').css('background','#610318');
         $('.navva li').css('background','transparent');
  }
});

*/

});
