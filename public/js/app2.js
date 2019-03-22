var map;
var markers;
var infoWindow;
var bounds;
var initMap = function () {
    'use strict';
    // create a new map
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 38.896952, lng:  -77.029713},
        zoom: 13
    });
    infoWindow = new google.maps.InfoWindow({maxWidth: 350});
    bounds = new google.maps.LatLngBounds();
    markers = [];
    for (var i = 0; i < Locations.length; i++) {
        var title = Locations[i].title;
        var position = Locations[i].location;
        var id = Locations[i].id;
        var marker = new google.maps.Marker({
            title: title,
            position: position,
            animation: google.maps.Animation.DROP,
            id: id,
            map:map
        });
        // Push the marker to our array of markers.
        markers.push(marker);
    }
    map.addListener('click', function() {
        if (infoWindow) {
            infoWindow.close();
            infoWindow = new google.maps.InfoWindow({maxWidth: 350});
        }
    });
};

var mapError = function () {
    'use strict';

    window.console.log('Could not load Google Maps API');
    window.alert('Could not load Google Maps API');
};
var Locations=[
    {   
    title: "Smithsonian Institution",
    id: 1,
    location:{
      lat: 38.885994, 
      lng: -77.021281, }
    },{   
    title: "United States Holocaust Memorial Museum",
    id: 2,
    location:{
      lat: 38.886708, 
      lng: -77.032607, }
    }, {   
    title: "International Spy Museum",
    id:3,
    location:{
      lat: 38.896945, 
      lng: -77.023617, }
    }, {   
    title: "Renwick Gallery of the Smithsonian American Art Museum",
    id: 4,
    location:{
      lat: 38.898961, 
      lng: -77.039067,}
    },{
    title: "Library of Congress",
    id: 5,
    location:{
      lat:38.888684, 
      lng: -77.004719,}
    },{   
    title: "National Geographic Museum",
    id:6,
    location:{
      lat: 38.905162, 
      lng: -77.037964,}
    }, {
    title: "The Phillips Collection",
    id:7,
    location:{
      lat: 38.911759, 
      lng: -77.046912,}  
    }   
];

var viewModel = function ()
     {
    'use strict';
    var self = this;
// store locations in an observable Array
    self.locationList = ko.observableArray([]);
    self.filter = ko.observable('');
    Locations.forEach(function (val) {
        self.locationList.push(val);
    });
    // Show all markers when map loaded
    self.showMarkers = function () {
        // Extend the boundaries of the map for each marker and display the marker
        for (var i = 0; i < markers.length; i++) {
            markers[i].setAnimation(google.maps.Animation.DROP);
            markers[i].setVisible(true);
            // Create an onclick event to open an infowindow at each marker.
            markers[i].addListener('click', self.openInfoWindow(markers[i]));
            bounds.extend(markers[i].position);
        }
        map.fitBounds(bounds);
    };
    // Show current marker info when selecting a location from the list
    self.showCurrentMarker = function (location) {
        for (var i = 0; i < markers.length; i++) {
            if (markers[i].id === location.id) {
                self.populateInfoWindow(markers[i]);
            }
        }
    };
    self.openInfoWindow = function (marker) {
        return function () {
            self.populateInfoWindow(marker);
        };
    };
    self.closeInfoWindow = function () {
        if (infoWindow) {
            infoWindow.close();
            infoWindow = new google.maps.InfoWindow({maxWidth: 350});
        }
    };
    
    self.populateInfoWindow = function (marker) {
        if (infoWindow.marker !== marker) {
            marker.setAnimation(4);  
            infoWindow.marker = marker;
            

            var wikiUrl = 'https://en.wikipedia.org/w/api.php?action=opensearch&format=json&search=' + marker.title;
            $.ajax({
                url: wikiUrl,
                dataType: 'jsonp'
            }).done(function (response) {
                var articleStr = response[1]; 
                var articleSummary = response[2];  
                var articleUrl = response[3];  
                for (var i = 0; i < articleStr.length; i++) {
                    infoWindow.setContent('<h4 class="iw-title">' + marker.title + '</h4>' +
                        '<h5>Relevant Wikipedia Summary</h5>' +
                        '<p>' + articleSummary[i] + '</p>' +
                        '<h5>Relevant Wikipedia Links</h5>' +
                        '<a href="' + articleUrl[i] + '">' + articleStr[i] + '</a>' );
                }

                }).fail(function (jqXHR, textStatus) {
              window.console.log('Could not load Wikipedia API');
              infoWindow.setContent('<div class="alert alert-danger">' +
                    '<strong>Error! </strong><span>Could not load Wikipedia API</span>' +
                    '</div>');
            });
               
            infoWindow.open(map, marker);
            infoWindow.addListener('closeclick', function() {
                infoWindow.marker = null;
            });
        }
    };

    self.filterLocationList = ko.computed(function () {
        var filter = self.filter().toLowerCase();
        if (!filter) {
            self.closeInfoWindow();  
          if (map) {
                self.showMarkers();
            } else {
              setTimeout(function () {
                  self.showMarkers();
              }, 1000);
            }
            return self.locationList();
        } else {
            return ko.utils.arrayFilter(self.locationList(), function (val, index) {
                var checkMatch = stringStartsWith(val.title.toLowerCase(), filter);
                if (!checkMatch) {
                    self.closeInfoWindow();  // close the current infowindow
                    markers[index].setVisible(false);
                } else {
                    self.closeInfoWindow();  // close the current infowindow
                    markers[index].setAnimation(google.maps.Animation.DROP);
                    markers[index].setVisible(true);
                }
                return checkMatch;
            });
        }
    }, self);

    self.toggleMenu = function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
    };

    self.closeMenu = function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');
    };
};
ko.applyBindings(new viewModel());
var stringStartsWith = function (string, startsWith) {
    string = string || "";
    if (startsWith.length > string.length) {
        return false;
        }
    return string.substring(0, startsWith.length) === startsWith;
};
