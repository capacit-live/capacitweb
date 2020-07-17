var script = document.createElement('script');
script.src = '//code.jquery.com/jquery-3.5.1.min.js';
document.getElementsByTagName('head')[0].appendChild(script);


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




/** 
$( document ).ready(function() {
  var headerParams = {'tokenHeader':'allow'};
  var api_url = 'https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map'
  var tokenHeader = 'allow' 

  $( ".content a" ).each(function( index, element ) {
    $.ajax({
        url: api_url + "?key=" + key + " &q=" + $( this ).text(),
        headers:headerParams,
        contentType: "application/json",
        dataType: 'json',
        success: function(result){
            console.log(result);
        }
    })
  });
});

//Postman code for GET

$.ajax({
  url: "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta",
  contentType: "application/json",
  type: 'GET',
  headers: {
    'tokenHeader':'allow'
  },
  dataType: 'json',
  success: function(result){
    console.log(result);
    console.log('peepeepoopoo');
  }
});
**/

var settings = {
  "url": "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "tokenHeader": "allow",
    "Access-Control-Allow-Origin" : "*", 
    "Access-Control-Allow-Credentials" : true,
    'Content-Type': 'application/json'
  },
  "body": JSON.stringify({ "message": "Hello World!" })
};

$.ajax(settings).done(function (response) {
  console.log(response);
});

/** 
var settings = {
  "url": "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "tokenHeader": "allow"
  },
};

$.ajax(settings).done(function (response) {
  console.log(result);
});

*/

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