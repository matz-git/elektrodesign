// //<![CDATA[
//     $(window).on('load', function() { // makes sure the whole site is loaded
//         $('#status').fadeOut(); // will first fade out the loading animation
//         $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
//         $('body').delay(350).css({'overflow':'visible'});
//     });
// //]]>


// document.onreadystatechange = function () {
//     var state = document.readyState;
//     if (state == 'interactive') {
//         $("#status").css('display', 'block');
//     } else if (state == 'complete') {

//         $('#status').delay(750).fadeOut(); // will first fade out the loading animation
//         $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
//         $('body').delay(1000).css({'overflow':'visible'});

//     }
// };