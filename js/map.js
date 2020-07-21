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
  

/* ******    Would display the number for north ave
var buildID = jQuery.param(buildings[0]);
var northave = buildings[0].building;
var occ = getOccupancy(buildID, northave);
$('#'+northave).html(occ);
*/

getData(1200);


function startDemo() {
  var timeV = 1200;
  setInterval(function(){
    if (timeV > 1230) {
      clearInterval() ;
    } else {
      getData(timeV);
      timeV+=5;
    }
  }, 3000)
}
getData(1200);


function getData (curTime){
  for(var i in buildings) {
    console.log({time:curTime});
    var callTime = jQuery.param({time:curTime});
    var buildID = jQuery.param(buildings[i]);
    var name = buildings[i].building;
    getOccupancy(buildID, name, callTime);
  }
}

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
 * @param {*} buildingSpot The location in html map page to insert the number basically buildingID.building
 */
function getOccupancy(buildID,buildingSpot, time) {
  var rtn = "";
  //  "async":"false"
  $.ajax( {
    type: "GET",
   // async:false,
    url: "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map?" + time +"&" + buildID,
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
      $('#'+buildingSpot).html(rtn);
      setColor(buildingSpot, parseInt(rtn));
    },
    error: function() {
      alert('Error occured');
    }
  });
};;
;

function setColor(location, occVal) {
  console.log(location);
  if(occVal < 60){
    document.getElementById(location+"_row").style.backgroundColor="#d9ead3";
  } else if(occVal >= 60 && occVal <= 90){
    document.getElementById(location+"_row").style.backgroundColor="#fff2cc";
  } else if(occVal > 90){
    document.getElementById(location+"_row").style.backgroundColor="#ff9999";
  }
}




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
//button code

