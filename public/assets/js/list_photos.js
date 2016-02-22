/* 
 * File: list_photos.js
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 03-Feb-2016 14:12:03
 * 
 * Purpose:
 * 
 * 
 * Modification History:
 * 
 */

// fade main div in and out
$('div#mywrapper').fadeIn(200);
$('a').click(function(e){
    e.preventDefault();
    var href= $(this).attr('href');
    $('div#mywrapper').fadeOut(200, function() {
        window.location=href;
    });
});

