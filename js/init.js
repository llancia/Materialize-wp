
jQuery(function($) {
$(document).ready(function(){
    $('.parallax').parallax();
    $('.button-collapse').sideNav();
if (navigator.userAgent.indexOf('Safari') && !navigator.userAgent.indexOf('Chrome')) {
    alert("safari");
    $('.parralax img').css("left", "0");
}
});
  }); // end of document ready
