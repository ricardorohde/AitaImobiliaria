"use strict";


// Top header Dropdown
function headerDropdown () {
	if ($(".dropdown-menu li").length) {
		$(".dropdown-menu li").on('click', function(){
			$(this).parents(".dropdown").find('.btn-dropdown').html($(this).text() + ' <i class="fa fa-angle-down"></i>');
      		$(this).parents(".dropdown").find('.btn-dropdown').val($(this).data('value'));
		});
	};
}

// Top header Dropdown
function mainTitleDropdown () {
	if ($(".main_title").length) {
		$(".main_title .dropdown-menu li").on('click', function(){
			$(this).parents(".dropdown").find('.btn-dropdown').html($(this).text() + ' <i class="fa fa-sort-desc"></i>');
      		$(this).parents(".dropdown").find('.btn-dropdown').val($(this).data('value'));
		});
	};
}

// Top header language switcher
function languageSwitcher () {
	if ($("#polyglot-language-options").length) {
			$('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
				effect: 'fade',
                testMode: true,
                onChange: function(evt){
                    alert("The selected language is: "+evt.selectedItem);
                }
//                ,afterLoad: function(evt){
//                    alert("The selected language has been loaded");
//                },
//                beforeOpen: function(evt){
//                    alert("before open");
//                },
//                afterOpen: function(evt){
//                    alert("after open");
//                },
//                beforeClose: function(evt){
//                    alert("before close");
//                },
//                afterClose: function(evt){
//                    alert("after close");
//                }
			});
	};
}


// Tooltip 
function themeTooltip () {
	if ($(".tooltip").length) {
			 $('.tooltip').tooltipster({
			   animation: 'grow',
			   delay: 100,
			   theme: 'tooltipster-default',
			   touchDevices: false,
			   trigger: 'hover'
			});
	};
}



// Main-banner slider 
function mainBanner () {
	if ($("#main_slider").length) {
		$("#main_slider").revolution({
	      sliderType:"standard",
	      sliderLayout:"auto",
	      loops:false,
	      delay:15000,
	      navigation: {
	          arrows:{enable:true},
	          bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						style:"metis",
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:30,
						space:10,
						tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
					}        
	      },      
	      responsiveLevels:[2020,1183,975,751,484],
	            gridwidth:[1170,970,750,500,450],
	            gridheight:[800,970,850,650,600],
	            shadow:0,
	            spinner:"off",
	            autoHeight:"off",
	            disableProgressBar:"on",
	            hideThumbsOnMobile:"off",
	            hideSliderAtLimit:0,
	            hideCaptionAtLimit:0,
	            hideAllCaptionAtLilmit:0,
	            debugMode:false,
	            fallbacks: {
	              simplifyAll:"off",
	              disableFocusListener:false,
	            }
	    });
	};
}


// Main-banner slider Two

function mainBannerTwo () {
	if ($("#main_slider_two").length) {
		$("#main_slider_two").revolution({
	      sliderType:"standard",
			sliderLayout:"auto",
			delay:9000,
			navigation: {
				arrows:{enable:true}				
			},      
	      responsiveLevels:[2020,1183,975,751,600],
	            gridwidth:[1170,970,750,500,450],
	            gridheight:[800,800,650,650,800],
	            shadow:0,
	            spinner:"off",
	            autoHeight:"off",
	            disableProgressBar:"on",
	            hideThumbsOnMobile:"off",
	            hideSliderAtLimit:0,
	            hideCaptionAtLimit:0,
	            hideAllCaptionAtLilmit:0,
	            debugMode:false,
	            fallbacks: {
	              simplifyAll:"off",
	              disableFocusListener:false,
	            }
	    });
	};
}


// Select menu 

function selectDropdown () {
	if($(".selectmenu").length) {
		$( ".selectmenu" ).selectmenu();
	};
}

// Date Select
function dateSelect () {
	if($("#datepicker").length) {
		$( "#datepicker" ).datepicker();
	};
}

// Fancybox 

function FancypopUp () {
	if ($(".fancybox").length) {
		$(".fancybox").fancybox({
			openEffect	: 'elastic',
    		closeEffect	: 'elastic',
    		 helpers : {
		        overlay : {
		            css : {
		                'background' : 'rgba(0, 0, 0, 0.6)'
		            }
		        }
		    }
		});
	};
}


// Fancybox Video

function FancypopUpVideo () {
	if ($(".fancy_video").length) {
			$(".fancy_video").fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: false,
			width		: '60%',
			height		: '60%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	};
}

// Properties Viwe slider 

function propertiesViewSlider () {
	if ($("#properties-slider").length) {
		  var owl = $('#properties-slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                 768: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  }
                }
              })
	};
}


