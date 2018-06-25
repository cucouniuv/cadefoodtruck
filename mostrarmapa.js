var customLabel = {
	restaurant: {
		label: 'R'
	},
	bar: {
		label: 'B'
	}
};

var map;
var geocoder;

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(-33.863276, 151.207977),
        zoom: 17
    });

    geocoder = new google.maps.Geocoder();   

    var infoWindow = new google.maps.InfoWindow;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Localização encontrada.');
        map.setCenter(pos);
      }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }		

    downloadUrl('foods.xml', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');

        Array.prototype.forEach.call(markers, function(markerElem) {
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var type = markerElem.getAttribute('type');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');

            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');

            text.textContent = address
            infowincontent.appendChild(text);

            var icon = customLabel[type] || {};

            var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
            });

            marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
            });
        });
    });
}

function downloadUrl(url, callback) {
var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

request.onreadystatechange = function() {
  if (request.readyState == 4) {
    request.onreadystatechange = doNothing;
    callback(request, request.status);
  }
};

request.open('GET', url, true);
request.send(null);
}

function doNothing() {}

$(document).ready(function () {
    function carregarNoMapa(endereco) {
        geocoder.geocode({ 'address': endereco + ', Brasil', 'region': 'BR' }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();
 
                    $('#address').val(results[0].formatted_address);
 
                    var location = new google.maps.LatLng(latitude, longitude);

                    map.setCenter(location);
                }
            }
        });
    }

    $("#address").blur(function() {
        if($(this).val() != "")
            carregarNoMapa($(this).val());
    })

    // jquery autocomplete
    $("#address").autocomplete({
        source: function (request, response) {
            geocoder.geocode({ 'address': request.term + ', Brasil', 'region': 'BR' }, function (results, status) {
                response($.map(results, function (item) {
                    return {
                        label: item.formatted_address,
                        value: item.formatted_address,
                        latitude: item.geometry.location.lat(),
                        longitude: item.geometry.location.lng()
                    }
                }));
            })
        },
        select: function (event, ui) {
            var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
            map.setCenter(location);
        }
    });    
})