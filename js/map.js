var script = document.createElement('script');
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

var buildings = [ {building:'northave'},
                  {building:'brittain'}, 
                  {building:'westvillage'},
                  {building:'crosland'},
                  {building:'culc'},
                  {building:'kendeda'},
                  {building:'hive'},
                  {building:'invention'},
                  {building:'mill'} ];

//$( "#northave" ).html( "Test" );

/* ******    Would display the number for north ave
var buildID = jQuery.param(buildings[0]);
var northave = buildings[0].building;
var occ = getOccupancy(buildID, northave);
$('#'+northave).html(occ);
*/

// **** Displays number for brittain on map page
var buildID1 = jQuery.param(buildings[1]);
var brittain = buildings[1].building;
var occ1 = getOccupancy(buildID1, brittain);
$('#'+brittain).html(occ1);

/************** Would display the number for west village 
var buildID2 = jQuery.param(buildings[2]);
var westvillage = buildings[2].building;
var occ2 = getOccupancy(buildID2, westvillage);
$('#'+westvillage).html(occ2);
*/

// Attempt at writing a loop to display numbers for all buildings, but run into issues w/ asynchronicity 
/*
function refresh (buildings) {
  for (var i in buildings)
    {
      var buildID = jQuery.param(buildings[i]);
      var buildSpot = buildings[i].building;
      var occ = getOccupancy(buildID, buildSpot);

      console.log(occ);
      $('#'+buildspot).html(occ);
    };
};
*/

// Old code from Posrman request -- probably no longer needed just reference 
/** 
function getOccupancy(buildID ) {
  var settings = {
    "async":"false",
    "url": "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map?time=1200&" + buildID,
    "method": "GET",
    "timeout": 0,
    "headers": {
      "tokenHeader": "allow",
      "Content-Type": "application/json"
    },
    "body": JSON.stringify({ "message": "Hello World!" })
  };
  
  $.ajax(settings).done(function (response) {
    //var data = JSON.stringify(response);
    var data = parseInt(response);
    console.log(data);
    return data;
  });
}*/

/**
 * Function to make the GET request for occupancy value for given building
 * Time is set at default 1200
 * This method works for individual calls but is crazy slow 
 * @param {*} buildID The ID of the building passed as an object in form {building:'name'}
 * @param {*} buildingSpot The location in html map page to insert the number
 */
function getOccupancy(buildID,buildingSpot) {
  var rtn = "";
  //  "async":"false"
  $.ajax( {
    type: "GET",
    async:false,
    url: "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map?time=1200&" + buildID,
    dataType: 'json',
    headers: {
      "tokenHeader": "allow",
      "Content-Type": "application/json"
    },
    timeout: 0,
    success: function(data) {
     // $('#'+buildingSpot).html(JSON.stringify(data));
      console.log(data);
      rtn = data;
    },
    error: function() {
      alert('Error occured');
    }
  });
  return rtn;
};;
;




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