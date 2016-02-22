/* 
 * File: menus.js
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
$('li.active').removeClass('active');
$('li#menus').addClass('active');

// fade main div in and out
$('div#mywrapper').fadeIn(200);
$('a').click(function(e){
    e.preventDefault();
    var href= $(this).attr('href');
    $('div#mywrapper').fadeOut(200, function() {
        window.location=href;
    });
});