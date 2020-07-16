var map;
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.7749, lng: -84.3964},
    zoom: 16
  });
}

function moveToLocation(lat, lng){
  const center = new google.maps.LatLng(lat, lng);
  var myLatlng = { lat: lat, lng: lng };
  //placeMarker(myLatlng);
  // using global variable:
  map.setZoom(18);
  window.map.panTo(center);
  
}

function placeMarker(location) {
  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  var marker = new google.maps.Marker({
      position: location, 
      map: map
  });
}

var colorMatch = {
  '0-19'     : 'red',
  '20-79'    : 'yellow',
  '80-100'   : 'green'
};

/******** 
$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

$('#myTab a[href="#profile"]').tab('show') // Select tab by name
$('#myTab li:first-child a').tab('show') // Select first tab
$('#myTab li:last-child a').tab('show') // Select last tab
$('#myTab li:nth-child(3) a').tab('show') // Select third tab
*/