'use strict';

$(document).ready(function () {
//   $('h2').html('!');
   $('h2').css({color: 'blue', 'font-size': '30px'})
   $('h2 i').css({color: 'red'});
   $('h2 > i').css({color: 'red'});
   $('h3').css({color: 'red'});
   $('.test').css('color', 'red');
   $('p + p').css('color', 'red');
   $('li + li.www').css('color', 'red');
//    $(':header').css('color', 'red');
//    $('h2:not(.test)').css('color', 'red');
//    $(':header:not(.test)').css('color', 'red');
//    $(':header + :header').css('color', 'red');
});




