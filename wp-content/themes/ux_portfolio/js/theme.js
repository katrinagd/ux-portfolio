
// BX slider

jQuery(document).ready(function($){
  jQuery('#slidebx').bxSlider({
    mode: 'horizontal',
    infiniteLoop: true,
    speed: 2000,
    pause: 8000,
    auto: true,
    pager: true,
    controls: false
  });


/**
 * Navbar Locking
 */



    var $window = $(window),
        $mainNav = $('.main-navigation'), // nav wrapper element
	    stickyNavTop = $mainNav[0].offsetHeight;
        // console.log($mainNav)
    // A helper function to check whether nav should be fixed
    var stickyNav = function () {
        var scrollTop = $window.scrollTop();
        
        if ( scrollTop > stickyNavTop ) {
            if ( $('body').hasClass('logged-in') ) {
                $mainNav.addClass('under-admin-bar fixed-nav');
                
            } else {
                $mainNav.addClass('fixed-nav');
                 $('.logo-small').removeClass('hide');
                 $('.logo-big').addClass('hide');
			}
		} else {
		    if ( $('body').hasClass('logged-in') ) {
				$mainNav.removeClass('under-admin-bar fixed-nav');
			} else {
				$mainNav.removeClass('fixed-nav');
                 $('.logo-small').addClass('hide');
                 $('.logo-big').removeClass('hide');
			}
		}

	};

	// Initialize nav classes...
	stickyNav();

	// Then re-run on scroll
	$window.scroll(function () {
		stickyNav();
	});


});