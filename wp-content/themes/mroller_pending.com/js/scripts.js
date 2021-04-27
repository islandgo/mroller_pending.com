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
		initTeams: function() {
			/* Put featured properties code here */
			var map = jQuery(".comp-hp-team-container");
			var mapOrigWidth = 1600;
			var mapOrigHeight = 855;
			var container = jQuery(".hp-team");
			var containerWidth = container.width();
			var scale = containerWidth / mapOrigWidth;
			scale = scale > 1 ? scale : scale;
			map.css({
					transform: 'scale(' + scale + ')',
					transformOrigin: '0 0'
			});
			container.css({
					height: (mapOrigHeight * scale)
			});
		
			console.log('reszed');
		},
		fcMapHover: function() {
			jQuery('.comp-hp-team-container area').hover(
					function() {
							var currentID = jQuery(this).attr('data-area-id');
							console.log("currentID");
							console.log(currentID);
							var target = jQuery('.comp-hp-team-container div[data-area-id="'+ currentID +'"]');
		
							target.addClass('active');
							console.log(target);
							console.log(currentID);
					},
					function() {
						jQuery('.comp-hp-team-container div').removeClass('active');
					}
			);
			jQuery('.team-img .map-details > div').hover(function () {
				var currentID2 = jQuery(this).attr('data-area-id');
				var target2 = jQuery('.map-hover-item[data-area-id="' + currentID2 + '"]');
				target2.addClass('active');
				jQuery(this).addClass('active');
			}, function () {
				jQuery(this).removeClass('active');
			});
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

		app.fcMapHover();

		app.aosInit();

		/* Initialize quick search */
		app.initHeader();
		
		/* Initialize navigation */
		app.initNavigation();
		
		

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();

		app.initTeams();


	
		
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

	
	jQuery(window).on('resize', function(){
		/* Initialize featured properties */
		app.initTeams();
	})



})();