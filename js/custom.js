var VnB = VnB || {};

VnB.gmaps = (function($, VnB) {
	function init() {
		if ($('.google-maps__wrapper').length > 0) {
			google.maps.event.addDomListener(window, "load", runGmapsInit);
		}
	}
	function runGmapsInit() {
		// 39.901737,-83.07686 - map settings
		var myPlace = new google.maps.LatLng(40.1028860,-82.8245560);
		// 39.899794,-83.077887  - the address
		var myCenter = new google.maps.LatLng(40.1028860,-82.8245560);
		var mapProp = {
			center:myPlace,
			zoom:14,
			styles: [{"featureType": "landscape","stylers": [{"saturation": -100},{"lightness": 65},{"visibility": "on"}]},{"featureType": "poi","stylers": [{"saturation": -100}, {"lightness": 51 }, {"visibility": "simplified"} ] }, {"featureType": "road.highway", "stylers": [{"saturation": -100 }, {"visibility": "simplified"} ] }, {"featureType": "road.arterial", "stylers": [{"saturation": -100 }, {"lightness": 30 }, {"visibility": "on"} ] }, {"featureType": "road.local", "stylers": [{"saturation": -100 }, {"lightness": 40 }, {"visibility": "on"} ] }, {"featureType": "transit", "stylers": [{"saturation": -100 }, {"visibility": "simplified"} ] }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25 }, {"saturation": -100 } ] }, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25 }, {"saturation": -97 } ] } ],
			mapTypeId:google.maps.MapTypeId.ROADMAP,
		    scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false,
		    draggable: false
		};
		var map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);
		var marker=new google.maps.Marker({
			position:myCenter,
		});
		marker.setMap(map);
		var iw = new google.maps.InfoWindow({
			content: "<div id='gmaps-modal'><span class='gmaps-modal__info'>Simmons Design Co.</span><span class='gmaps-modal__info'>5839 Middleham Lane</span><span class='gmaps-modal__info'>New Albany, OH 43054</span></div>",
			maxWidth: 280,
		});
		//	iw.open(map, marker);
		google.maps.event.addListener(marker, "click", function (e) { iw.open(map, marker); });
		google.maps.event.addDomListener(window, "resize", function() {
		 var center = map.getCenter();
		 google.maps.event.trigger(map, "resize");
		 map.setCenter(center); 
		});
	}
	function ref() { 
		google.maps.event.trigger(map, 'resize');
	}

	return {
		init: init
	};
})($, VnB);

VnB.parallax = (function($, VnB) {

	function init() {
		if ($('.with-parallax').length > 0) {
			var numOfParallaxElements = 1,
				arrayNum = 0,
				viewportHeight = window.innerHeight,
				parallaxEl = [],
				containerOffset = [];
			$('.with-parallax').each(function(){
				var $container = $(this),
					containerHeight = $container.height(),
					containerWidth = $container.width(),
					containerOffsetTop = $container.offset().top,
					bg = $container.css('background-image');
				bg = bg.replace('url(','').replace(')','');
				var newIMG = '<div class="parallax-wrap" style="height: ' + containerHeight + 'px; top: ' + containerOffsetTop + 'px;"><img src="' + bg + '" class="parallax parallax-' + numOfParallaxElements + '"></div>';
				$container.before(newIMG).css('background','none');
				var	$parallax = $('.parallax-' + numOfParallaxElements);
				$parallax.css({'width': '100%', 'height': 'auto'});
				parallaxEl[arrayNum] = $parallax;
				containerOffset[arrayNum] = containerOffsetTop;
				numOfParallaxElements++;
				arrayNum++;
			}); // for each parallax item
			var parallaxElements = $('.parallax');
			$( window ).scroll(function() {
				var i = 0,
					scrolltop = window.pageYOffset;

				parallaxElements.each(function(){
					if ((containerOffset[i] - scrolltop) < viewportHeight) {
						if (containerOffset[i] < viewportHeight) {
							parallaxEl[i].css('top', (scrolltop * .8) + 'px');
						} else {
							// parallaxEl[i].css('top', containerOffset[i] + ((scrolltop - containerOffset[i]) * .8) + 'px');
							parallaxEl[i].css('top', ((scrolltop - containerOffset[i]) * .8) + 'px');
						}
					} 
					i++;
				});
			});
		} // if .width-parallax.length > 0
	}
	return {
		init: init
	};
})($, VnB);

