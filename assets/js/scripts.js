(function( root, $, undefined ) {
	"use strict";
	
	// MOVE BACKGROUND IMAGE HORIZONTALLY WHEN VISIBLE IN VIEWPORT
	/*
	var bgimg = document.querySelector('.section_has_bg_img');
	
	(function() {
		
		var throttle = function (type, name, obj) {
			var obj = obj || window;
			var running = false;
			var func = function () {
				if (running) {
					return;
				}
				
				running = true;
				requestAnimationFrame(function() {
					obj.dispatchEvent(new CustomEvent(name));
					running = false;
				});
			};
			
			obj.addEventListener(type, func);
		};
		
		throttle("scroll", "optimizedScroll");
	})();
	window.addEventListener("optimizedScroll", function() {
		//leftItem.style.transform = "translateX(-" + window.pageYOffset / 5 + "px";
		bgimg.style.backgroundPosition = "left" + window.pageYOffset / 5 + "px" + "center";
	});
	*/
	
	$(window).on("load resize scroll", function() {
	  $(".section_has_bg_img").each(function() {
	    var windowTop = $(window).scrollTop();
	    var elementTop = $(this).offset().top;
	    var leftPosition = windowTop - elementTop;
	      $(this)
	        .css({ backgroundPositionX: leftPosition });
	  });
	});
	
	// SMOOTH SCROLL AFTER PAGE LOAD
	if ( window.location.hash ) scroll(0,0);
	setTimeout( function() { scroll(0,0); }, 1);
	
	$(function () {
		// ADD CLASS TO PARENT CONTAINER OF SHORTCODE COLUMNS
		if ( $('.content-column').length ) {
			$('.content-column').parent().addClass('content-column-container');
		}
		// BLOG PAGINATION
		if ( $('.next').text() <= 0 ) {
			$('.next').remove();
		}
		
		if (window.location.hash ) {
			// smooth scroll to the anchor id
			$('html, body').animate({
			 	scrollTop: $(window.location.hash).offset().top + 'px'
			}, 1000);
		}
	});
	
	// SMOOTH SCROLL TO ANCHORS
	$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target: $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				//setTimeout(function(){	
				$('html,body').animate({
					scrollTop: target.offset().top
				},
				1000);
				return false;
			}
		}
	});
	
	// CHECK IF URL HAS HASH, IF SO CLOSE MENU AND OVERLAY
	var menuItem = $('.menu li a'),
		modalOverlay = $('.modal');
	
	menuItem.click(function() {
		if ( menuItem.attr('href').indexOf('#') ) {
			$('body, .hamburger').toggleClass('is-active');
			modalOverlay.fadeOut();
		}
	});
	
	
	$(document).ready(function() {
		AOS.init();
		
		$.fn.visible = function(partial) {
    
			var $t            = $(this),
		    	$w            = $(window),
		        viewTop       = $w.scrollTop(),
		        viewBottom    = viewTop + $w.height(),
		        _top          = $t.offset().top,
		        _bottom       = _top + $t.height(),
		        compareTop    = partial === true ? _bottom : _top,
		        compareBottom = partial === true ? _top : _bottom;
		    
		    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
		
		};
		
		$(window).scroll(function(event) {
			$(".section_has_bg_img").each(function(i, el) {
				var el = $(el);
				if (el.visible(true)) {
					el.addClass("visible");
				} else {
					el.removeClass("visible");
				}
			});
		});
	});
	
	// HIDE/SHOW HEADER ON SCROLL
	var lastScrollTop = 0;
	var delta = 5;
	$(window).on('scroll', function() {
		var st = $(this).scrollTop();
		if (st < lastScrollTop) {
			$('header').addClass('up').removeClass('down');
		} else if (st > lastScrollTop && st > delta) {
			$('header').addClass('down').removeClass('up');
		}
		
		lastScrollTop = st;
	});
	
	// ADD CLASS TO HEADER ON SCROLL TO SHRINK
	var $document = $(document);
	
	$document.scroll(function() {
		if ($document.scrollTop() >= 50) {
			$('body').addClass('shrink');
		} else {
			$('body').removeClass('shrink');
		}
		
		//inViewport();
		/*
		$(".cta").each(function(i, el) {
			var el = $(el);
			if (el.visible(true)) {
				el.addClass("expand");
			} else {
				el.removeClass("expand");
			}
		});
		*/
	});

} ( this, jQuery ));