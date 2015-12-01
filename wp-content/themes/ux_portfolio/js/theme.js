
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
        console.log($mainNav)
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
// logo show/hide...






	};

	// Initialize nav classes...
	stickyNav();

	// Then re-run on scroll
	$window.scroll(function () {
		stickyNav();
	});

// scrollscrolling effect

// $(document).ready(function(){
//   $('#navigation a, #fixedbar a').on('click', function(e) {
//     e.preventDefault();
//   });
  
//   $(window).on('scroll',function() {
//     var scrolltop = $(this).scrollTop();
 
//     if(scrolltop >= 215) {
//       $('#fixedbar').fadeIn(250);
//     }
    
//     else if(scrolltop <= 210) {
//       $('#fixedbar').fadeOut(250);
//     }
//   });
// });

// var lastScrollTop = 0;

// $('.logo-small').addClass('hide');
// //$('.logo-big').addClass('hide');

// $(window).scroll(function (event) {
    
//     var st = $(this).scrollTop();
    
//     if (st > 0) {
//         if (st > lastScrollTop) {
//             // downscroll code
//             // $('.logo-small').removeClass('hide')
//         } else {
//             // uproll code
//             // $('.logo-small').removeClass('show');
//         }
//     } 
//     lastScrollTop = st;
// });





});