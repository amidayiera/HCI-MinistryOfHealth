var map;
var myLatlng;
var infoPane=document.getElementById('item');
$(document).ready(function(){
geolocationInit();
  function geolocationInit(){
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(success,fail);
    }else{
      alert("Browser not supported");
    }
  }

  function success(position){
    console.log(position);
    var latvalue=position.coords.latitude;
    var lngvalue=position.coords.longitude;

    myLatlng=new google.maps.LatLng(latvalue,lngvalue);
    createMap(myLatlng);
    nearbySearch(myLatlng,"hospital");
  }

  function fail(){
    alert("Failed");
  }

  //Get coordinates
  function coordinates(){
    return '${latvalue},${lngvalue}';
  }
  
//Create map
  function createMap(myLatlng){
     map = new google.maps.Map(document.getElementById('map'), {
        center: myLatlng,
        zoom: 14
      });

     var marker=new google.maps.Marker({
        position: myLatlng,
        map: map
      })
     }
//Create marker
      function createMarker(latlng,icn,name,vicinity){
      var markers = new google.maps.Marker({
        position: latlng,
        map: map,
        icon:icn,
       // title:name
      });

      google.maps.event.addListener(markers,'click',function(){
        var request={
          placeId:place_id,
          fields:['name','vicinity','geometry','website']
        };
  
        service.getDetails(request,(placeResult,status)=>{
          showDetails(placeResult,markers,status)
        });

        function showDetails(placeResult,markers,status){
          if(status==google.maps.places.PlacesServiceStatus.OK){
              var placeInfoWindow=new google.maps.InfoWindow();
              placeInfoWindow.setContent('<div><strong>'+ name +'</strong><br>'+ vicinity +'</div>');
              placeInfoWindow.open(map,markers);
              google.maps.event.addListener(markers,'click',function(){
              placeInfoWindow.close();
              });
              //showPanel(placeResult);
             // displayPlaceDetails(placeResult,place_id);
             }
           else{
               console.log('showDetails failed:'+ status);
               }

              }
          });
    }
//Nearby search
    function nearbySearch(myLatlng,type){
      var request = {
        location: myLatlng,
        radius: '2500',
        type: [type],
        openNow:true
      };

      service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, callback);
      function callback(results, status) {
      
      
        //console.log(results);
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place=(results[i]);
            console.log(place);
            latlng=place.geometry.location;
            icn='https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            name=place.name;
            vicinity=place.vicinity;
            place_id=place.place_id;
            createMarker(latlng,icn,name,vicinity);
            displayPlaceDetails(name,vicinity);
            
            
            
        }
      }
    }
    }
    function displayPlaceDetails(name,vicinity){
      var names=document.createElement('h4');
      names.classList.add('header')
      names.textContent=name;
      infoPane.appendChild(names);
      var addresses=document.createElement('p');
      addresses.classList.add('meta');
      addresses.textContent=vicinity;
      infoPane.appendChild(addresses);
      infoPane.classList.add("list-group");

    
      }
      
    
    


});