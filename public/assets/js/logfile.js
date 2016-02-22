/* 
 * File: logfile.js
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 03-Feb-2016 11:27:35
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

