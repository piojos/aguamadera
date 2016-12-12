(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			// Things to load for phones
		} else {
			// Things to load for desktop
		}

		$.get("http://ipinfo.io", function (response) {
			var country = response.country;
			var spanish = ['ES', 'AR', 'BO', 'CL', 'CO', 'CR', 'CU', 'DO', 'EC', 'SV', 'GT', 'HN', 'MX', 'NI', 'PN', 'PA', 'PE', 'PR', 'UY', 'VE'];
			if( $.inArray(country, spanish) != -1){
				$('nav .es').removeClass('hide');
				console.log('SI');
			} else {
				$('nav .en').removeClass('hide');
				console.log('yes');
			}
		}, "jsonp");

		$('a.menu_btn').click(function() {
			$('nav#menu').toggleClass('open');
			$('.side').toggleClass('open');
			console.log('done');
		});


		$(window).bind('scroll',function(e){
			parallaxScroll();
		});

		function parallaxScroll(){
			var scrolled = $(window).scrollTop();
			$('.vector').css('top',(0-(scrolled*.5))+'px');
			$('.vector > div:nth-child(odd)').css('top',(0-(scrolled*0.2))+'px');
			$('.wrap .row .txt, .wrap .row .img > img, .wrap .row.full > img').css('top',(0-(scrolled*.1))+'px');
		}



	});

})(jQuery, this);