VnB.slider = (function($, VnB) {

	var current_slide = 1,
		num_slides = $(".slide").length,
		allow_animation = true,
		stop_animation = true,
		window_leave = false,
		next_slide = $('#next-slide'),
		is_responsive = false; // TEMPORARY!!!! MAKE THIS GLOBAL

	function init() {
		if (num_slides > 0) {
			$(window).bind("load", function() {
				if (!is_responsive) {
					$('.slide-1').css('z-index','100');
					setFreshInterval();
				}
			}); // window.bind
			window.onblur = function() {
			  window_leave = true;
			};
			// BUILD CONTROLS
				var buildControls = '<div id="prev-button"><i class="fa fa-angle-left"></i></div>';
				buildControls += '<div id="next-button"><i class="fa fa-angle-right"></i></div>';
				buildControls += '<div id="slider-controls-wrap"><div id="slider-controls-inner-wrap">';
				for (var i=0; i<num_slides; i++) {
					buildControls += '<span class="slider-control slider-go-' + (i + 1) + '">&#8226;</span>';
				}
				buildControls += '</div></div>';
			$('.slider').append(buildControls);
			$('.slider-go-1').addClass('active');
			// END BUILD CONTROLS
			$('#prev-button').click(function(){
				stop_animation = false;
				window_leave = false;
				if (allow_animation) {
					allow_animation = false;
					clearInterval(auto_change);
					changeSlide((current_slide - 1),function(){
						allow_animation = true;
						setFreshInterval();
					});
				}
			});
			$('#next-button').click(function(){
				stop_animation = false;
				window_leave = false;
				if (allow_animation) {
					allow_animation = false;
					clearInterval(auto_change);
					changeSlide((current_slide + 1),function(){
						allow_animation = true;
						setFreshInterval();
					});
				}
			});
			$('.slider-control').click(function(){
				stop_animation = false;
				window_leave = false;
				if (allow_animation) {
					allow_animation = false;
					// get this number
					var lastClass = $(this).attr('class').split(' ').pop(),
						goTo = lastClass.split("-").pop();
					clearInterval(auto_change);
					changeSlide(goTo,function(){
						allow_animation = true;
						setFreshInterval();
					});
				}
			});
		} // if .slider.length > 0
	}
	function changeSlide(moveToSlideNum, callback) {
		if (moveToSlideNum > num_slides) { moveToSlideNum = 1; }
		if (moveToSlideNum < 1) { moveToSlideNum = num_slides; }
		var this_current_slide = $('.slide.slide-' + current_slide),
			future_slide = $('.slide.slide-' + moveToSlideNum),
			future_slide_contents = future_slide.html();

		$('.slider-control.active').removeClass('active');
		$('.slider-go-' + moveToSlideNum).addClass('active');

		// prepare the next slide
		next_slide.removeClass().addClass('slide-' + moveToSlideNum).html(future_slide_contents).addClass('slider-bg-size').css('z-index','50');

		this_current_slide.fadeOut(1000,function(){
			future_slide.css('z-index','100');
			next_slide.css('z-index','5');
			this_current_slide.css('z-index','1').show();
			current_slide = moveToSlideNum;
			callback();
		});
	}
	function setFreshInterval() {
		if (window_leave) {
			clearInterval(auto_change);
		} else {
			auto_change = setInterval(function(){
				allow_animation = false;
				changeSlide((current_slide + 1), function(){
					allow_animation = true;
					clearInterval(auto_change);
					setFreshInterval();
				});
			}, 6500);
		} // end if window_leave
	}





	return {
		init: init
	};
})($, VnB);

VnB.validate = (function($, VnB) {
	var init = function() {
		// TODO:
		// add all the errors elements to the DOM
	};
	var sdcValidate = function(formID) {
		var this_form = document.getElementById(formID),
			i,
			holder,
			req,
			val,
			return_var = true,
			is_req, add_error,
			this_errors = new Array();
		for (i = 0; i < this_form.length ;i++) {
			var object = this_form.elements[i],
				this_error_id = 'error-' + object.getAttribute('id');
			if (document.getElementById(this_error_id)) {
				document.getElementById(this_error_id).style.display = 'none';
			}
			// is_req = false;
			add_error = false;
			val = object.value;
			// if (object.hasAttribute('req')) {
			// 	req = object.getAttribute('req');
			// 	if (req == 'yes') {
			// 		is_req = true;
			// 	}
			// } else { is_req = false; }
			is_req = (object.hasAttribute('required')) ? true : false;
			// if (object.hasAttribute('required')) {}
			if (object.hasAttribute('placeholder') && is_req) {
				holder = object.getAttribute('placeholder');
				if (val == holder) {
					return_var = false;
					add_error = true;
				}
			}
			if (is_req) {
				if (val == "" || val == " ") {
					return_var = false;
					add_error = true;
				} else if (val.length < 2) {
					return_var = false;
					add_error = true;
				} else if (object.getAttribute('type') == 'email') {
					var atpos = val.indexOf("@");
					var dotpos = val.lastIndexOf(".");
					if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=val.length) {
						return_var = false;
						add_error = true;
					}
	   			}
			}
			if (add_error) {
				this_errors[this_errors.length] = 'error-' + object.getAttribute('id');
			}
		} // for
		for (i = 0; i < this_errors.length ;i++) {
			document.getElementById(this_errors[i]).style.display = "block";
		} // for
		if (return_var) {
			return true;
		} else {
			return false;
		}
	}; // sdcValidate()
	return {
		init: init,
		check: sdcValidate
	};
})($, VnB);



VnB.parallax.init();
VnB.slider.init();
VnB.gmaps.init();
VnB.validate.init();







/////////////////////////
// Helper functions
/////////////////////////
function addlinks(data) {
    //Add link to all http:// links within tweets
    data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
	    return '<a href="'+url+'" class="tweeta" target="_blank"><span>'+url+'</span></a>';
    });
    //Add link to @usernames used within tweets
    data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
	    return '<a href="http://twitter.com/'+reply.substring(1)+'" style="font-weight:lighter;" >'+reply.charAt(0)+reply.substring(1)+'</a>';
    });
    return data;
}







		// window.addEventListener('scroll', function(){ // on page scroll
			// handleScroll($parallax);
		// }, false);
