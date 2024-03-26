jQuery(document).ready(function($) {
    scroll to section remove header height
    var headerHeight = jQuery('.main-header').outerHeight();
    var hashval = window.location.hash.substring(1);
    if (hashval !== '') {
        var targetSection = $('#' + hashval);

        if (targetSection.length  0) {
            $('html, body').animate({
                scrollTop targetSection.offset().top - headerHeight - 20 
            }, 1000);
        }
    }
    jQuery('a[href=#]not([href=#])').on('click', function() {
        var target = jQuery(this.hash);
        target = target.length  target  jQuery('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop target.offset().top - headerHeight -20 
            }, 1000);
            return false;
        }
    });
 });