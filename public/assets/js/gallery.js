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