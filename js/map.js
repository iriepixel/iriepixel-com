var geocoder;
var map;

var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

var options = {

  center: new google.maps.LatLng(50.8248103, -0.1398502),
  streetViewControl: false,
  mapTypeControl: false,
  zoom: 15,
  scrollwheel: false,
  draggable: false,
  mapTypeId: 'Styled'

};

var div = document.getElementById('googleMap');

var map = new google.maps.Map(div, options);

var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);

function locationMap() {
geocoder = new google.maps.Geocoder();

var latlng = new google.maps.LatLng(50.8248103, -0.1398502);

var image = 'https://iriepixel.com/wp-content/themes/iriepixel/images/iriepixel-map-pin.svg';
var marker = new google.maps.Marker({
  map: map,
  position: latlng,
  icon: image
});
var infowindow = new google.maps.InfoWindow({
        content: 'IRIE PIXEL LIMITED<br />'+
                  '4 Orange Row<br />'+
                  'Brighton<br />'+
                  'BN1 1UQ<br />'+
                  'United Kingdom<br />'
        });
google.maps.event.addListener(marker, 'click', function() {
infowindow.open(map,marker);
});
}

// Resize stuff...
google.maps.event.addDomListener(window, 'resize', function() {
  var center = map.getCenter();
  google.maps.event.trigger(map, 'resize');
  map.setCenter(center);
});

window.onload = locationMap();
