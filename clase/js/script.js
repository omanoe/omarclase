var latitude;
var longitude;

function getLocation(){
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(a) {
      latitude = a.coords.latitude;
      longitude = a.coords.longitude;
      
      document.getElementById('latitude').innerHTML = latitude;
      document.getElementById('longitude').innerHTML = longitude;
    });

  }else{
    alert('Geo Locacion no Encontrada.');
  }
}