// Testimonial Slider

function testimonialSlider () {
	if ($("#client-slider").length) {
		 var owl = $('#client-slider');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
	};
}


// Home page map banner 
function bannerMap() {
  if ($('#banner-google-map').length) {
      $('#banner-google-map').each(function () {
			// getting options from html 
			var Self = $(this);
			var mapName = Self.attr('id');
			var mapLat = Self.data('map-lat');
			var mapLng = Self.data('map-lng');
			var iconPath = Self.data('icon-path');
			var mapZoom = Self.data('map-zoom');
			var mapTitle = Self.data('map-title');

			var styles = [
						    {
						        "featureType": "administrative",
						        "elementType": "labels.text.fill",
						        "stylers": [
						            {
						                "color": "#444444"
						            }
						        ]
						    },
						    {
						        "featureType": "landscape",
						        "elementType": "all",
						        "stylers": [
						            {
						                "color": "#f2f2f2"
						            }
						        ]
						    },
						    {
						        "featureType": "poi",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "road",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": -100
						            },
						            {
						                "lightness": 45
						            }
						        ]
						    },
						    {
						        "featureType": "road.highway",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "simplified"
						            }
						        ]
						    },
						    {
						        "featureType": "road.arterial",
						        "elementType": "labels.icon",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "transit",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "water",
						        "elementType": "all",
						        "stylers": [
						            {
						                "color": "#cbf0ff"
						            },
						            {
						                "visibility": "on"
						            }
						        ]
						    }
						];

			// if zoom not defined the zoom value will be 15;
			if (!mapZoom) {
				var mapZoom = 12;
			};
			// init map
			var map;
			map = new GMaps({
			    div: '#'+mapName,
			    scrollwheel: false,
			    lat: mapLat,
			    lng: mapLng,
			    styles: styles,
			    zoom: mapZoom
			});
			// if icon path setted then show marker
			if(iconPath) {
				map.addMarker({
			    	icon: 'images/map/1.png',
			    	lat: mapLat,
			      	lng: mapLng,
			      	title: 'North Parchrtome Steet',
			      	infoWindow: {
						content: '<h4>North Parchrtome Steet</h4> <p>Marbella, Luxury Villa</p>'
					}
				});
			}
		});
    // Google map 
  };
}

// Properties Viwe slider 

