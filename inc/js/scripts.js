			(function($) {
				$(document).ready(function() {

					"use strict";

					$('.fadeimage').hover(
						function() {$(this).stop().animate({ opacity: 0.5 }, 800);},
						function() {$(this).stop().animate({ opacity: 1.0 }, 800);}
					);

					$(".children,.sub-menu,.drop").parent("li").addClass("has-child-menu");
					$('.mastheadnav li ul,.mainnav li ul,.secondnav li ul').hide().removeClass('fallback');
					$('.mastheadnav > li,.mainnav > li,.secondnav > li').hover(
						function () {
							$('ul', this).stop().slideDown(250);
						},
						function () {
							$('ul', this).stop().slideUp(250);
						}
					);

					$('.gabfire_innerslider').owlCarousel({
						loop				: true,
						nav					: true,
						navText: [
						  '<i class="fa fa-angle-left"></i>',
						  '<i class="fa fa-angle-right"></i>'
						  ],
						dots				: true,
						mouseDrag			: false,
						touchDrag			: true,
						items				: 1,
						autoplay			: false,
						autoHeight			: true
					});

					$('#tabs-left').tab();
					$('#tabs > li > a').hover( function(){$(this).tab('show');});

					$('a[href=#top]').click(function(){	$('html, body').animate({scrollTop:0}, 'slow');	return false; });

					// Responsive Menu (TinyNav)
					$(".responsive_menu").tinyNav({
						active: 'current_page_item', // Set the "active" class for default menu
						label: ''
					});
					$(".tinynav").selectbox();
					$('.tooltip-link').tooltip({ placement: 'top'});

					//portfolio - show link
					$('.gallery-background').hover(
						function () {
							$(this).animate({opacity:'1'});
						},
						function () {
							$(this).animate({opacity:'0'});
						}
					);

				});
			})(jQuery);