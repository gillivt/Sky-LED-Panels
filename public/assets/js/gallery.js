/* 
 * File: gallery.js
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 27-Jan-2016 02:43:36
 * 
 * Purpose:
 * 
 * 
 * Modification History:
 * 
 */

//set active page
$('li.active').removeClass('active');
$('li#gallery').addClass('active');

// fade main div in and out
$('#mywrapper').fadeIn(200);
$('a').click(function(e){
    e.preventDefault();
    if (!$(this).hasClass('SM')) {
        var href = $(this).attr('href');
        $('div#mywrapper').fadeOut(200, function () {
            window.location = href;
        });
    } else {
       var href=$(this).attr('href');
       window.location = href;
    }
});

// set carousel height etc
var headerHeight = 52;
var footerHeight = 30;
var contentHeight = $(window).height() - (headerHeight + footerHeight);
var titleSpace = 75;
var carouselMargin = 10;
var carouselHeight = contentHeight - (titleSpace + (2 * carouselMargin));
var imgHeight = carouselHeight - 20;

// set css heights 
$("section.carousel-inner").css("height", carouselHeight + "px");
$("section.carousel-inner div.item img").css("height", imgHeight + "px");

// check for windows size changes
$(window).resize(function () {
    contentHeight = $(window).height() - (headerHeight + footerHeight);
    carouselHeight = contentHeight - (titleSpace + (2 * carouselMargin));
    imgHeight = carouselHeight - 20;

    // reset css heights 
    $("section.carousel-inner").css("height", carouselHeight + "px");
    $("section.carousel-inner div.item img").css("height", imgHeight + "px");
});

