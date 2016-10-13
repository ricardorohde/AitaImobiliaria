"use strict";


function gMapHome () {
	if ($('.google-map-home').length) {
		$('.google-map-home').each(function () {
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
			    	lat: 40.925372,
			      	lng: -74.276544,
			      	title: 'North Parchrtome Steet ',
			      	infoWindow: {
						content: '<h4>North Parchrtome Steet</h4> <p>Marbella, Luxury Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/2.png',
			    	lat: 40.929399,
			      	lng: -74.430091,
			      	title: 'Raibow MAnor California',
			      	infoWindow: {
						content: '<h4>Raibow MAnor California</h4> <p>Marbella, Romantic Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/3.png',
			    	lat: 40.892321,
			      	lng: -74.477377,
			      	title: 'Sub Office for Rental',
			      	infoWindow: {
						content: '<h4>17 Thorpe Close Notting</h4> <p>Marbella, Village Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/4.png',
			    	lat: 40.935654,
			      	lng: -74.186256,
			      	title: 'Sub Office for Rental',
			      	infoWindow: {
						content: '<h4>Longkloof Studio</h4> <p>City Life Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/5.png',
			    	lat: 40.905099,
			      	lng: -74.209868,
			      	title: 'Main Head office',
			      	infoWindow: {
						content: '<h4>Raibow MAnor California</h4> <p>Marbella, Romantic Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/1.png',
			    	lat: 40.944543,
			      	lng: -74.075419,
			      	title: 'Sub office for rental',
			      	infoWindow: {
						content: '<h4>Redfort California</h4> <p>Elveria, Beach Vila</p>'
					}
				});

				map.addMarker({
			    	icon: 'images/map/2.png',
			    	lat: 41.879198,
			      	lng: -87.843116,
			      	title: 'Sub office for rental',
			      	infoWindow: {
						content: '<h4>Khan Toul Kark </h4> <p>Elveria, Ocean View Villa</p>'
					}
				});

				map.addMarker({
			    	icon: 'images/map/3.png',
			    	lat: 40.928710,
			      	lng: -74.039862,
			      	title: 'Sub office for rental',
			      	infoWindow: {
						content: '<h4>Raibow MAnor California</h4> <p>Marbella, Romantic Villa</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/4.png',
			    	lat: 40.856766,
			      	lng: -74.128476,
			      	title: 'Sub office for rental',
			      	infoWindow: {
						content: '<h4>Green Acres House</h4> <p>Marbella, Vila</p>'
					}
				});
				map.addMarker({
			    	icon: 'images/map/5.png',
			    	lat: 40.962876,
			      	lng: -74.132921,
			      	title: 'Sub office for rental',
			      	infoWindow: {
						content: '<h4>North Parchrtome Steet</h4> <p>Marbella, Luxury Villa</p>'
					}
				});
			}
		});  
	};
}


// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
		// add your functions
		gMapHome();
	})(jQuery);
});