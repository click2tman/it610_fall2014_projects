jQuery(function($){
	$(document).ready(function(){
		// Masonry
		function wpex_isotope() {
			var $container = $('.blog-isotope');
			$container.imagesLoaded(function(){
				$container.isotope({
					itemSelector: '.blog-entry',
					transformsEnabled: false,
					animationOptions: {
						duration: 400,
						easing: 'swing',
						queue: false
					}
				});
			});
		} wpex_isotope();
		$(window).resize(function () {
			wpex_isotope();
		});

		$("#toggle").on("click", function(){	
			$(".off").slideToggle();
			$(this).toggleClass("close");
		});

		//Search
		$(".search1").on("click", function(){	
			$(this).toggleClass("active");
			$("#searchform").slideToggle();
			if ($(".more").hasClass("active")) {
				$(".more").removeClass("active");
				$("#more").slideToggle();
			}
			if ($(".search1").hasClass("active")) {
				$("search1").removeClass("active");
			}
		});

		//Share
		$(".share").on("click", function(){	
			$(this).toggleClass("active");
			$(".share1").slideToggle();
		});

		//logo
		$("#logoimg").hover(
		    function () {
		    	var min = 1;
		    	var max = 2;
		     	var r = Math.floor(Math.random() * (max - min + 1) + min); // random number from min to max
		     	console.log(r);
		     	$(this).attr("src", "wp-content/themes/wpex-tetris/images/logo" + r + ".gif");
			},
			function () {
				$(this).attr("src", "wp-content/themes/wpex-tetris/images/logo.png");
			}
		);

		//More
		$(".more").on("click", function(){	
			$(this).toggleClass("active");
			$("#more").slideToggle();
			if ($(".search1").hasClass("active")) {
				$(".search1").removeClass("active");
				$("#searchform").slideToggle();
			}
			if ($(".more").hasClass("active")) {
				$("more").removeClass("active");
			}
		});
		//animate comments scroll
		$(".comment-scroll a").click(function(event){
			event.preventDefault();
			$('html,body').animate({ scrollTop:$(this.hash).offset().top}, 'normal' );
		});
		//superFish
		$("ul.sf-menu").superfish({
			delay: 200,
			autoArrows: false,
			dropShadows: false,
			animation: {opacity:'show', height:'show'},
			speed: 'fast'
		});
		// Pretty Photo
		if ($(window).width() > 767) {
			$(".prettyphoto-link").prettyPhoto({
				show_title: false,
				social_tools: false,
				slideshow: false,
				autoplay_slideshow: false,
				wmode: 'opaque'
			});
			$("a[rel^='prettyPhoto']").prettyPhoto({
				show_title: false,
				social_tools: false,
				autoplay_slideshow: false,
				overlay_gallery: true,
				wmode: 'opaque'
				
			});
		}

		//responsive
		
	//	$("<select />").appendTo("#navigation");
	//	$("<option />", {
	//		"selected": "selected",
	//		"value" : "",
	//		"text" : globalLocalize.menuText
	//	}).appendTo("#navigation select");
	//	$("#navigation a").each(function() {
	//		var el = $(this);
	//		if(el.parents('.sub-menu .sub-menu').length >= 1) {
	//			$('<option />', {
	//				'value' : el.attr('href'),
	//				'text' : '-- ' + el.text()
	//			}).appendTo("#navigation select");
	//		}
	//		else if(el.parents('.sub-menu').length >= 1) {
	//			$('<option />', {
	//			 'value' : el.attr("href"),
	//			 'text' : '- ' + el.text()
	//			}).appendTo("#navigation select");
	//		}
	//		else {
	//			$('<option />', {
	//				'value' : el.attr('href'),
	//				'text' : el.text()
	//			}).appendTo("#navigation select");
	//		}
	//	});
//
	//	$("#navigation select").change(function() {
	//		window.location = $(this).find("option:selected").val();
	//	});
//
	//	$("#navigation select").uniform();

		//fitvids
		$(".fitvids").fitVids();
	}); // end doc ready

	$(window).load(function(){
		// Slider
		$('#single-post-slider').imagesLoaded( function() {
			$("#single-post-slider").flexslider({
				animation: 'slide',
				slideshow: true,
				controlNav: false,
				prevText: '',
				nextText: '',
				smoothHeight: true,
				start: function(slider) {
					slider.container.click(function(e) {
						if( !slider.animating ) {
							slider.flexAnimate( slider.getTarget('next') );
						}
					
					});
				}
			});
		});
	}); // End window load

}); // end function