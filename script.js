'use strict';

$(document).ready(function () {
   $('p:first').css('color','red');
   $('p:last').css('color','red');
//   $('h2:has(i)').css('color','red');
   $('h2 > i').css({color: 'red'});
//   $('li:eq(3)').css('color', 'red');
   $('li:lt(10)').css('color', 'red');

});




