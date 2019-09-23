/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Search
4. Init Menu
5. Init Language Slider
6. Init Timer


******************************/

$(document).ready(function()
{
	"use strict";


	initLang();	


	function initLang()
	{
		if($('.language_slider').length)
		{
			var langSlider = $('.language_slider');
			langSlider.owlCarousel(
			{
				loop:true,
				autoplay:true,
				smartSpeed:100,
				nav:false,
				dots:false,
				responsive:
				{
					0:{items:2},
					480:{items:4},
					720:{items:6},
					990:{items:9}
				}
			});
			// langSlider.owlCarousel({
			// 	items : 10, //10 items above 1000px browser width
			// 	itemsDesktop : [1000,8], //5 items between 1000px and 901px
			// 	itemsDesktopSmall : [900,4], // betweem 900px and 601px
			// 	itemsTablet: [600,4], //2 items between 600 and 0;
			// 	itemsMobile : 2 // itemsMobile disabled - inherit from itemsTablet option				
			// });
			if($('.lang_prev').length)
			{
				var prev = $('.lang_prev');
				prev.on('click', function()
				{
					langSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.lang_next').length)
			{
				var next = $('.lang_next');
				next.on('click', function()
				{
					langSlider.trigger('next.owl.carousel');
				});
			}
		}
	}

});