function propertiesViewSliderTwo () {
	if ($(".properties-slider-two").length) {
		 var owl = $('.properties-slider-two');
              owl.owlCarousel({
                nav: true,
                loop: true,
                navText:false,
                dots:false,
                autoplay:true,
                smartSpeed:500,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
	};
}


// Properties Viwe slider home 3 page
function propertiesSliderHome3 () {
	if ($("#properties_slider_3").length) {
		 var owl = $("#properties_slider_3");
 
		 owl.owlCarousel({
                nav: false,
                loop: true,
                navText:false,
                dots:true,
                autoplay:true,
                smartSpeed:300,
                autoplayHoverPause: true,
				autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1200: {
                    items: 3
                  },
                   1783: {
                    items: 4
                  }
                }
              })
	};
}





// isoptop 
function masanory () {
	if ($("#isotop_wrapper").length) {
		var $grid = $('#isotop_wrapper').isotope({
		  // options
		  itemSelector: '.isotop_item',

		});

		// filter items on button click
		$('.gallery_menu').on( 'click', 'li', function() {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		});

		 // change is-checked class on buttons
		  $('.gallery_menu').each( function( i, buttonGroup ) {
		    var $buttonGroup = $( buttonGroup );
		    $buttonGroup.on( 'click', 'li', function() {
		      $buttonGroup.find('.is-checked').removeClass('is-checked');
		      $( this ).addClass('is-checked');
		    });
		  });
	};
}


// Mixitup gallery
function mixitupGallery () {
	if ($("#mixitup_list").length) {
		$("#mixitup_list").mixItUp()
	};
}



// gallery single page slider
function gallerySlider () {
	if ($("#image-gallery").length) {
		 $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
	};
}


// accordion active class 
function accordion () {
	if ($("#accordion").length) {
		 $('#accordion > .panel').on('show.bs.collapse', function (e) {
		        var heading = $(this).find('.panel-heading');
		        heading.addClass("active-panel");
		        
		  });
		  
		  $('#accordion > .panel').on('hidden.bs.collapse', function (e) {
		      var heading = $(this).find('.panel-heading');
		        heading.removeClass("active-panel");
		        //setProgressBar(heading.get(0).id);
		  });
	};
}


// Single gallery slider
function singleGalleryCarousel () {
	if ($('.single-gallery-carousel-content-box').length && $('.single-gallery-carousel-thumbnail-box').length) {

		var $sync1 = $(".single-gallery-carousel-content-box"),
			$sync2 = $(".single-gallery-carousel-thumbnail-box"),
			flag = false,
			duration = 500;

			$sync1
				.owlCarousel({
					items: 1,
					margin: 0,
					nav: false,
					dots: false
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					margin: 1,
					items: 7,
					nav: true,
					dots: false,
					navText:false,
					center: false,
					responsive: {
						0:{
				            items:2,
				            autoWidth: false
				        },
				        400:{
				            items:3,
				            autoWidth: false
				        },
				        500:{
				            items:4,
				            center: false,
				            autoWidth: false
				        },
				        600:{
				            items:5,
				            autoWidth: false
				        },
				        1200:{
				            items:7,
				            autoWidth: false
				        }
				    },
				})
				.on('click', '.owl-item', function () {
					$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);

				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;		
						$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

	};
}

// Properties Banner slider
function bannerProperties () {
	if ($(".home_properties_slider").length) {
		 $('.home_properties_slider').owlCarousel({
		    loop:true,
		    margin:0,
		    responsiveClass:true,
		    autoplay:true,
		    dots:false,
            smartSpeed:500,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        800:{
		            items:3,
		            nav:false
		        },
		        1300:{
		            items:4,
		            nav:false
		        },
		        1700:{
		            items:5,
		            nav:false,
		            loop:false
		        }
		    }
		})
	};
}


// Mobile Navigation
function mobileNavToggler () {
	if ($('#menu').length) {
		$('#menu ul li.dropdown').append(function () {
			return '<i class="fa fa-bars"></i>';
		});
		$('#menu ul li.dropdown .fa').on('click', function () {
			$(this).parent('li').children('ul').slideToggle();
		});

	}
}

// placeholder remove
function removePlaceholder () {
	if ($("input,textarea").length) {
		$("input,textarea").each(
            function(){
                $(this).data('holder',$(this).attr('placeholder'));
                $(this).focusin(function(){
                    $(this).attr('placeholder','');
                });
                $(this).focusout(function(){
                    $(this).attr('placeholder',$(this).data('holder'));
                });
                
        });
	}
}

function menuScroll () {
  if ($('.fixed_menu').length) {
    var sticky = $('.fixed_menu'),
        scroll = $(window).scrollTop();

    if (scroll >= 190) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
    
  };

  if ($('.menu_fixed_style_two').length) {
    var sticky = $('.menu_fixed_style_two'),
        scroll = $(window).scrollTop();

    if (scroll >= 190) sticky.addClass('fixed_style_two');
    else sticky.removeClass('fixed_style_two');
    
  };

  if ($('.menu_fixed_style_three').length) {
    var sticky = $('.menu_fixed_style_three'),
        scroll = $(window).scrollTop();

    if (scroll >= 190) sticky.addClass('fixed_style_three');
    else sticky.removeClass('fixed_style_three');
    
  };
}



//Contact Form Validation
function contactFormValidation () {
  if($('.form-validation').length){
    $('.form-validation').validate({ // initialize the plugin
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        message: {
          required: true
        },
        phone: {
          required: true
        }
      },
      submitHandler: function(form) {
                $(form).ajaxSubmit({
                    success: function() {
                        $('.form-validation :input').attr('disabled', 'disabled');
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#alert_success').fadeIn();
                        });
                    },
                    error: function() {
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $('#alert_error').fadeIn();
                        });
                    }
                });
            }
        });
  }
}

// Close suddess Alret
function closeSuccessAlert () {
  if($('.closeAlert').length) {
    $(".closeAlert").on('click', function(){
      $(".alert_wrapper").fadeOut();
    });
    $(".closeAlert").on('click', function(){
      $(".alert_wrapper").fadeOut();
    })
  }
}

jQuery(document).on('ready', function() {
	headerDropdown ();
	mainTitleDropdown();
	languageSwitcher();
	themeTooltip();
	mainBanner();
	mainBannerTwo();
	selectDropdown();
	dateSelect();
	FancypopUp();
	FancypopUpVideo ();
	propertiesViewSlider();
	testimonialSlider();
	propertiesViewSliderTwo();
	bannerMap();
	propertiesSliderHome3();
	mixitupGallery ();
	gallerySlider();
	accordion ();
	singleGalleryCarousel ();
	bannerProperties ();
	mobileNavToggler ();
	removePlaceholder ();
	contactFormValidation ();
	closeSuccessAlert ()
});

jQuery(window).on('scroll', function () {
  (function ($) {
    menuScroll();
  })(jQuery);
});

jQuery(window).on('load', function () {
  (function ($) {
    masanory ();
  })(jQuery);
});
