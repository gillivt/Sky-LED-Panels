/* 
 * File: edit_photo.js
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 02-Feb-2016 15:15:46
 * 
 * Purpose:
 * 
 * 
 * Modification History:
 * 
 */
$('li.active').removeClass('active');
$('li#admin').addClass('active');
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
