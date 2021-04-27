( function() {

	var app = {

		aosInit: function() {

			setTimeout(function(){
				AOS.init();
			}, 1000);
		},

		initDetectScroll: function() {
			if( jQuery(window).width() > 991 && jQuery(window).scrollTop()  > 56 ) {
				jQuery('header.header').addClass('show-fixed');
			} else {
				jQuery('header.header').removeClass('show-fixed');
			}
		},

		initHeader: function() {
			/* Split Nav */
			jQuery(".header-inner #nav2").splitNav({
				logo: '.logo-holder',
				navClasses : 'col-md-4',
				roundoff : false
			});
			
			jQuery('.logo-holder').addClass('col-md-4 no-padding');
			console.log(324324);
		},
		
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},
		initFeaturedProperties: function() {
			/* Put featured properties code here */
		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
		},
		initTestimonials: function() {
			/* Put testimonials code here */
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		}
		
	}

	
	jQuery(document).ready( function() {

		app.aosInit();

		/* Initialize quick search */
		app.initHeader();
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();

	
		
	});
	
	jQuery(window).on('load', function(){
		jQuery('.logo-holder').prev().addClass('nav-left');
        jQuery('.logo-holder').next().addClass('nav-right');
        jQuery('header.header').css({'opacity' : 1});


		setTimeout(function() {
            // jQuery('a.introPopupTrigger').trigger('click');
            jQuery('.aios-popup-body').addClass('intro-popup-body');
        },5000);

	})

	jQuery(window).on('scroll', function(){
		app.initDetectScroll();

	})



})();