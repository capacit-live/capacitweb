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

/** 
<script>
    var settings = {
      "url": "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map",
      "method": "GET",
      "timeout": 0,
      "headers": {
        "tokenHeader": "allow",
    //    "Access-Control-Allow-Origin" : "*", 
   //     "Access-Control-Allow-Credentials" : true,
        'Content-Type': 'application/json'
      },
      "body": JSON.stringify({ "message": "Hello World!" })
    };
    
    $.ajax(settings).done(function (response) {
      console.log(response);
    });
</script> */

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
getOccupancy(buildID);

function refresh(buildings) {
  for (var i in buildings)
    {
      var buildID = jQuery.param(buildings[i]);
      getOccupancy(buildID);
      //console.log(occupancy);
      //$('#'+buildings[i].building).html(occupancy);
    };
};
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
function getOccupancy(buildID ) {
  //  "async":"false"
  $.ajax( {
    type: "GET",
    async:false,
    url: "https://ngp39vpst8.execute-api.us-east-1.amazonaws.com/beta/-map?time=1200&" + buildID,
    headers: {
      "tokenHeader": "allow",
      "Content-Type": "application/json"
    },
    timeout: 0,
    success: function(data) {
      $('#'+buildings[i].building).html(occupancy);
      console.log(data);
    },
    error: function() {
      alert('Error occured');
    }
  });
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