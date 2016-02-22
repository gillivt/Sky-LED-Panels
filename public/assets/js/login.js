/* 
 * File: login.js
 * 
 * Copyright © 2016 Terry Gilliver <terry@comp-solutions.org.uk> - Computer Solutions
 * 
 * Created: 02-Feb-2016 15:23:35
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
$('#password').hideShowPassword({
  // Creates a wrapper and toggle element with minimal styles.
  innerToggle: true,
  // Makes the toggle functional in touch browsers without
  // the element losing focus.
  touchSupport: Modernizr.touch
});